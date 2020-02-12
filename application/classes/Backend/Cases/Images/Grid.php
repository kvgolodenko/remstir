<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Articles_Images_Grid extends AVO_Data_Grid
{

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = TRUE;
		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM article_images WHERE article_id = :article_id',
			'select_query'		=> 'SELECT * FROM article_images WHERE article_id = :article_id ORDER BY ord',
			'find_query'		=> 'SELECT * FROM article_images WHERE id = :id',
			'delete_query'		=> 'DELETE FROM article_images WHERE id = :id',

			'update_query'		=>
				'UPDATE article_images
					SET
						id = :id,
						text = :text,
						video_url = :video_url
					WHERE id = :id',

			'insert_query'	=>
				'INSERT INTO article_images (ord, article_id, text, video_url)
					VALUES ((SELECT * FROM (SELECT IFNULL(MAX(ord), 0) + 1 FROM article_images WHERE article_id = :article_id) assets_ord), :article_id, :text, :video_url)',

			'move_parameters'	=> array(
				'table'			=> 'article_images',
				'where'			=> 'article_id = :article_id',
				'order_by'		=> 'ord'
			),

			'on_calc_parameter'	=> array($this, 'on_calc_data_source_parameter'),
			'model_class_name'	=> 'Model_Article_Image',
		));

		$edit_form = new Backend_Articles_Images_Form();
		$edit_form->datasource = $this->datasource;
		$this->forms = array(
			'edit_form'	=> $edit_form
		);

		$this->height = 340;
		$this->width = 745;

		$this->fields = new AVO_Controls_List(array(
			AVO_Field::std_drag_field(),
			new AVO_Field(array(
				'name'			=> 'no',
				'type'			=> AVO_Field::TYPE_INT,
				'width'			=> 40,
				'title'			=> __('#'),
				'calculated'	=> true,
				'function'		=> 'ds_abspos',
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'id',
				'type'			=> AVO_Field::TYPE_INT,
				'key'			=> true,
				'hidden'		=> true,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'preview',
				'type'			=> AVO_Field::TYPE_STRING,
				'encoded'		=> TRUE,
				'width'			=> Model_Article_Image::GRID_PREVIEW_W,
				'title'			=> __('preview'),
				'calculated'	=> TRUE,
			)),
			new AVO_Field(array(
				'name'			=> 'text',
				'type'			=> AVO_Field::TYPE_STRING,
				'width'			=> 230,
				'title'			=> __('Text'),
				'sortable'		=> FALSE,
				'function'		=> function ($val) {
					return Text::limit_chars(strip_tags($val));
				},
			)),
		));
		$this->parameters = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'article_id',
				'type'			=> AVO_Field::TYPE_INT,
			)),
		));
	}


	public function on_calc()
	{
		$image = Model_Article_Image::factory(null, $this->fields->id->value());
		$this->fields->preview->value(HTML::anchor(
			$image->url(Model_Article_Image::$ORIGINAL_NAME),
			HTML::image($image->url(Model_Article_Image::GRID_PREVIEW_NAME)),
			array('class' => 'zoomed_preview')
		));
	}

}
