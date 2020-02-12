<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Prices_Grid extends AVO_Data_Grid {

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = true;

		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM prices',
			'select_query'		=> 'SELECT * FROM prices ORDER BY ord',
			'find_query'		=> 'SELECT * FROM prices WHERE id = :id',
			'delete_query'		=> 'DELETE FROM prices WHERE id = :id',

			'update_query'		=>
				'UPDATE prices
					SET
						category = :category,
				count = :count,
						price 	 = :price
				
					WHERE id = :id',

		'insert_query'	=>
				'INSERT INTO prices (
					ord, category, count, price
				)
				VALUES (
					(SELECT * FROM (SELECT IFNULL(MIN(ord) - 1, 0) FROM prices) assets_ord), :category, :count, :price
				)',

			'custom_errors' => array(
				'/Duplicate entry \'.+?\' for key \'is_press_2\'/' => array('url_title', __('duplicate value')),
			),
            'move_parameters'	=> array(
                'table'			=> 'prices',
                'order_by'		=> 'ord'
            ),

			'model_class_name'	=> 'Model_Price',
		));

		$edit_form = new Backend_Prices_Form();
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
				'name'			=> 'category',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Спорт'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'count',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Кол-во занятий'),
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
		));
	}

}
































