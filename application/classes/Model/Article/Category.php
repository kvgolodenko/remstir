<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Article_Category model
 * @author izaika
 *
 * @property int id
 * @property int article_id
 * @property int category_id
 *
 */
class Model_Article_Category extends ORM {
	protected $_table_name = 'articles_categories';
}

