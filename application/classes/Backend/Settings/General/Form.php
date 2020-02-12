<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Settings_General_Form extends AVO_Data_Form {

	public function __construct()
	{
		parent::__construct();

		$this->send_data_back_on_save = TRUE;
		$this->title_class = 'ico32 ico32-tools';
		$this->title = __('Application general settings');
		$this->datasource = Model_Variable::get_datasource(
			'ga_id',
			'global_keywords',
			'global_description'
		);
		$this->clear_cache = true;

		$this->controls = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'id',
				'type'			=> AVO_Field::TYPE_INT,
				'hidden'		=> TRUE,
				'key'			=> TRUE,
				'fixed_value'	=> 1,
			)),


			new AVO_Field(array(
				'name'			=> 'ga_id',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> new AVO_Label(array(
					'value'	=> __('Google Analytics ID'),
					'hint' 	=> __('leave the field empty if you are not going to use the Google Analytics'),
				)),
				'width'			=> 400,
				'max_length'	=> 128,
			)),

			new Backend_Field_SEO_Keywords(array(
				'name'	=> 'global_keywords'
			)),
			new Backend_Field_SEO_Description(array(
				'name'	=> 'global_description'
			)),

			new AVO_Label(),
			new AVO_Layout_Control(array('align', 'right')),
			AVO_Button::standard(AVO_Button::STD_SAVE),
		));
	}


	/**
	 * save new keywords to the reference table
	 *
	 * @see AVO_Data_Form::after_save()
	 */
	public function after_save(AVO_Data_Form_Action_Result $result)
	{
		Model_Keyword::save_keywords($this->controls->global_keywords->value());
	}

}
