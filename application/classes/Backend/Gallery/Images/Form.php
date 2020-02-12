<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Gallery_Images_Form extends AVO_Data_Form {
	public function __construct() {
		parent::__construct();

		$this->title_class = 'ico32 ico32-picture_dawn';
		$this->title = array(__('Add new image'), __('Edit image'));
		$this->close_button_title = __('back');
		$this->class_extension = '{ framed_box: false }';
		$this->clear_cache = true;

		$this->controls = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'id',
				'type'			=> AVO_Field::TYPE_INT,
				'key'			=> true,
				'hidden'		=> true,
			)),
			new AVO_Layout_Control(array(
				'colspan',	2,
			)),
				new Backend_Image_Upload_Field_Set(array(
					'title'					=> 'Landscape image',
					'note'					=> __('Please upload the image for slideshow.'),
					'model'					=> 'Model_Gallery_Image',
					'upload_variable_name'	=> '_fu_albumpicture',
					'field_name'			=> 'landscape_image',
				)),
			AVO_Layout_Control::end_layout(),
			new AVO_Field(array(
				'name'			=> 'text',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> 'Text',
				'width'			=> 412,
				'max_length'	=> 128,
			)),
			new AVO_Label(),
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
		$this->parameters = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'album_id',
				'type'			=> AVO_Field::TYPE_INT,
			)),
		));
	}
}
