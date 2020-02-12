<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Startpage_Image model
 * @author kirill
 *
 * @property int id
 * @property string created
 * @property string modified
 * @property int modify_count
 * @property int ord
 * @property text text
 * @property string title
 * @property string uid
 * @property string ext
 * @property string width
 * @property string height
 *
 */
class Model_Startpage_Image extends Model_Generic_Variables_Image {
	protected $_sorting = array('ord' => 'ASC');

	public static $STORAGE_PATH = 'assets/startpage_images/';

	const FORM_PREVIEW_NAME = 'form_preview';
	const FORM_PREVIEW_W = 464;
	const FORM_PREVIEW_H = 200;

	const GRID_PREVIEW_NAME = 'grid_preview';
	const GRID_PREVIEW_W = 213;
	const GRID_PREVIEW_H = 120;

	const PORTRAIT_NAME = 'portrait';
	const PORTRAIT_W = 950;
	const PORTRAIT_H = 300;

	const TL_PORTRAIT_NAME = self::PORTRAIT_NAME;
	const TL_PORTRAIT_W = self::PORTRAIT_W;
	const TL_PORTRAIT_H = self::PORTRAIT_H;

	const TP_PORTRAIT_NAME = 'tp_portrait';
	const TP_PORTRAIT_W = 708;
	const TP_PORTRAIT_H = 300;



	const LANDSCAPE_NAME = 'landscape';
	const LANDSCAPE_W = 1614;
	const LANDSCAPE_H = 400;
	
	const STANDARD_NAME = 'standard';
	const STANDARD_W = 1920;
	const STANDARD_H = 1280;

	const TL_LANDSCAPE_NAME = self::LANDSCAPE_NAME;
	const TL_LANDSCAPE_W = self::LANDSCAPE_W;
	const TL_LANDSCAPE_H = self::LANDSCAPE_H;

	const TP_LANDSCAPE_NAME = 'tp_landscape';
	const TP_LANDSCAPE_W = 1204;
	const TP_LANDSCAPE_H = 400;



	const MOBILE_NAME = self::FORM_PREVIEW_NAME;
	const MOBILE_W = self::FORM_PREVIEW_W;
	const MOBILE_H = self::FORM_PREVIEW_H;

	public static $title_field_name = 'startpage_img_title';
	public static $ext_field_name = 'startpage_img_ext';
	public static $uid_field_name = 'startpage_img_uid';
	
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
		self::PORTRAIT_NAME => array(
			'width' => self::PORTRAIT_W,
			'height' => self::PORTRAIT_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::TP_PORTRAIT_NAME => array(
			'width' => self::TP_PORTRAIT_W,
			'height' => self::TP_PORTRAIT_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::LANDSCAPE_NAME => array(
			'width' => self::LANDSCAPE_W,
			'height' => self::LANDSCAPE_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::STANDARD_NAME => array(
			'width' => self::STANDARD_W,
			'height' => self::STANDARD_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::TP_LANDSCAPE_NAME => array(
			'width' => self::TP_LANDSCAPE_W,
			'height' => self::TP_LANDSCAPE_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
	);
}
