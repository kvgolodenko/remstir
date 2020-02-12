<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Workinvm_Form extends AVO_Data_Form
{

	const URL_TITLE_LENGTH = 128;

	public function __construct()
	{
		parent::__construct();

		$this->save_action = 'save_draft';

		$this->title_class = 'ico32 ico32-picture_dawn';
		$this->title = array('Add new job', 'Edit job');
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
						'name'			=> 'title',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> __('Job title'),
						'width'			=> 400,
						'max_length'	=> 256,
						'validator'		=> new AVO_Validator_Not_Null,
					)),
					new AVO_Field(array(	
							'name'			=> 'url',
							'type'			=> AVO_Field::TYPE_STRING,
							'title'			=> __('URL'),
							'width'			=> 400,
							'max_length'	=> 256,
							'validator'		=> new AVO_Validator_Not_Null,
					)),
					new AVO_Field(array(
						'name'			=> 'short_text',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> __('Preview text'),
						'width'			=> 400,
						'max_length'	=> 256,
					)),
					new AVO_Field(array(
						'name'			=> 'urgency',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> __('Urgency'),
						'width'			=> 400,
						'max_length'	=> 256,
					)),
				AVO_Layout_Control::end_layout(),
				AVO_Layout_Control::end_layout()
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
		return URL::title(Text::limit_chars(Text::compress_spaces($this->controls->heading->value()), $limit));
	}

}
