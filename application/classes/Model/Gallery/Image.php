<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Gallery model
 * @author izaika
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
 * @property string portrait_uid
 * @property string landscape_uid
 * @property string portrait_ext
 * @property string landscape_ext
 * @property string portrait_title
 * @property string landscape_title
 */
class Model_Gallery_Image extends Model_Generic_Image {

	protected $_sorting = array('ord' => 'ASC');
	protected $_table_name = 'album_pictures';
	protected $_belongs_to = array(
		'album' => array(
			'model'	=> 'Gallery_Album'
			),
		);

	public static $STORAGE_PATH = 'assets/album_pictures/';


	const FORM_PREVIEW_NAME					= 'form_preview';
	const FORM_PREVIEW_W					= 464;
	const FORM_PREVIEW_H 					= 200;

	const GRID_PREVIEW_NAME					= 'grid_preview';
	const GRID_PREVIEW_W 					= 213;
	const GRID_PREVIEW_H 					= 120;

	const STANDARD_NAME 					= 'standard';
	const STANDARD_W 						= 1920;
	const STANDARD_H 						= 900;
	
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

	public function get_url() {
			return URL::site($this->url_title, true);
	}
}

