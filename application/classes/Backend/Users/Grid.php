<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Users_Grid extends AVO_Data_Grid {

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = true;
		$this->allow_move = false;

		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM users',
			'select_query'		=> 'SELECT * FROM users ORDER BY id DESC',
			'find_query'		=> 'SELECT * FROM users WHERE id = :id',
			'delete_query'		=> 'DELETE FROM users WHERE id = :id',

			'custom_errors' => array(
				'/Duplicate entry \'.+?\' for key \'is_press_2\'/' => array('url_title', __('duplicate value')),
			),

			'model_class_name'	=> 'Model_User',
		));

		$edit_form = new Backend_Users_Form();
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
				'title'			=> __('Name'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'phone',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Phone'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
		));
	}

}
































