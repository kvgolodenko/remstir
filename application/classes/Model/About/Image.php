<?php defined('SYSPATH') OR die('No direct script access.');

class Model_About_Image extends Model_Generic_Variables_Image {
	protected $_reload_on_wakeup = FALSE;
	public static $STORAGE_PATH	= 'assets/about_image/';

	const FORM_PREVIEW_NAME	= 'form_preview';
	const FORM_PREVIEW_W = 325;
	const FORM_PREVIEW_H = 347;

	const NORMAL_NAME 				= 'normal';
	const NORMAL_W 					= 2278;
	const NORMAL_H 					= 1000;

	const TABLET_LANDSCAPE_NAME	= 'tablet_landscape';
	const TABLET_LANDSCAPE_W 		= 1614;
	const TABLET_LANDSCAPE_H 		= 900;

	const TABLET_PORTRAIT_NAME 		= 'tablet_portrait';
	const TABLET_PORTRAIT_W 		= 1204;
	const TABLET_PORTRAIT_H 		= 600;

	const FB_NAME = 'share';
	const FB_W = 1200;
	const FB_H = 630;

	public static $title_field_name = 'about_img_title';
	public static $ext_field_name = 'about_img_ext';
	public static $uid_field_name = 'about_img_uid';
	public static $width_field_name = 'about_img_width';
	public static $height_field_name = 'about_img_height';


	public static $SIZES = array(
		self::FORM_PREVIEW_NAME => array(
			'width' => self::FORM_PREVIEW_W,
			'height' => self::FORM_PREVIEW_H,
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
	);
}
