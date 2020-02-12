<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Prices_Form extends AVO_Data_Form
{

	const URL_TITLE_LENGTH = 128;

	public function __construct()
	{
		parent::__construct();

		$this->save_action = 'save_draft';
		$this->title_class = 'ico32 ico32-picture_dawn';
		$this->title = array('Add new', 'Edit');
		$this->close_button_title = __('Back');
		$this->clear_cache = true;
		$this->width = 745;

		$this->controls = new AVO_Controls_List(array(
				new AVO_Field(array(
					'name'			=> 'id',
					'type'			=> AVO_Field::TYPE_INT,
					'key'			=> true,
					'hidden'		=> true,
				)),
				new AVO_Field(array(
					'name'			=> 'category',
					'type'			=> AVO_Field::TYPE_STRING,
					'title'			=> __('Вид спорта'),
					'width'			=> 400,
					'sortable'		=> FALSE,
				)),
				new AVO_Field(array(
					'name'			=> 'count',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> __('Количество занятий'),
					'width'			=> 400,
					'max_length'	=> 1000,
					'validator'		=> new AVO_Validator_Not_Null,
					'html_editor'	=> true
				)),
				new AVO_Field(array(
					'name'			=> 'price',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> __('Цена'),
					'width'			=> 400,
					'max_length'	=> 1000,
					'validator'		=> new AVO_Validator_Not_Null,
						'html_editor'	=> true
				)),
				new AVO_Layout_Control(array(
					'colspan',	'2',
					'layout',	'new AVO.Grid_Layout({columns: 1})'
				)),
				
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
