<?php
class Model_Blog_Startpage_Image extends Model_Generic_Variables_Image {

	protected $_reload_on_wakeup = FALSE;

	public static $STORAGE_PATH = 'assets/startpage_image/';

	const NORMAL_NAME		= 'normal';
	const NORMAL_W			= 3000;
	const NORMAL_H			= 2000;

	const MOBILE_NAME		= 'mobile';
	const MOBILE_W			= 640;
	const MOBILE_H			= 480;

	const FORM_PREVIEW_NAME	= 'form_preview';
	const FORM_PREVIEW_W	= 600;
	const FORM_PREVIEW_H	= 400;

	const GRID_PREVIEW_NAME	= 'grid_preview';
	const GRID_PREVIEW_W 	= 320;
	const GRID_PREVIEW_H 	= 238;

	public static $title_field_name = 'blog_img_title';
	public static $ext_field_name = 'blog_img_ext';
	public static $uid_field_name = 'blog_img_uid';
// 	public static $crop_data_field_name = 'start_img_crop_data';


	public static $SIZES = array(
		self::FORM_PREVIEW_NAME => array(
			'width' => self::FORM_PREVIEW_W,
			'height' => self::FORM_PREVIEW_H,
			'mode'	=> 'match_inside',
		),
		self::GRID_PREVIEW_NAME => array(
			'width' => self::GRID_PREVIEW_W,
			'height' => self::GRID_PREVIEW_H,
			'mode'	=> 'match_outside_crop',
		),
		self::NORMAL_NAME => array(
			'width' => self::NORMAL_W,
			'height' => self::NORMAL_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
		self::MOBILE_NAME => array(
			'width' => self::MOBILE_W,
			'height' => self::MOBILE_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
	);
}
