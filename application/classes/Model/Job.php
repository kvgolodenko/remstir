<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Job model
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
class Model_Job extends Model_Generic_Image {

	protected $_sorting = array('ord' => 'ASC');

	public static $STORAGE_PATH = 'assets/jobs/';

}

