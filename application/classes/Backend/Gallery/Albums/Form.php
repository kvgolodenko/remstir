<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Gallery_Albums_Form extends AVO_Data_Form {

	const URL_TITLE_LENGTH = 128;

	public function __construct()
	{
		parent::__construct();

		$this->save_action = 'save_draft';
		$this->title_class = 'ico32 ico32-picture_dawn';
		$this->title = array('Add new album', 'Edit album');
		$this->close_button_title = __('Back');
		$this->clear_cache = true;
		$this->width = 745;

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
						'hidden'		=> true,
					)),
					new AVO_Field(array(
						'name'			=> 'header',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> __('Название альбома'),
						'width'			=> 400,
						'max_length'	=> 256,
						'validator'		=> new AVO_Validator_Not_Null,
					)),
					new AVO_Field(array(
						'name'			=> 'subtitle',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> __('Подзаголовок(необязательно)'),
						'width'			=> 400,
						'max_length'	=> 256,
					)),
					new AVO_Field(array(
						'name'			=> 'url_title',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> __('Ссылка'),
						'width'			=> 400,
						'max_length'	=> 256,
					)),
				new AVO_Layout_Control(array(
						'colspan',	'2',
						'layout',	'new AVO.Grid_Layout({columns: 1})'
				)),

				new AVO_Layout_Control(array(
					'colspan',	'2',
					'layout',	'new AVO.Grid_Layout({columns: 1})'
				)),
					new Backend_Image_Upload_Field_Set(array(
						'title'					=> __('Обложка'),
						'note'					=> __('This image will be used in fotorama on start page.'),
						'model'					=> 'Model_Gallery_Album',
						'upload_variable_name'	=> '_fu_startpageimage',
						'field_name'			=> 'startpage_image',
					)),
				AVO_Layout_Control::end_layout(),
				new AVO_Layout_Control(array(
					'colspan',	'2',
					'layout',	'new AVO.Grid_Layout({columns: 1})'
				)),
				AVO_Layout_Control::end_layout(), // end content
				new AVO_Layout_Control(array(
						'page',	__('Images'),
						'valign', 'top',
						'layout', 'new AVO.Grid_Layout({})',
				)),
				new AVO_Link(array(
						'name'		=> 'link_images',
						'child'		=> new Backend_Gallery_Images_Grid(),
						'params'	=> array('id' => 'album_id'),
				)),
				AVO_Layout_Control::end_layout(),
				AVO_Layout_Control::end_layout(),
			));

			$this->controls->append(
				// new manager for categories and tags implemented with grid

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


	protected function _get_clean_url_title($limit = self::URL_TITLE_LENGTH)
	{
		return URL::title(Text::limit_chars(Text::compress_spaces($this->controls->text->value()), $limit));
	}

}
	