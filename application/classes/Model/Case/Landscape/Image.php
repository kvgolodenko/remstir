<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Case_Landscape_Image model
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
class Model_Case_Landscape_Image extends Model_Case {

	protected $_table_name = 'cases';

	public static $title_field_name 		= 'landscape_title';
	public static $ext_field_name 		= 'landscape_ext';
	public static $uid_field_name 		= 'landscape_uid';
	public static $width_field_name 	= 'landscape_width';
	public static $height_field_name	= 'landscape_height';
	public static $STORAGE_PATH 		= 'assets/cases_landscape_images/';

	const FORM_PREVIEW_NAME 			= 'form_preview';
	const FORM_PREVIEW_W 				= 464;
	const FORM_PREVIEW_H 				= 200;

	const GRID_PREVIEW_NAME 			= 'grid_preview';
	const GRID_PREVIEW_W 				= 213;
	const GRID_PREVIEW_H 				= 120;

	const NORMAL_NAME 					= 'normal';
	const NORMAL_W 						= 2278;
	const NORMAL_H 						= 1000;

	

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
	);
}

