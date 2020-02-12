<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Users_Email_Form extends AVO_Data_Form
{

	const URL_TITLE_LENGTH = 128;

	public function __construct()
	{
		parent::__construct();

		$this->send_data_back_on_save = TRUE;
		$this->title_class = 'ico32 ico32-picture_dawn';
		$this->title = array('Адрес для рассылки и шаблон', 'Edit trainer');
		$this->width = 745;
		$this->datasource = Model_Variable::get_datasource(
				'subscribe_email',
				'email_template',
				'subject',
				'from_email'
		);
		$this->clear_cache = true;

		$this->controls = new AVO_Controls_List(array(
				new AVO_Field(array(
					'name'			=> 'id',
					'type'			=> AVO_Field::TYPE_INT,
					'key'			=> true,
					'value'			=> 1,
					'hidden'		=> true,
				)),
				new AVO_Field(array(
					'name'			=> 'subscribe_email',
					'type'			=> AVO_Field::TYPE_STRING,
					'title'			=> __('Адрес для рассылки подписки'),
					'width'			=> 400,
					'max_length'	=> 100,
				)),
				new AVO_Field(array(
					'name'			=> 'from_email',
					'type'			=> AVO_Field::TYPE_STRING,
					'title'			=> __('Адрес отправителя рассылки'),
					'width'			=> 400,
					'max_length'	=> 100,
				)),
				new AVO_Field(array(
					'name'			=> 'subject',
					'type'			=> AVO_Field::TYPE_STRING,
					'title'			=> __('Тема письма'),
					'width'			=> 400,
					'max_length'	=> 100,
				)),
				new AVO_Field(array(
					'name'			=> 'email_template',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> __('Шаблон письма'),
					'width'			=> 400,
					'max_length'	=> 100,
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
