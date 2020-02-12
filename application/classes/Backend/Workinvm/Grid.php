<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Workinvm_Grid extends AVO_Data_Grid {

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = true;
		$this->allow_move = false;

		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM jobs',
			'select_query'		=> 'SELECT * FROM jobs',
			'find_query'		=> 'SELECT * FROM jobs WHERE id = :id',
			'delete_query'		=> 'DELETE FROM jobs WHERE id = :id',

			'update_query'		=>
				'UPDATE jobs
					SET
						title = :title,
						short_text = :short_text,
						url = :url,
						urgency = :urgency	
					WHERE id = :id',

		'insert_query'	=>
				'INSERT INTO jobs (
					ord, title, short_text, url, urgency
				)
				VALUES (
					(SELECT * FROM (SELECT IFNULL(MIN(ord) - 1, 0) FROM jobs) assets_ord), :title, :short_text, :url, :urgency	
				)',

			'custom_errors' => array(
				'/Duplicate entry \'.+?\' for key \'is_press_2\'/' => array('url_title', __('duplicate value')),
			),

			'model_class_name'	=> 'Model_Job',
		));

		$edit_form = new Backend_Workinvm_Form();
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
				'name'			=> 'title',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Job title'),
				'width'			=> 412,
				'sortable'		=> FALSE,
				'function'		=> array('Text', 'limit_chars'),
			)),
			new AVO_Field(array(
				'name'			=> 'urgency',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Urgency'),
				'width'			=> 412,
				'sortable'		=> FALSE,
				'function'		=> array('Text', 'limit_chars'),
			)),
			new AVO_Field(array(
				'name'			=> 'short_text',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Short text'),
				'width'			=> 412,
				'sortable'		=> FALSE,
				'function'		=> array('Text', 'limit_chars'),
			)),
			new AVO_Field(array(
				'name'			=> 'url',
				'type'			=> AVO_Field::TYPE_STRING,
				'encoded'		=> TRUE,
				'width'			=> 412,
				'title'			=> __('URL'),
				'calculated'	=> TRUE,
			)),
		));
	}
}
































