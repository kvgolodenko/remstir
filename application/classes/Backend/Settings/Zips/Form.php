<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Settings_Zips_Form extends AVO_Data_Form {


	public function __construct()
	{
		parent::__construct();

		$this->title_class = 'ico32 ico32-types';
		$this->title = array(__('add new zip code'), __('modify zip code'));
		$this->close_button_title = __('back');

		$this->controls = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'id',
				'type'			=> AVO_Field::TYPE_INT,
				'key'			=> TRUE,
				'hidden'		=> TRUE,
			)),
			new AVO_Field(array(
				'name'			=> 'zip',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('zip code'),
				'width'			=> 100,
				'default_focus'	=> TRUE,
				'max_length'	=> 4,
				'validator'		=> new AVO_Validator_Not_Null,
			)),
			new AVO_Field(array(
				'name'				=> 'county_id',
				'type'				=> AVO_Field::TYPE_LOOKUP,
				'title'				=> __('county'),
				'width'				=> 200,
				'lookup_offer_null'	=> FALSE,
				'lookup_datasource'	=> new AVO_Data_Source_DB(array(
					'select_query'		=> 'SELECT * FROM counties ORDER BY name',
					'find_query'		=> 'SELECT * FROM counties WHERE id = :id',
				)),
				'validator'		=> new AVO_Validator_Not_Null,
			)),
			new AVO_Layout_Control(array(
				'colspan',	'2',
				'align',	'right',
				'layout',	'new AVO.Horizontal_Layout({"padding":4})'
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
