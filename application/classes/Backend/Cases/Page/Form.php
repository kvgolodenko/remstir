<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Cases_Page_Form extends AVO_Data_Form {

	public function __construct()
	{
		parent::__construct();

		$this->send_data_back_on_save = TRUE;
		$this->title_class = 'ico32 ico32-tools';
		$this->title = __('Content');
		$this->datasource = Model_Variable::get_datasource(
				'cases_img_header',
				'cases_img_subtitle',
				'cases_appform_header',
				'cases_appform_subtitle',
				'cases_appform_short_text',
				'cases_teasers_header'
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
					'hidden'		=> true,
					'value'			=> 1,
				)),
				new AVO_Field(array(
					'name'			=> 'cases_img_header',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> 'Page top image header',
					'width'			=> 400,
					'validator'		=> new AVO_Validator_Not_Null,
				)),
				new AVO_Field(array(
					'name'			=> 'cases_img_subtitle',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> 'Page top image subtitle',
					'width'			=> 400,
					'validator'		=> new AVO_Validator_Not_Null,
				)),
				new AVO_Field(array(
					'name'			=> 'cases_teasers_header',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> 'Case teasers subtitle',
					'width'			=> 400,
					'validator'		=> new AVO_Validator_Not_Null,
				)),
			new AVO_Field(array(
					'name'			=> 'cases_appform_header',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> 'App form header',
					'width'			=> 400,
					'validator'		=> new AVO_Validator_Not_Null,
			)),
			new AVO_Field(array(
					'name'			=> 'cases_appform_subtitle',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> 'App form subtitle',
					'width'			=> 400,
					'validator'		=> new AVO_Validator_Not_Null,
			)),
			new AVO_Field(array(
					'name'			=> 'cases_appform_short_text',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> 'App form short subtitle',
					'width'			=> 400,
					'validator'		=> new AVO_Validator_Not_Null,
			)),
				new AVO_Layout_Control(array(
						'colspan',	'2',
						'layout',	'new AVO.Grid_Layout({columns: 1})'
					)),
						new Backend_Image_Upload_Field_Set(array(
							'title'					=> 'Case page top image',
							'note'					=> '',
							'model'					=> 'Model_Case_Image',
							'upload_variable_name'	=> '_fu_casetopimage',
							'field_name'			=> 'portrait_image',
						)),
					AVO_Layout_Control::end_layout(),
					new AVO_Layout_Control(array(
						'colspan',	'2',
						'layout',	'new AVO.Grid_Layout({columns: 1})'
					)),
						new Backend_Image_Upload_Field_Set(array(
							'title'					=> 'Case page app form image',
							'note'					=> '',
							'model'					=> 'Model_Case_Appform_Image',
							'upload_variable_name'	=> '_fu_caseappformimageimage',
							'field_name'			=> 'landscape_image',
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
		