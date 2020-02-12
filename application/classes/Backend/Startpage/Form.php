<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Startpage_Form extends AVO_Data_Form {

	const URL_TITLE_LENGTH = 128;

public function __construct()
	{
		parent::__construct();

		$this->send_data_back_on_save = TRUE;
		$this->title_class = 'ico32 ico32-tools';
		$this->title = __('Content');
		$this->datasource = Model_Variable::get_datasource(
				'startpage_img_header'
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
					'name'			=> 'startpage_img_header',
					'type'			=> AVO_Field::TYPE_STRING,
					'hidden'		=> true,
				)),
				AVO_Layout_Control::end_layout(),
				new Backend_Image_Upload_Field_Set(array(
						'title'					=> 'App form background image',
						'note'					=> __('Please upload the image for slideshow.'),
						'model'					=> 'Model_Startpage_Image',
						'upload_variable_name'	=> '_fu_startpageimage',
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
	