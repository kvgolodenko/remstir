<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Startpage_Text_Form extends AVO_Data_Form {

	const URL_TITLE_LENGTH = 128;

public function __construct()
	{
		parent::__construct();

		$this->send_data_back_on_save = TRUE;
		$this->title_class = 'ico32 ico32-tools';
		$this->title = __('Items');
		$this->close_button_title = __('Back');
		$this->clear_cache = true;
		$this->width = 745;
		$this->datasource = Model_Variable::get_datasource(
				'startpage_header',
				'startpage_text',
				'startpage_service_header',
				'startpage_service_text',
				'footer_text',
				'banner_red_text',
				'banner_text',
				'banner_link'
				);

	$this->controls = new AVO_Controls_List(array(
			new AVO_Layout_Control(array(
					'page',	__('Items'),
					'valign', 'top',
					'layout', 'new AVO.Grid_Layout({})',
			)),
				new AVO_Field(array(
					'name'			=> 'id',
					'type'			=> AVO_Field::TYPE_INT,
					'key'			=> true,
					'value' 		=>1,
					'hidden'		=> true,
				)),
				new AVO_Field(array(
					'name'			=> 'startpage_header',
					'type'			=> AVO_Field::TYPE_STRING,
					'title'			=> __('Top header'),
					'width'			=> 400,
					'max_length'	=> 256,
				)),
				new AVO_Field(array(
					'name'			=> 'startpage_text',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> __('Top text'),
					'width'			=> 400,
				)),
				new AVO_Field(array(
					'name'			=> 'startpage_service_header',
					'type'			=> AVO_Field::TYPE_STRING,
					'title'			=> __('Service header'),
					'width'			=> 400,
					'max_length'	=> 256,
				)),
				new AVO_Field(array(
					'name'			=> 'startpage_service_text',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> __('Service text'),
					'width'			=> 400,
				)),
				new AVO_Field(array(
					'name'			=> 'footer_text',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> __('Footer text'),
					'width'			=> 400,
				)),
				new AVO_Field(array(
					'name'			=> 'banner_red_text',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> __('Banner red text'),
					'width'			=> 400,
				)),
				new AVO_Field(array(
					'name'			=> 'banner_text',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> __('Banner text'),
					'width'			=> 400,
				)),
				new AVO_Field(array(
					'name'			=> 'banner_link',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> __('Banner URL'),
					'width'			=> 400,
				)),
			AVO_Layout_Control::end_layout(),
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