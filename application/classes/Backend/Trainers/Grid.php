<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Trainers_Grid extends AVO_Data_Grid {

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = true;

		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM trainers',
			'select_query'		=> 'SELECT * FROM trainers ORDER BY ord',
			'find_query'		=> 'SELECT * FROM trainers WHERE id = :id',
			'delete_query'		=> 'DELETE FROM trainers WHERE id = :id',

			'update_query'		=>
				'UPDATE trainers
					SET
						name = :name,
						position = :position,
						phone = :phone,
						description =:description
					WHERE id = :id',

			'insert_query'	=>
				'INSERT INTO trainers (
					ord, name, position, phone, description
				)
				VALUES (
					(SELECT * FROM (SELECT IFNULL(MIN(ord) - 1, 0) FROM trainers) assets_ord), :name, :position, :phone, :description
				)',

			'custom_errors' => array(
				'/Duplicate entry \'.+?\' for key \'is_press_2\'/' => array('url_title', __('duplicate value')),
			),
				
			'move_parameters'	=> array(
					'table'			=> 'trainers',
					'where'			=> 'id IS NOT NULL',
					'order_by'		=> 'ord'
			),

			'model_class_name'	=> 'Model_Trainer',
		));

		$edit_form = new Backend_Trainers_Form();
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
				'name'			=> 'image',
				'type'			=> AVO_Field::TYPE_STRING,
				'encoded'		=> TRUE,
				'width'			=> Model_Trainer::GRID_PREVIEW_W,
				'height'		=> Model_Trainer::GRID_PREVIEW_H,
				'title'			=> __('Photo'),
				'calculated'	=> TRUE,
			)),
			new AVO_Field(array(
				'name'			=> 'name',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Name'),
				'width'			=> 412,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'position',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Position'),
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
			new AVO_Field(array(
				'name'			=> 'description',
				'type'			=> AVO_Field::TYPE_TEXT,
				'title'			=> __('Описание'),
				'width'			=> 412,
				'sortable'		=> FALSE,
				'encoded'	=>TRUE,
			)),
			
		));
	}

	public function on_calc()
	{
		$image = $this->fields->model(); /* @var $image Model_Trainer */
		$this->fields->image->value($image->grid_preview_link());
	}

}
































