<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Contact model
 * @author kirill
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
class Model_Contact extends ORM {
	public $_sorting = array('ord' => 'ASC');
}

