<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Tag model
 * @author izaika
 *
 * @property int id
 * @property string created
 * @property string modified
 * @property int modify_count
 * @property int ord
 * @property string title
 * @property string url_title
 * @property string seo_title
 * @property string seo_keywords
 * @property string seo_description
 *
 */
class Model_Tag extends ORM {
	protected $_sorting = array('ord' => 'ASC');
	protected $_has_many = array(
		'articles' => array(
			'model'		=> 'Article',
			'through'	=> 'articles_tags'
		),
	);

	public function get_url() {
		return URL::site('/tag/'.$this->url_title, true);
	}
	public function get_archive_url() {
		return URL::site('/archive/tag/'.$this->url_title, true);
	}
}

