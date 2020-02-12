<?php

class Controller_Admin_Helper extends Controller_Admin_Abstract_Authenticated {

	/**
	 * Proposal for the tags in the keywords
	 *
	 */
	public function action_tags()
	{
		$this->auto_render = FALSE;

		$tags = array();
		// trim and lowercase the keyword
		$keyword = UTF8::strtolower(UTF8::trim((string) Request::current()->post('term')));
		// do we have any keyword typed and the last one is at least 2 chars long?
		if (UTF8::strlen($keyword) >= 2)
		{
			$ds = DB::query(Database::SELECT,
				'SELECT id, tag FROM keywords WHERE tag LIKE :keyword ORDER BY tag LIMIT 10'
			)->param(':keyword', $keyword . '%')->execute();
			foreach ($ds as $row)
			{
				$tags[] = array(
					'id' => $row['id'],
					'label' => $row['tag'],
					'value' => $row['tag'],
				);
			}
		}
		$this->response->json()->no_cache()->body(json_encode($tags));
	}



	/**
	 * Add video for the edit form
	 */
	private function _add_generic_video($model)
	{
		$this->auto_render = FALSE;
		$video_url = $this->request->post('url');
		$result = new stdClass();
		if (preg_match('|^https?://vimeo.com/\d+$|', $video_url))
		{
			$static_url = 'http://vimeo.com/api/oembed.json?url=';
			$video_width = $this->request->post('width');
			$curl = curl_init($static_url.rawurlencode($video_url) . '&width=' . $video_width);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_TIMEOUT, 15);
			$data_json = json_decode(curl_exec($curl));
			curl_close($curl);
			if ($data_json)
			{
				if (isset($data_json->thumbnail_url))
				{
					$upload_id = $this->request->post('upload_id');
					$tmp_image_file = tempnam(App::TEMP_UPLOAD_STORAGE, Session::instance()->id());
					$fp = fopen($tmp_image_file, 'w');
					$ch = curl_init($data_json->thumbnail_url);
					curl_setopt($ch, CURLOPT_FILE, $fp);
					curl_setopt($ch, CURLOPT_TIMEOUT, 15);
					curl_exec($ch);
					curl_close($ch);
					fclose($fp);
					$tmp_file_path_base = $model::get_temp_storage_base($upload_id);
					$ext = $model::create_resized_images($tmp_image_file, $tmp_file_path_base);
					$result->ext = $ext;
					$result->upload_id = $upload_id;
					$no_cache_suffix = '?nocache='.mt_rand();
					$storage_url_base = $model::get_temp_storage_base_url($upload_id);
					$result->html = HTML::anchor(
						$storage_url_base.$model::$ORIGINAL_NAME.'.'.$ext.$no_cache_suffix,
						HTML::image($storage_url_base.$model::FORM_PREVIEW_NAME.'.'.$ext.$no_cache_suffix),
						array('class' => 'zoomed_preview')
					);
				}
				else
				{
					$result->html = $model::get_arbitrate_video($video_url, $model::FORM_PREVIEW_W);
				}

				$result->title = (property_exists($data_json, 'title')) ? $data_json->title : '';
				$result->status = 0;
				$result->message = __('Video added');
			}
			else
			{
				$result->status = 1;
				$result->message = __('Incorrect video ID');
			}
		}
		elseif (preg_match("/youtube.com\/watch\?v=/", $video_url))
		{
			$youtube_id = substr($video_url, strpos($video_url, 'watch?v=')+8, strlen($video_url));
			$thumb_url = 'http://img.youtube.com/vi/'.$youtube_id.'/maxresdefault.jpg';

			$upload_id = $this->request->post('upload_id');
			$tmp_image_file = tempnam(App::TEMP_UPLOAD_STORAGE, Session::instance()->id());
			$fp = fopen($tmp_image_file, 'w');
			$ch = curl_init($thumb_url);
			curl_setopt($ch, CURLOPT_FILE, $fp);
			curl_setopt($ch, CURLOPT_TIMEOUT, 15);
			curl_exec($ch);
			curl_close($ch);
			fclose($fp);
			$tmp_file_path_base = $model::get_temp_storage_base($upload_id);
			$ext = $model::create_resized_images($tmp_image_file, $tmp_file_path_base);
			$result->ext = $ext;
			$result->upload_id = $upload_id;
			$no_cache_suffix = '?nocache=' . mt_rand();
			$storage_url_base = $model::get_temp_storage_base_url($upload_id);
			$result->html = HTML::anchor(
				$storage_url_base . $model::$ORIGINAL_NAME.'.'.$ext.$no_cache_suffix,
				HTML::image($storage_url_base . $model::FORM_PREVIEW_NAME.'.'.$ext.$no_cache_suffix),
				array('class' => 'zoomed_preview')
			);


			$result->status = 0;
			$result->message = __('Video added: '.$youtube_id);
		} else {
			$result->status = 1;
			$result->message = __('Failed to fetch video image');
		}

		echo json_encode($result);
	}


	/**
	 * Add video action handler for the article images edit form
	 * @noview
	 */
	public function action_add_article_video()
	{
		$this->_add_generic_video('Model_Article_Image');
	}


	/**
	 * article_file action handler.
	 * Downloads an article file
	 *
	 */
	public function action_article_file()
	{
		Model_Article_File::serve_file_download($this->request->param('id'), $this->request->param('uid'), $this->request->param('filename'));
	}



	/**
	 * product_file action handler.
	 * Downloads a product file
	 *
	 */
	public function action_product_file()
	{
		Model_Product::serve_file_download($this->request->param('id'), $this->request->param('uid'), $this->request->param('filename'));
	}


	public function action_regenerate_images()
	{
		set_time_limit(0);
		Model_Tv_Banner::regenerate_all();
		echo 'all done';
	}



	public function action_regenerate_search_indexes()
	{
		set_time_limit(0);
		foreach (array('Model_Article') as $model_name)
		{
			AVO_Search_ZendSearch::instance()->index($model_name);
			AVO_Search_ZendSearch::instance()->get_index($model_name)->optimize();
		}
		File::clear_cache();
		echo 'all done';
	}
}
