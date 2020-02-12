<?php defined('SYSPATH') OR die('No direct script access.');
																												// Info edit panel
class Backend_Contacts_Form extends AVO_Data_Form {		

	public function __construct()
	{
		parent::__construct();

		$this->send_data_back_on_save = TRUE;
		$this->title_class = 'ico32 ico32-tools';
		$this->title = __('Contacts');
		$this->clear_cache = true;
		$this->datasource = Model_Variable::get_datasource(
				'contact_address',
				'contact_phone',
				'contact_email'
		);
		$this->clear_cache = true;
		
		$this->controls = new AVO_Controls_List(array(
				new AVO_Layout_Control(array(
						'page',	__('URL'),
						'valign', 'top',
						'layout', 'new AVO.Grid_Layout({})',
				)),
				new AVO_Field(array(
						'name'			=> 'id',
						'type'			=> AVO_Field::TYPE_INT,
						'key'			=> true,
						'value'			=> 1,
						'hidden'		=> true,
				)),
				new AVO_Field(array(
						'name'			=> 'contact_address',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> 'Адрес',
						'width'			=> 400,
						'validator'		=> new AVO_Validator_Not_Null,
				)),
				new AVO_Field(array(
						'name'			=> 'contact_phone',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> 'Телефон',
						'width'			=> 400,
						'validator'		=> new AVO_Validator_Not_Null,
				)),
				new AVO_Field(array(
						'name'			=> 'contact_email',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> 'E-mail',
						'width'			=> 400,
						'validator'		=> new AVO_Validator_Not_Null,
				)),

			new AVO_Layout_Control(array(
				'align',	'right',
				'layout',	'new AVO.Horizontal_Layout({padding:4})'
			)),
				AVO_Button::standard(AVO_Button::STD_SAVE),
				new AVO_Layout_Control(array(
					'style', 'padding-left:30px',
				)),
				AVO_Button::standard(AVO_Button::STD_CANCEL),
			AVO_Layout_Control::end_layout(),
		));

		$this->class_extension = '{
			layout: new AVO.Grid_Layout({columns: 1})
		}';
	}
}
