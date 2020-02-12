<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Trainer model
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
 * @property string portrait_uid
 * @property string landscape_uid
 *
 */
class Model_Trainer extends Model_Generic_Image {

	protected $_sorting = array('ord' => 'ASC');

	public static $STORAGE_PATH = 'assets/trainers/';


	const FORM_PREVIEW_NAME					= 'form_preview';
	const FORM_PREVIEW_W					= 360;
	const FORM_PREVIEW_H 					= 360;

	const GRID_PREVIEW_NAME					= 'grid_preview';
	const GRID_PREVIEW_W 					= 130;
	const GRID_PREVIEW_H 					= 130;

	const STANDARD_NAME 					= 'standard';
	const STANDARD_W 						= 720;
	const STANDARD_H 						= 720;



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
}

