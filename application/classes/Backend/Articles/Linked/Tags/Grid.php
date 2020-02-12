<?php defined('SYSPATH') or die('No direct access allowed.');

class Backend_Articles_Linked_Tags_Grid extends AVO_Data_Grid {

	public function __construct()
	{
		parent::__construct();

		$this->height = 420;
		$this->width = 720;
		$this->clear_cache = true;
		$this->allow_delete = false;
		$this->allow_move = false;
		$this->allow_update = false;

		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM tags',
			'select_query'		=> 'SELECT t.*, (IFNULL(at.id, 0) > 0) AS belongs_to FROM tags t LEFT JOIN articles_tags at ON (t.id = at.tag_id AND at.article_id = :article_id) ORDER BY t.ord',
			'find_query'		=> 'SELECT * FROM tags WHERE id = :id',

			'insert_query'	=>
					'BEGIN;
					INSERT INTO tags (ord, title, url_title)
						VALUES ((SELECT * FROM (SELECT IFNULL(MIN(ord) - 1, 0) FROM tags) assets_ord), :title, :url_title);
					INSERT into articles_tags (article_id, tag_id)
						VALUES (:article_id, LAST_INSERT_ID());
					COMMIT;',

			'on_calc_parameter'	=> array($this, 'on_calc_data_source_parameter'),
			'model_class_name'	=> 'Model_Tag',
			'custom_errors' => array(
				'/Duplicate entry \'.+?\' for key \'url_title\'/' => array('url_title', __('duplicate value')),
			),
		));

		$this->parameters = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'article_id',
				'type'			=> AVO_Field::TYPE_INT,
			)),
			new AVO_Field(array(
				'name'			=> 'action_id',
				'type'			=> AVO_Field::TYPE_INT,
			)),
			new AVO_Field(array(
				'name'			=> 'action_kind',
				'type'			=> AVO_Field::TYPE_INT,
			)),
		));

		$edit_form = new Backend_Articles_Linked_Tags_Form();
		$edit_form->datasource = $this->datasource;
		$this->forms = array(
			'edit_form'	=> $edit_form
		);

		$this->fields = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'id',
				'type'			=> AVO_Field::TYPE_INT,
				'key'			=> true,
				'hidden'		=> true,
				'sortable'		=> false,
			)),
			new AVO_Field(array(
				'name'			=> 'title',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> 'Title',
				'sortable'		=> false,
			)),
			new AVO_Field(array(
				'name'			=> 'url_title',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> 'URL Title',
				'sortable'		=> false,
			)),
			new AVO_Field(array(
				'name'			=> 'belongs_to',
				'type'			=> AVO_Field::TYPE_BOOL,
				'title'			=> 'belongs to?',
				'width'			=> 60,
				'sortable'		=> false,
				'class_extension'       => '{
					onChange: function (event) {
						var checkbox = $(event.target);
						this.parent().update("add_remove_tag", {action_id: checkbox.closest("tr").data("id"), action_kind: checkbox.is(":checked") ? 1 : 0});
					}
				}',
			)),
		));
	}


	public function action_add_remove_tag(AVO_Data_Grid_Action_Result $action_state)
	{
		$id = (int) $this->parameters->action_id->value();
		$kind = (int) $this->parameters->action_kind->value();
		try {
			if ($id) {
				$article_id = $this->parameters->article_id->value();
				$article = Model_Article::factory()->where('id', '=', $article_id)->find();
				if ($article->loaded()) {
					if ($kind == 1) {
						$article->add('tags', $id);
					} else {
						$article->remove('tags', $id);
					}
				}
			}
			$action_state->message = ($kind == 1) ? __('tag assigned') : __('tag removed');
			$action_state->status = 2;
		} catch (Exception $e) {
			$action_state->message = __('exception occured: '.$e);
			$action_state->status = 1;
		}
		$action_state->processed = true;
		$action_state->get_data = false;
	}

}
