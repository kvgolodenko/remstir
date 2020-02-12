<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Case model
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
class Model_Case extends Model_Generic_Image {

	protected $_sorting = array('ord' => 'ASC');

	public static $title_field_name = 'portrait_title';
	public static $ext_field_name = 'portrait_ext';
	public static $uid_field_name = 'portrait_uid';
	public static $width_field_name = 'portrait_width';
	public static $height_field_name = 'portrait_height';

	public static $STORAGE_PATH = 'assets/cases/';


	const FORM_PREVIEW_NAME			= 'form_preview';
	const FORM_PREVIEW_W					= 464;
	const FORM_PREVIEW_H 					= 200;

	const GRID_PREVIEW_NAME				= 'grid_preview';
	const GRID_PREVIEW_W 					= 213;
	const GRID_PREVIEW_H 					= 120;

	const STANDARD_NAME 					= 'standard';
	const STANDARD_W 						= 1920;
	const STANDARD_H 						= 1260;

	const TEASER_NAME 					= 'teaser';
	const TEASER_W 						= 493;
	const TEASER_H 							= 328;
	
	


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
		self::TEASER_NAME => array(
			'width' => self::TEASER_W,
			'height' => self::TEASER_H,
			'mode'	=> self::RESIZE_MODE_MATCH_WIDTH,
		),
	);

	public function get_image_title() {
		return $this->category_orientation == self::CATEGORY_LANDSCAPE ? $this->landscape_title : $this->portrait_title;
	}

	public function get_mobile_img_url() {
		if ($this->category_orientation == self::CATEGORY_LANDSCAPE) {
			$landscape_image = Model_Case_Landscape_Image::factory(null, $this->id);
			return URL::site($landscape_image->url($landscape_image::MOBILE_NAME));
		} else {
			return URL::site($this->url(self::MOBILE_NAME));
		}
	}

	public function get_tablet_portrait_img_url() {
		if ($this->category_orientation == self::CATEGORY_LANDSCAPE) {
			$landscape_image = Model_Case_Landscape_Image::factory(null, $this->id);
			return URL::site($landscape_image->url($landscape_image::FILTERED_TABLET_PORTRAIT_NAME));
		} else {
			return URL::site($this->url(self::FILTERED_TABLET_PORTRAIT_NAME));
		}
	}

	public function get_tablet_landscape_img_url() {
		if ($this->category_orientation == self::CATEGORY_LANDSCAPE) {
			$landscape_image = Model_Case_Landscape_Image::factory(null, $this->id);
			return URL::site($landscape_image->url($landscape_image::FILTERED_TABLET_LANDSCAPE_NAME));
		} else {
			return URL::site($this->url(self::FILTERED_TABLET_LANDSCAPE_NAME));
		}
	}

	public function get_desktop_img_url() {
		if ($this->category_orientation == self::CATEGORY_LANDSCAPE) {
			$landscape_image = Model_Case_Landscape_Image::factory(null, $this->id);
			return URL::site($landscape_image->url($landscape_image::FILTERED_STANDARD_NAME));
		} else {
			return URL::site($this->url(self::FILTERED_STANDARD_NAME));
		}
	}

	public function get_url() {
			return URL::site('/case/'.$this->url_title, true);
	}
}

