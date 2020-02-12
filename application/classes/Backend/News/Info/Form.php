<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Blog_Info_Form extends AVO_Data_Form {

	public function __construct()
	{
		parent::__construct();

		$this->send_data_back_on_save = TRUE;
		$this->title_class = 'ico32 ico32-tools';
		$this->title = __('Content');
		$this->datasource = Model_Variable::get_datasource(
				'blog_heading',
				'blog_subtitle'
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
					'name'			=> 'blog_heading',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> 'Blog Header',
					'width'			=> 400,
					'validator'		=> new AVO_Validator_Not_Null,
				)),
				new AVO_Field(array(
					'name'			=> 'blog_subtitle',
					'type'			=> AVO_Field::TYPE_TEXT,
					'title'			=> 'Blog subtitle',
					'width'			=> 400,
					'validator'		=> new AVO_Validator_Not_Null,
				)),
				AVO_Layout_Control::end_layout(),
				new Backend_Image_Upload_Field_Set(array(
						'title'					=> 'Top blog image',
						'note'					=> __('Please upload the image for slideshow.'),
						'model'					=> 'Model_Blog_Startpage_Image',
						'upload_variable_name'	=> '_fu_blogimage',
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
}
