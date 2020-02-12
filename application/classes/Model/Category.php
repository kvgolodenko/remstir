<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Category model
 * @author izaika
 *
 * @property int id
 * @property string created
 * @property string modified
 * @property int modify_count
 * @property int ord
 * @property string title
 * @property string quote
 * @property int posts_before_first_ad
 * @property int posts_between_ads
 * @property string url_title
 * @property string seo_title
 * @property string seo_keywords
 * @property string seo_description
 *
 */
class Model_Category extends Model_Generic_Image {
	protected $_sorting = array('ord' => 'ASC');
	
	public static $title_field_name = 'img_title';
	public static $ext_field_name = 'img_ext';
	public static $uid_field_name = 'img_uid';
	public static $width_field_name = 'img_width';
	public static $height_field_name = 'img_height';
	
	public static $STORAGE_PATH = 'assets/categories/';
	
	
	const FORM_PREVIEW_NAME					= 'form_preview';
	const FORM_PREVIEW_W					= 540;
	const FORM_PREVIEW_H 					= 360;
	
	const GRID_PREVIEW_NAME					= 'grid_preview';
	const GRID_PREVIEW_W 					= 360;
	const GRID_PREVIEW_H 					= 240;
	
	const STANDARD_NAME 					= 'standard';
	const STANDARD_W 						= 1920;
	const STANDARD_H 						= 960;
	
	const NORMAL_NAME 					= 'normal';
	const NORMAL_W 						= 960;
	const NORMAL_H 						= 480;
	
	
	
	public static $SIZES = array(
			self::FORM_PREVIEW_NAME => array(
					'width' => self::FORM_PREVIEW_W,
					'height' => self::FORM_PREVIEW_H,
					'mode'	=> self::RESIZE_MODE_MATCH_OUTSIDE_CROP,
			),
			self::GRID_PREVIEW_NAME => array(
					'width' => self::GRID_PREVIEW_W,
					'height' => self::GRID_PREVIEW_H,
					'mode'	=> self::RESIZE_MODE_MATCH_OUTSIDE_CROP,
			),
			self::STANDARD_NAME => array(
					'width' => self::STANDARD_W,
					'height' => self::STANDARD_H,
					'mode'	=> self::RESIZE_MODE_MATCH_OUTSIDE_CROP,
			),
	);

	public function get_url() {
		return URL::site('/category/'.$this->url_title, false);
	}
}

