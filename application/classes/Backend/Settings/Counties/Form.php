<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Settings_Counties_Form extends AVO_Data_Form {

	public function __construct()
	{
		parent::__construct();

		$this->title_class = 'ico32 ico32-google_maps';
		$this->title = array(__('add new county'), __('modify county'));
		$this->close_button_title = __('back');

		$this->controls = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'id',
				'type'			=> AVO_Field::TYPE_INT,
				'key'			=> TRUE,
				'title'			=> __('id'),
				'width'			=> 32,
			)),
			new AVO_Field(array(
				'name'			=> 'name',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('name'),
				'width'			=> 300,
				'default_focus'	=> TRUE,
				'max_length'	=> 32,
				'validator'		=> new AVO_Validator_Not_Null(),
			)),
			new AVO_Layout_Control(array(
				'colspan',	2,
				'align',	'right',
				'layout',	'new AVO.Horizontal_Layout({padding:4})'
			)),
				AVO_Button::standard(AVO_Button::STD_SAVE),
				new AVO_Layout_Control(array(
					'style', 'padding-left:30px',
				)),
				AVO_Button::standard(AVO_Button::STD_CANCEL),
			AVO_Layout_Control::end_layout()
		));
	}
}
