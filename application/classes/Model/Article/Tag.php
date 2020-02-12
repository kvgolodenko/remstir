<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Article_Tag model
 * @author izaika
 *
 * @property int id
 * @property int article_id
 * @property int tag_id
 *
 */
class Model_Article_Tag extends ORM {
	protected $_table_name = 'articles_tags';
}

