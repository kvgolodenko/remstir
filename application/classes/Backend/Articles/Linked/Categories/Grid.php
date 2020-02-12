<?php defined('SYSPATH') or die('No direct access allowed.');

class Backend_Articles_Linked_Categories_Grid extends AVO_Data_Grid {

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
			'count_query'		=> 'SELECT COUNT(*) FROM categories',
			'select_query'		=> 'SELECT c.*, (IFNULL(ac.id, 0) > 0) AS belongs_to FROM categories c LEFT JOIN articles_categories ac ON (c.id = ac.category_id AND ac.article_id = :article_id) ORDER BY c.ord',
			'find_query'		=> 'SELECT * FROM categories WHERE id = :id',

			'insert_query'	=>
					'INSERT INTO categories (
						ord,
						quote,
						title,
						posts_before_first_ad,
						posts_between_ads,
						url_title,
						seo_title,
						seo_keywords,
						seo_description
					)
					VALUES (
						(SELECT * FROM (SELECT IFNULL(MIN(ord) - 1, 0) FROM categories) assets_ord),
						:quote,
						:title,
						:posts_before_first_ad,
						:posts_between_ads,
						:url_title,
						:seo_title,
						:seo_keywords,
						:seo_description
					)',

			'on_calc_parameter'	=> array($this, 'on_calc_data_source_parameter'),
			'model_class_name'	=> 'Model_Category',
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

		$edit_form = new Backend_Articles_Linked_Categories_Form();
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
				'name'			=> 'belongs_to',
				'type'			=> AVO_Field::TYPE_BOOL,
				'title'			=> 'belongs to?',
				'width'			=> 60,
				'sortable'		=> false,
				'class_extension'       => '{
					onChange: function (event) {
						var checkbox = $(event.target);
						this.parent().update("add_remove_category", {action_id: checkbox.closest("tr").data("id"), action_kind: checkbox.is(":checked") ? 1 : 0});
					}
				}',
			)),
		));
	}


	public function action_add_remove_category(AVO_Data_Grid_Action_Result $action_state)
	{
		$id = (int) $this->parameters->action_id->value();
		$kind = (int) $this->parameters->action_kind->value();
		try {
			if ($id) {
				$article_id = $this->parameters->article_id->value();
				$article = Model_Article::factory()->where('id', '=', $article_id)->find();
				if ($article->loaded()) {
					if ($kind == 1) {
						$article->add('categories', $id);
					} else {
						$article->remove('categories', $id);
					}
				}
			}
			$action_state->message = ($kind == 1) ? __('category assigned') : __('category removed');
			$action_state->status = 2;
		} catch (Exception $e) {
			$action_state->message = __('exception occured: '.$e);
			$action_state->status = 1;
		}
		$action_state->processed = true;
		$action_state->get_data = false;
	}

}
