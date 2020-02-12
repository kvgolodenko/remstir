<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Settings_Counties_Grid extends AVO_Data_Grid {

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = TRUE;

		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM counties',

			'select_query'		=> 'SELECT * FROM counties',

			'find_query'		=> 'SELECT * FROM counties WHERE id = :id',

			'delete_query'		=> 'DELETE FROM counties WHERE id = :id',

			'update_query'		=>
				'UPDATE counties
				SET
					name = :name
				WHERE id = :id',

			'insert_query'	=>
				'INSERT INTO name (name)
				VALUES (:name)',

			'model_class_name'	=> 'Model_County',
		));

		$edit_form = new Backend_Settings_Counties_Form();
		$edit_form->datasource = $this->datasource;
		$this->forms = array(
			'edit_form'	=> $edit_form
		);

		$this->fields = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'no',
				'type'			=> AVO_Field::TYPE_INT,
				'width'			=> 40,
				'title'			=> __('#'),
				'calculated'	=> TRUE,
				'function'		=> 'ds_abspos',
			)),
			new AVO_Field(array(
				'name'			=> 'id',
				'type'			=> AVO_Field::TYPE_INT,
				'key'			=> TRUE,
				'width'			=> 40,
				'title'			=> __('id'),
			)),
			new AVO_Field(array(
				'name'			=> 'name',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('name'),
			)),
		));
	}

}
