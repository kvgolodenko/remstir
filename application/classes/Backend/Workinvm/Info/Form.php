<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Workinvm_Info_Form extends AVO_Data_Form {

	public function __construct()
	{
		parent::__construct();

		$this->send_data_back_on_save = TRUE;
		$this->title_class = 'ico32 ico32-tools';
		$this->title = __('Content');
		$this->datasource = Model_Variable::get_datasource(
				'job_heading',
				'job_subtitle',
				'job_tsr_header'
				
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
					'name'			=> 'job_heading',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> 'job Header',
					'width'			=> 400,
					'validator'		=> new AVO_Validator_Not_Null,
				)),
				new AVO_Field(array(
					'name'			=> 'job_subtitle',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> 'job subtitle',
					'width'			=> 400,
					'validator'		=> new AVO_Validator_Not_Null,
				)),
				new AVO_Field(array(
					'name'			=> 'job_tsr_header',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> 'Teasers header',
					'width'			=> 400,
					'validator'		=> new AVO_Validator_Not_Null,
				)),
				AVO_Layout_Control::end_layout(),
			new AVO_Layout_Control(array(
					'colspan',	'2',
					'layout',	'new AVO.Grid_Layout({columns: 1})'
			)),
				new Backend_Image_Upload_Field_Set(array(
						'title'					=> 'Top job image',
						'note'					=> __('Please upload the image for slideshow.'),
						'model'					=> 'Model_Job_Startpage_Image',
						'upload_variable_name'	=> '_fu_jobimage',
				)),
			AVO_Layout_Control::end_layout(),
			AVO_Layout_Control::end_layout(), // end content
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
		