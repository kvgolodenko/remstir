<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * News_Article model
 * @author kirill
 *
 * @property int id
 * @property string created
 * @property string modified
 * @property int modify_count
 * @property int ord
 * @property string heading
 * @property string body_text
 * @property string frontend_date
 * @property bool is_sticky
 * @property bool is_wide
 * @property bool is_archived
 * @property string url_title
 * @property string title
 * @property string uid
 * @property string ext
 * @property string width
 * @property string height
 * @property string preview_title
 * @property string preview_uid
 * @property string preview_ext
 * @property string preview_width
 * @property string preview_height
 * @property string seo_title
 * @property string seo_keywords
 * @property string seo_description
 *
 */
class Model_News_Article extends Model_Generic_Image {

	protected $_sorting = array('ord' => 'ASC');
	protected $_table_name = 'blog_articles';

	public static $title_field_name = 'portrait_title';
	public static $ext_field_name = 'portrait_ext';
	public static $uid_field_name = 'portrait_uid';
	public static $width_field_name = 'portrait_width';
	public static $height_field_name = 'portrait_height';

	public static $STORAGE_PATH = 'assets/blog_portrait_images/';

	protected $_has_many = array(
		'images' => array(
			'model' => 'Blog_Image',
		)
	);

	const LANDSCAPE_1_2_WIDTH	= 0;
	const LANDSCAPE_2_3_WIDTH	= 1;
	const LANDSCAPE_FULL_WIDTH	= 2;
	const PORTRAIT_1_2_WIDTH	= 3;

	const CATEGORY_PORTRAIT		= 0;
	const CATEGORY_LANDSCAPE	= 1;

	const RANDOM_TEASERS		= 3;

	/**
	 * Map for indexing
	 *
	 * Possible types of fields: keyword, unIndexed, binary, text, unStored
	 *
	 */
	public static function index_map()
	{
		return array(
			array(
				'name' 		=> 'id',
				'type' 		=> 'text',
				'boost'		=> 0.1
			),
			array(
				'name' 		=> 'heading',
				'type' 		=> 'text'
			),
			array(
				'name' 		=> 'preview_text',
				'type' 		=> 'text',
				'boost' 	=> 0.9
			),
			array(
				'name' 		=> 'body_text',
				'type' 		=> 'unStored',
				'boost'		=> 0.8
			),
			array(
				'name' 		=> 'is_draft',
				'type' 		=> 'unIndexed',
			),
			array(
				'name' 		=> 'frontend_date',
				'type' 		=> 'unIndexed',
			),
			array(
				'name' 		=> 'title',
				'type' 		=> 'unIndexed',
				'method'	=> 'get_image_title',
			),
			array(
				'name' 		=> 'landscape_title',
				'type'		=> 'unIndexed',
			),
			array(
				'name' 		=> 'article_url',
				'type' 		=> 'unIndexed',
				'method' 	=> 'get_url'
			),
			array(
				'name' 		=> 'has_video',
				'type' 		=> 'unIndexed',
				'method' 	=> 'check_if_article_has_video'
			),
			array(
				'name' => 'desktop_img',
				'type' => 'unIndexed',
				'method' => 'get_desktop_img_url'
			),
			array(
				'name' => 'tablet_landscape_img',
				'type' => 'unIndexed',
				'method' => 'get_tablet_landscape_img_url'
			),
			array(
				'name' => 'tablet_portrait_img',
				'type' => 'unIndexed',
				'method' => 'get_tablet_portrait_img_url'
			),
			array(
				'name' => 'mobile_img',
				'type' => 'unIndexed',
				'method' => 'get_mobile_img_url'
			),

		);
	}

	/**
	 * Important values of fields for ORM-query,
	 *
	 * Possible types of fields: keyword, unIndexed, binary, text, unStored
	 *
	 */
	public static function index_filters()
	{
		return array();
	}



	const FORM_PREVIEW_NAME					= 'form_preview';
	const FORM_PREVIEW_W					= 464;
	const FORM_PREVIEW_H 					= 200;

	const GRID_PREVIEW_NAME					= 'grid_preview';
	const GRID_PREVIEW_W 					= 213;
	const GRID_PREVIEW_H 					= 120;

	const STANDARD_NAME 					= 'standard';
	const STANDARD_W 						= 784;
	const STANDARD_H 						= 300;

	const TABLET_LANDSCAPE_NAME 			= 'tablet_landscape';
	const TABLET_LANDSCAPE_W 				= 618;
	const TABLET_LANDSCAPE_H 				= 300;

	const TABLET_PORTRAIT_NAME 				= 'tablet_portrait';
	const TABLET_PORTRAIT_W 				= 460;
	const TABLET_PORTRAIT_H 				= 200;

	const ALONE_STANDARD_NAME 				= 'alone_standard';
	const ALONE_STANDARD_W 					= 1140;
	const ALONE_STANDARD_H 					= 300;

	const ALONE_TABLET_LANDSCAPE_NAME 		= 'alone_tablet_landscape';
	const ALONE_TABLET_LANDSCAPE_W 			= 808;
	const ALONE_TABLET_LANDSCAPE_H 			= 300;

