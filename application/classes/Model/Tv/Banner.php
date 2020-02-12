<?php

/**
 * Tv_Banner model
 * @author izaika
 *
 * @property int id
 * @property string created
 * @property string modified
 * @property int modify_count
 * @property int ord
 * @property int tv_banner_position_id
 * @property string heading
 * @property string preview_text
 * @property string page_url
 * @property int preview_width
 * @property string title
 * @property string uid
 * @property string ext
 * @property string width
 * @property string height
 * @property string ext
 * @property string width
 * @property string height
 *
 */
class Model_Tv_Banner extends Model_Generic_Image {

	protected $_belongs_to = array(
		'position' => array(
			'model'       => 'Tv_Banner_Position',
			'foreign_key' => 'tv_banner_position_id',
		),
	);

	public static $STORAGE_PATH = 'assets/tv/';

	const LANDSCAPE_1_2_WIDTH	= 0;
	const LANDSCAPE_2_3_WIDTH	= 1;
	const LANDSCAPE_FULL_WIDTH	= 2;


	const FORM_PREVIEW_NAME		= 'form_preview';
	const FORM_PREVIEW_W		= 464;
	const FORM_PREVIEW_H 		= 200;

	const GRID_PREVIEW_NAME		= 'grid_preview';
	const GRID_PREVIEW_W 		= 213;
	const GRID_PREVIEW_H 		= 120;

	const NORMAL_NAME 			= 'normal';
	const NORMAL_W 				= 2278;
	const NORMAL_H 				= 1000;

	const TABLET_LANDSCAPE_NAME	= 'tablet_landscape';
	const TABLET_LANDSCAPE_W 	= 1614;
	const TABLET_LANDSCAPE_H 	= 900;

	const TABLET_PORTRAIT_NAME 	= 'tablet_portrait';
	const TABLET_PORTRAIT_W 	= 1204;
	const TABLET_PORTRAIT_H 	= 600;

	const MOBILE_NAME			= self::FORM_PREVIEW_NAME;
	const MOBILE_W 				= self::FORM_PREVIEW_W;
	const MOBILE_H 				= self::FORM_PREVIEW_H;



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
		)
	);
}

