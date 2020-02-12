<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Startpage_Items_Form extends AVO_Data_Form {

	const URL_TITLE_LENGTH = 128;

public function __construct()
	{
		parent::__construct();

		$this->save_action = 'save_draft';
		$this->send_data_back_on_save = TRUE;
		$this->title_class = 'ico32 ico32-tools';
		$this->title = __('Items');
		$this->close_button_title = __('Back');
		$this->clear_cache = true;
		$this->width = 745;

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
					'hidden'		=> true,
				)),
				new AVO_Field(array(
					'name'			=> 'header',
					'type'			=> AVO_Field::TYPE_STRING,
					'title'			=> __('Header'),
					'width'			=> 400,
					'max_length'	=> 256,
				)),
				new AVO_Field(array(
					'name'			=> 'subtitle',
					'type'			=> AVO_Field::TYPE_STRING,
					'title'			=> __('Subtitle'),
					'width'			=> 400,
					'max_length'	=> 256,
				)),
				new AVO_Field(array(
					'name'			=> 'text',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> __('Text'),
					'width'			=> 400,
				)),
			new AVO_Field(array(
					'name'			=> 'url_title',
					'type'			=> AVO_Field::TYPE_STRING,
					'title'			=> __('URL title'),
					'width'			=> 400,
					'max_length'	=> 256,
			)),
			AVO_Layout_Control::end_layout(),
			new Backend_Image_Upload_Field_Set(array(
					'title'					=> 'Item image',
					'note'					=> __('Please upload the image for slideshow.'),
					'model'					=> 'Model_Startpage_Item_Image',
					'upload_variable_name'	=> '_fu_startpageimage',
					'is_upload_mandatory' 	=> false,
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
	