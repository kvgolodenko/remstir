<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Contacts_Grid extends AVO_Data_Grid {

public function __construct()
	{
		parent::__construct();

		$this->clear_cache = true;
		
		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM contacts',
			'select_query'		=> 'SELECT * FROM contacts ORDER BY ord',
			'find_query'		=> 'SELECT * FROM contacts WHERE id = :id',
			'delete_query'		=> 'DELETE FROM contacts WHERE id = :id',

			'update_query'		=>
				'UPDATE contacts
					SET
						contact_heading = :contact_heading,
						contact_text = :contact_text
				WHERE id = :id',
				
			'insert_query'	=>
					'INSERT INTO contacts (ord, contact_heading, contact_text)
					VALUES ((SELECT * FROM (SELECT IFNULL(MIN(ord) - 1, 0) FROM contacts) assets_ord), :contact_heading, :contact_text)',
				
			'move_parameters'	=> array(
					'table'			=> 'contacts',
					'order_by'		=> 'ord'
			),

			'custom_errors' => array(
				'/Duplicate entry \'.+?\' for key \'is_press_2\'/' => array('url_title', __('duplicate value')),
			),
				

			'model_class_name'	=> 'Model_Contact',
		));

		$edit_form = new Backend_Contacts_Form();
		$edit_form->datasource = $this->datasource;
		$this->forms = array(
			'edit_form'	=> $edit_form
		);

		$this->height = 340;
		$this->width = 745;

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
				'name'			=> 'contact_heading',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Contact heading'),
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'contact_text',
				'type'			=> AVO_Field::TYPE_TEXT,
				'title'			=> __('Contact text'),
				'sortable'		=> FALSE,
				'function'		=> function ($val) {
					return Text::limit_chars(strip_tags($val));
				},
			)),
		));
	}
}
	
















