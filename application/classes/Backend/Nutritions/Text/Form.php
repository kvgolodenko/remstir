<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Nutritions_Text_Form extends AVO_Data_Form
{

	const URL_TITLE_LENGTH = 128;

	public function __construct()
	{
		parent::__construct();

		
		$this->send_data_back_on_save = TRUE;
		$this->title_class = 'ico32 ico32-tools';
		$this->title = __('Content');
		$this->width = 745;
		$this->datasource = Model_Variable::get_datasource(
				'nutrition_text'
		);
		$this->clear_cache = true;

		$this->controls = new AVO_Controls_List(array(
			new AVO_Layout_Control(array(
					'page',	__('Content'),
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
					'name'			=> 'nutrition_text',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> __('Описание'),
					'width'			=> 400,
					'html_editor'	=> true,
				)),
				
				AVO_Layout_Control::end_layout(),
			new AVO_Layout_Control(array(
				'align',	'right',
				'layout',	'new AVO.Horizontal_Layout({padding:4})'
			)),
				AVO_Button::standard(AVO_Button::STD_SAVE),
				AVO_Button::standard(AVO_Button::STD_CANCEL),
			AVO_Layout_Control::end_layout()
		));

		$this->class_extension = '{
			layout: new AVO.Grid_Layout({columns: 2})
		}';
	}
}
