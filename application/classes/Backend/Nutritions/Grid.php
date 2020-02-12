<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Nutritions_Grid extends AVO_Data_Grid {

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = true;
		$this->allow_move = false;

		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM nutritions',
			'select_query'		=> 'SELECT * FROM nutritions ORDER BY ord',
			'find_query'		=> 'SELECT * FROM nutritions WHERE id = :id',
			'delete_query'		=> 'DELETE FROM nutritions WHERE id = :id',

			'update_query'		=>
				'UPDATE nutritions
					SET
						name = :name,
						category = :category,
						price = :price,
						description = :description,
					WHERE id = :id',

		'insert_query'	=>
				'INSERT INTO nutritions (
					ord, name, category, price, description
				)
				VALUES (
					(SELECT * FROM (SELECT IFNULL(MIN(ord) - 1, 0) FROM nutritions) assets_ord), :name, :category, :price, :description
				)',

			'custom_errors' => array(
				'/Duplicate entry \'.+?\' for key \'is_press_2\'/' => array('url_title', __('duplicate value')),
			),

			'model_class_name'	=> 'Model_Nutrition',
		));

		$edit_form = new Backend_Nutritions_Form();
		$edit_form->datasource = $this->datasource;
		$this->forms = array(
			'edit_form'	=> $edit_form
		);

		$this->height = 340;

		$this->fields = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'no',
				'type'			=> AVO_Field::TYPE_INT,
				'width'			=> 40,
				'title'			=> __('#'),
				'calculated'	=> true,
				'function'		=> 'ds_abspos',
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'id',
				'type'			=> AVO_Field::TYPE_INT,
				'key'			=> true,
				'hidden'		=> true,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'name',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Название'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'category',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Категория'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'price',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Цена'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'description',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Описание'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
			
		));
	}


}
