	const ALONE_TABLET_PORTRAIT_NAME 		= 'alone_tablet_portrait';
	const ALONE_TABLET_PORTRAIT_W 			= 602;
	const ALONE_TABLET_PORTRAIT_H 			= 200;

	const FILTERED_STANDARD_NAME 			= 'filtered_standard';
	const FILTERED_STANDARD_W 				= 950;
	const FILTERED_STANDARD_H 				= 200;

	const FILTERED_TABLET_LANDSCAPE_NAME	= self::STANDARD_NAME;
	const FILTERED_TABLET_LANDSCAPE_W 		= self::STANDARD_W;
	const FILTERED_TABLET_LANDSCAPE_H 		= self::STANDARD_H;

	const FILTERED_TABLET_PORTRAIT_NAME		= 'filtered_tablet_portrait';
	const FILTERED_TABLET_PORTRAIT_W 		= 584;
	const FILTERED_TABLET_PORTRAIT_H 		= 200;

	const MOBILE_NAME						= self::FORM_PREVIEW_NAME;
	const MOBILE_W 							= self::FORM_PREVIEW_W;
	const MOBILE_H 							= self::FORM_PREVIEW_H;


	public static $SIZES = array(
		self::FORM_PREVIEW_NAME => array(
			'width' => self::FORM_PREVIEW_W,
			'height' => self::FORM_PREVIEW_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::GRID_PREVIEW_NAME => array(
			'width' => self::GRID_PREVIEW_W,
			'height' => self::GRID_PREVIEW_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::STANDARD_NAME => array(
			'width' => self::STANDARD_W,
			'height' => self::STANDARD_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::TABLET_LANDSCAPE_NAME => array(
			'width' => self::TABLET_LANDSCAPE_W,
			'height' => self::TABLET_LANDSCAPE_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::TABLET_PORTRAIT_NAME => array(
			'width' => self::TABLET_PORTRAIT_W,
			'height' => self::TABLET_PORTRAIT_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::ALONE_STANDARD_NAME => array(
			'width' => self::ALONE_STANDARD_W,
			'height' => self::ALONE_STANDARD_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::ALONE_TABLET_LANDSCAPE_NAME => array(
			'width' => self::ALONE_TABLET_LANDSCAPE_W,
			'height' => self::ALONE_TABLET_LANDSCAPE_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::ALONE_TABLET_PORTRAIT_NAME => array(
			'width' => self::ALONE_TABLET_PORTRAIT_W,
			'height' => self::ALONE_TABLET_PORTRAIT_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::FILTERED_STANDARD_NAME => array(
			'width' => self::FILTERED_STANDARD_W,
			'height' => self::FILTERED_STANDARD_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::FILTERED_TABLET_PORTRAIT_NAME => array(
			'width' => self::FILTERED_TABLET_PORTRAIT_W,
			'height' => self::FILTERED_TABLET_PORTRAIT_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
	);

	public function check_if_article_has_video() {
		return $this->video_url || $this->images->where('video_url', 'IS NOT', null)->cached()->count_all();
	}

	public function get_image_title() {
		return $this->category_orientation == self::CATEGORY_LANDSCAPE ? $this->landscape_title : $this->portrait_title;
	}

	public function get_mobile_img_url() {
		if ($this->category_orientation == self::CATEGORY_LANDSCAPE) {
			$landscape_image = Model_Article_Landscape_Image::factory(null, $this->id);
			return URL::site($landscape_image->url($landscape_image::MOBILE_NAME));
		} else {
			return URL::site($this->url(self::MOBILE_NAME));
		}
	}

	public function get_tablet_portrait_img_url() {
		if ($this->category_orientation == self::CATEGORY_LANDSCAPE) {
			$landscape_image = Model_Article_Landscape_Image::factory(null, $this->id);
			return URL::site($landscape_image->url($landscape_image::FILTERED_TABLET_PORTRAIT_NAME));
		} else {
			return URL::site($this->url(self::FILTERED_TABLET_PORTRAIT_NAME));
		}
	}

	public function get_tablet_landscape_img_url() {
		if ($this->category_orientation == self::CATEGORY_LANDSCAPE) {
			$landscape_image = Model_Article_Landscape_Image::factory(null, $this->id);
			return URL::site($landscape_image->url($landscape_image::FILTERED_TABLET_LANDSCAPE_NAME));
		} else {
			return URL::site($this->url(self::FILTERED_TABLET_LANDSCAPE_NAME));
		}
	}

	public function get_desktop_img_url() {
		if ($this->category_orientation == self::CATEGORY_LANDSCAPE) {
			$landscape_image = Model_Article_Landscape_Image::factory(null, $this->id);
			return URL::site($landscape_image->url($landscape_image::FILTERED_STANDARD_NAME));
		} else {
			return URL::site($this->url(self::FILTERED_STANDARD_NAME));
		}
	}

	public function get_url() {
			return URL::site('/news_article/'.$this->url_title, false);
		}
}

