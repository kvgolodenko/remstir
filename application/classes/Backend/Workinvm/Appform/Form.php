<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Workinvm_Appform_Form extends AVO_Data_Form {

	const URL_TITLE_LENGTH = 128;

public function __construct()
	{
		parent::__construct();

		$this->send_data_back_on_save = TRUE;
		$this->title_class = 'ico32 ico32-tools';
		$this->title = __('Content');
		$this->datasource = Model_Variable::get_datasource(
				'job_appform_header',
				'job_appform_subtitle'
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
					'name'			=> 'job_appform_header',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> 'job app form header',
					'width'			=> 400,
					'validator'		=> new AVO_Validator_Not_Null,
				)),
				new AVO_Field(array(
					'name'			=> 'job_appform_subtitle',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> 'job app form subtitle',
					'width'			=> 400,
					'validator'		=> new AVO_Validator_Not_Null,
				)),
				AVO_Layout_Control::end_layout(),
				new Backend_Image_Upload_Field_Set(array(
						'title'					=> 'App form background image',
						'note'					=> __('Please upload the image for slideshow.'),
						'model'					=> 'Model_Job_Appform_Image',
						'upload_variable_name'	=> '_fu_jobappimage',
				)),
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
	




	protected function _get_clean_url_title($limit = self::URL_TITLE_LENGTH)
	{
		return URL::title(Text::limit_chars(Text::compress_spaces($this->controls->text->value()), $limit));
	}

	/**
	 * Autofills the SEO fields
	 *
	 * @param AVO_Data_Form_Action_Result $result
	 */
}
	