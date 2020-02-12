<?php defined('SYSPATH') or die('No direct access allowed.');

class Backend_Categories_Grid extends AVO_Data_Grid {

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = true;

		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM categories',
			'select_query'		=> 'SELECT * FROM categories ORDER BY ord',
			'find_query'		=> 'SELECT * FROM categories WHERE id = :id',
			'delete_query'		=> 'DELETE FROM categories WHERE id = :id',

			'update_query'		=>
				'UPDATE categories
					SET
						heading					= :heading,
						text					= :text,
						url_title				= :url_title
					WHERE id = :id',

			'insert_query'	=>
					'INSERT INTO categories (
						ord,
						heading,
						text,
						url_title
					)
					VALUES (
						(SELECT * FROM (SELECT IFNULL(MIN(ord) - 1, 0) FROM categories) assets_ord),
						:heading,
						:text,
						:url_title
					)',

			'move_parameters'	=> array(
				'table'			=> 'categories',
				'order_by'		=> 'ord'
			),

			'custom_errors' => array(
				'/Duplicate entry \'.+?\' for key \'url_title\'/' => array('url_title', __('duplicate value')),
			),

			'model_class_name'	=> 'Model_Category',
		));

		$edit_form = new Backend_Categories_Form();
		$edit_form->datasource = $this->datasource;
		$this->forms = array(
			'edit_form'	=> $edit_form
		);

		$this->height = 340;

		$this->fields = new AVO_Controls_List(array(
			AVO_Field::std_drag_field(),
			new AVO_Field(array(
				'name'			=> 'no',
				'type'			=> AVO_Field::TYPE_INT,
				'width'			=> 40,
				'title'			=> __('#'),
				'calculated'	=> true,
				'function'		=> 'ds_abspos',
				'sortable'		=> false,
			)),
			new AVO_Field(array(
				'name'			=> 'id',
				'type'			=> AVO_Field::TYPE_INT,
				'key'			=> true,
				'hidden'		=> true,
				'sortable'		=> false,
			)),
			new AVO_Field(array(
					'name'			=> 'image',
					'type'			=> AVO_Field::TYPE_STRING,
					'encoded'		=> TRUE,
					'width'			=> Model_Category::GRID_PREVIEW_W,
					'height'		=> Model_Category::GRID_PREVIEW_H,
					'title'			=> __('Photo'),
					'calculated'	=> TRUE,
			)),
			new AVO_Field(array(
				'name'			=> 'heading',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> 'Заголовок',
				'sortable'		=> false,
			)),
			new AVO_Field(array(
				'name'			=> 'text',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> 'Текст',
				'sortable'		=> false,
			)),
			new AVO_Field(array(
				'name'			=> 'url_title',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> 'URL title',
				'sortable'		=> false,
			)),
		));
	}
	public function on_calc()
	{
		$image = $this->fields->model(); /* @var $image Model_Trainer */
		$this->fields->image->value($image->grid_preview_link());
	}
}
