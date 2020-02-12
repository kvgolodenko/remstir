<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Startpage_Keywords_Form extends AVO_Data_Form {

	const URL_TITLE_LENGTH = 128;

public function __construct()
	{
		parent::__construct();

		$this->send_data_back_on_save = TRUE;
		$this->title_class = 'ico32 ico32-tools';
		$this->title = __('Content');
		$this->datasource = Model_Variable::get_datasource(
				'global_keywords',
				'global_description'
		);
		$this->clear_cache = true;

	$this->controls = new AVO_Controls_List(array(
			new AVO_Layout_Control(array(
					'page',	__('Keywords'),
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
					'name'			=> 'global_keywords',
					'type'			=> AVO_Field::TYPE_TEXT,
					'width'			=> 566,
				)),
				new AVO_Label(),
				new AVO_Field(array(
					'name'			=> 'global_description',
					'type'			=> AVO_Field::TYPE_TEXT,
					'width'			=> 566,
				)),
			
			AVO_Layout_Control::end_layout(), // end content
			));
			$this->controls->append(
				new AVO_Layout_Control(array(
					'align',	'right',
					'layout',	'new AVO.Horizontal_Layout({padding:4})'
				)),
					AVO_Button::standard(AVO_Button::STD_SAVE),
					new AVO_Layout_Control(array(
						'style', 'padding-left:30px',
					)),
					new AVO_Layout_Control(array(
						'style', 'padding-left:30px',
					)),
					AVO_Button::standard(AVO_Button::STD_CANCEL),
				AVO_Layout_Control::end_layout()
				);
		$this->class_extension = '{
			layout: new AVO.Grid_Layout({columns: 1})
		}';
	}

}
	