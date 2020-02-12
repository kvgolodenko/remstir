<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Tabels_Grid extends AVO_Data_Grid {

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = true;

		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM tabels',
			'select_query'		=> 'SELECT * FROM tabels ORDER BY ord',
			'find_query'		=> 'SELECT * FROM tabels WHERE id = :id',
			'delete_query'		=> 'DELETE FROM tabels WHERE id = :id',

			'update_query'		=>
				'UPDATE tabels
					SET
						category = :category,
						monday = :monday,
						tuesday = :tuesday,
						wednesday = :wednesday,
						thirthday = :thirthday,
						friday = :friday,
						saturday = :saturday,
						sunday = :sunday
				
					WHERE id = :id',

		'insert_query'	=>
				'INSERT INTO tabels (
					ord, category, monday, tuesday, wednesday, thirthday, friday, saturday, sunday
				)
				VALUES (
					(SELECT * FROM (SELECT IFNULL(MIN(ord) - 1, 0) FROM tabels) assets_ord), :category, :monday, :tuesday, :wednesday, :thirthday, :friday, :saturday, :sunday
				)',

			'custom_errors' => array(
				'/Duplicate entry \'.+?\' for key \'is_press_2\'/' => array('url_title', __('duplicate value')),
			),
			'move_parameters'	=> array(
					'table'			=> 'tabels',
					'order_by'		=> 'ord'
			),

			'model_class_name'	=> 'Model_Tabel',
		));

		$edit_form = new Backend_Tabels_Form();
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
				'name'			=> 'monday',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Понедельник'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'tuesday',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Вторник'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'wednesday',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Среда'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'thirthday',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Четверг'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'friday',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Пятница'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'saturday',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Суббота'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'sunday',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Воскресенье'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
		));
	}

}
































