<?php defined('SYSPATH') OR die('No direct script access.');
																												// Info edit panel
class Backend_Contacts_Page_Form extends AVO_Data_Form {		

	public function __construct()
	{
		parent::__construct();

		$this->send_data_back_on_save = TRUE;
		$this->title_class = 'ico32 ico32-tools';
		$this->title = __('Page');
		$this->clear_cache = true;
		$this->datasource = Model_Variable::get_datasource(
				'contact_page_text'
				);

		$this->controls = new AVO_Controls_List(array(
				new AVO_Layout_Control(array(
				'align',	'right',
				'layout',	'new AVO.Horizontal_Layout({padding:4})'
			)),
				new AVO_Field(array(
					'name'			=> 'id',
					'type'			=> AVO_Field::TYPE_INT,
					'key'			=> true,
					'value'			=>1,
					'hidden'		=> true,
				)),
				new AVO_Field(array(
					'name'			=> 'contact_page_text',
					'type'				=> AVO_Field::TYPE_TEXT,
					'title'				=> 'Текст контактов',
					'width'			=> 400,
					'validator'		=> new AVO_Validator_Not_Null,
				)),
			AVO_Layout_Control::end_layout(),
	
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
