<?php defined('SYSPATH') OR die('No direct script access.');

class App {

	const TEMP_UPLOAD_STORAGE = 'assets/tmp/';

	public static function date_to_timestamp($date) {
		return strtotime($date);
	}

	public static function format_date($timestamp) {
		return strftime('%e.'.'%m.'.'%Y', strtotime($timestamp));
	}
	
	public static function format_article_date($timestamp) {
		return strftime('%b'.'.%Y', strtotime($timestamp));
	}
	
	public static function format_teaser_article_date($timestamp) {
		return strftime('%B %Y', strtotime($timestamp));
	}
	public static function format_blog_article_date($timestamp) {
		return strftime('%d. '. '%B '.' %Y ', strtotime($timestamp));
	}
}
