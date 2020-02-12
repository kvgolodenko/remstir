<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Article_Landscape_Image model
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
 * @property string portrait_title
 * @property string portrait_uid
 * @property string portrait_ext
 * @property string portrait_width
 * @property string portrait_height
 * @property string landscape_title
 * @property string landscape_uid
 * @property string landscape_ext
 * @property string landscape_width
 * @property string landscape_height
 * @property string seo_title
 * @property string seo_keywords
 * @property string seo_description
 *
 */
class Model_Article_Landscape_Image extends Model_Article {

	protected $_table_name = 'articles';

	public static $title_field_name 	= 		'landscape_title';
	public static $ext_field_name 		= 'landscape_ext';
	public static $uid_field_name 		= 'landscape_uid';
	public static $width_field_name 	= 'landscape_width';
	public static $height_field_name	= 'landscape_height';
	public static $STORAGE_PATH 		= 'assets/articles_landscape_images/';

	const FORM_PREVIEW_NAME 			= 'form_preview';
	const FORM_PREVIEW_W 				= 464;
	const FORM_PREVIEW_H 				= 200;

	const GRID_PREVIEW_NAME 			= 'grid_preview';
	const GRID_PREVIEW_W 				= 213;
	const GRID_PREVIEW_H 				= 120;

	const NORMAL_NAME 					= 'normal';
	const NORMAL_W 						= 2278;
	const NORMAL_H 						= 1000;

	const TABLET_LANDSCAPE_NAME			= 'tablet_landscape';
	const TABLET_LANDSCAPE_W 			= 1614;
	const TABLET_LANDSCAPE_H 			= 900;

	const TABLET_PORTRAIT_NAME 			= 'tablet_portrait';
	const TABLET_PORTRAIT_W 			= 1204;
	const TABLET_PORTRAIT_H 			= 600;

	const MOBILE_NAME 					= self::FORM_PREVIEW_NAME;
	const MOBILE_W 						= self::FORM_PREVIEW_W;
	const MOBILE_H 						= self::FORM_PREVIEW_H;

	const FB_NAME 						= 'share';
	const FB_W 							= 1200;
	const FB_H 							= 630;

	const PREVIEW_STANDARD_NAME			= 'preview_standard';
	const PREVIEW_STANDARD_W			= 950;
	const PREVIEW_STANDARD_H			= 500;

	const PREVIEW_TABLET_LANDSCAPE_NAME	= 'preview_tablet_landscape';
	const PREVIEW_TABLET_LANDSCAPE_W	= 784;
	const PREVIEW_TABLET_LANDSCAPE_H	= 500;

	const PREVIEW_TABLET_PORTRAIT_NAME	= 'preview_tablet_portrait';
	const PREVIEW_TABLET_PORTRAIT_W		= 584;
	const PREVIEW_TABLET_PORTRAIT_H		= 300;

	const FILTERED_STANDARD_NAME 			= self::PREVIEW_STANDARD_NAME;
	const FILTERED_STANDARD_W 				= self::PREVIEW_STANDARD_W;
	const FILTERED_STANDARD_H 				= self::PREVIEW_STANDARD_H;

	const FILTERED_TABLET_LANDSCAPE_NAME	= self::PREVIEW_TABLET_LANDSCAPE_NAME;
	const FILTERED_TABLET_LANDSCAPE_W 		= self::PREVIEW_TABLET_LANDSCAPE_W;
	const FILTERED_TABLET_LANDSCAPE_H 		= self::PREVIEW_TABLET_LANDSCAPE_H;

	const FILTERED_TABLET_PORTRAIT_NAME		= self::PREVIEW_TABLET_PORTRAIT_NAME;
	const FILTERED_TABLET_PORTRAIT_W 		= self::PREVIEW_TABLET_PORTRAIT_W;
	const FILTERED_TABLET_PORTRAIT_H 		= self::PREVIEW_TABLET_PORTRAIT_H;







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
		self::NORMAL_NAME => array(
			'width' => self::NORMAL_W,
			'height' => self::NORMAL_H,
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
		self::FB_NAME => array(
			'width' => self::FB_W,
			'height' => self::FB_H,
			'mode'	=> self::RESIZE_MODE_MATCH_OUTSIDE_CROP,
		),
		self::PREVIEW_STANDARD_NAME => array(
			'width' => self::PREVIEW_STANDARD_W,
			'height' => self::PREVIEW_STANDARD_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::PREVIEW_TABLET_LANDSCAPE_NAME => array(
			'width' => self::PREVIEW_TABLET_LANDSCAPE_W,
			'height' => self::PREVIEW_TABLET_LANDSCAPE_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::PREVIEW_TABLET_PORTRAIT_NAME => array(
			'width' => self::PREVIEW_TABLET_PORTRAIT_W,
			'height' => self::PREVIEW_TABLET_PORTRAIT_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
	);
}

