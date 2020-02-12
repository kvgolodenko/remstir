<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Cases_Applications_Grid extends AVO_Data_Grid
{

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = TRUE;
		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM work_applications',
			'select_query'		=> 'SELECT * FROM work_applications ORDER BY ord',
			'find_query'		=> 'SELECT * FROM work_applications WHERE id = :id',
			'delete_query'		=> 'DELETE FROM work_applications WHERE id = :id',

			'update_query'		=>
				'UPDATE work_applications
					SET
						name =:name,
						email = :email,
						phone = :phone,
						title = :title,
						text = :text
					WHERE id = :id',

			'insert_query'	=>
				'INSERT INTO work_applications (
					ord, 
					name,
					email, 
					phone,
					title,
					text
				)
				VALUES (
				(SELECT * FROM (SELECT IFNULL(MAX(ord), 0) + 1 FROM work_applications) assets_ord) 
				:name,	
				:email,
				:phone,
				:title,
				:text
				)',
				

			'move_parameters'	=> array(
				'table'			=> 'work_applications',
				'where'			=> 'id = :id',
				'order_by'		=> 'ord'
			),

			'model_class_name'	=> 'Model_Startpage_Application',
		));

		$edit_form = new Backend_Startpage_Applications_Form();
		$edit_form->datasource = $this->datasource;
		$this->forms = array(
			'edit_form'	=> $edit_form
		);

		$this->height = 340;
		$this->width = 1280;

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
				'name'			=> 'uid',
				'type'			=> AVO_Field::TYPE_STRING,
				'key'			=> true,
				'hidden'		=> true,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'name',
				'type'			=> AVO_Field::TYPE_STRING,
				'width'			=> 230,
				'title'			=> __('Name'),
				'sortable'		=> FALSE,
				'function'		=> function ($val) {
					return Text::limit_chars(strip_tags($val));
				},
			)),
			new AVO_Field(array(
				'name'			=> 'phone',
				'type'			=> AVO_Field::TYPE_STRING,
				'width'			=> 230,
				'title'			=> __('Phone'),
				'sortable'		=> FALSE,
				'function'		=> function ($val) {
					return Text::limit_chars(strip_tags($val));
				},
			)),
			new AVO_Field(array(
				'name'			=> 'preview_link',
				'type'			=> AVO_Field::TYPE_STRING,
				'encoded'		=> TRUE,
				'width'			=> 412,
				'hidden' 		=>TRUE,
				'title'			=> __('Preview link'),
				'calculated'	=> TRUE,
			)),
		));
		$this->parameters = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'article_id',
				'type'			=> AVO_Field::TYPE_INT,
			)),
		));
	}
	public function on_calc()
	{
		$app = Model_Startpage_Application::factory();

		$this->fields->preview_link->value(
				HTML::anchor(	'/assets/applications/'.$this->fields->uid->value().'pdf','Go to application', array('target' => '_blank','class' => 'btn btn-mini btn-success')));
	}
}
