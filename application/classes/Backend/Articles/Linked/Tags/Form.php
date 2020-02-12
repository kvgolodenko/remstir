<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Articles_Linked_Tags_Form extends Backend_Tags_Form {

	public function __construct() {
		parent::__construct();
		$this->parameters = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'article_id',
				'type'			=> AVO_Field::TYPE_INT,
			)),
		));
	}


	public function after_save(AVO_Data_Form_Action_Result $result) {
		parent::after_save($result);
		$id = (int) $result->id;
		if ($id) {
			$article_id = $this->parameters->article_id->value();
			$article = Model_Article::factory()->where('id', '=', $article_id)->find();
			if ($article->loaded()) {
				$article->add('tags', $id);
			}
		}
	}

}
