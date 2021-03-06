<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Categories_Form extends AVO_Data_Form {

	const URL_TITLE_LENGTH = 128;

	public function __construct() {
		parent::__construct();

		$this->title_class = 'ico32 ico32-picture_dawn';
		$this->title = array('Add new category', 'Edit category');
		$this->close_button_title = __('Back');
		$this->clear_cache = true;

		$this->controls = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'id',
				'type'			=> AVO_Field::TYPE_INT,
				'key'			=> true,
				'hidden'		=> true,
			)),
			new AVO_Field(array(
				'name'			=> 'heading',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Заголовок'),
				'width'			=> 400,
				'max_length'	=> 256,
				'validator'		=> new AVO_Validator_Not_Null,
			)),
			new AVO_Field(array(
				'name'			=> 'text',
				'type'			=> AVO_Field::TYPE_TEXT,
				'title'			=> __('Текст'),
				'width'			=> 400,
				'validator'		=> new AVO_Validator_Not_Null,
			)),

			new Backend_Field_SEO_URL(array(
				'title' => new AVO_Label(array(
					'value'	=> __('URL title'),
					'hint'	=> __("Used as a part of the url to identify the object. Limited to :max_length characters.\nLeave it empty and it will be autogenerated.", array(':max_length' => self::URL_TITLE_LENGTH)),
				))
			)),
			new AVO_Layout_Control(array(
					'colspan',	'2',
					'layout',	'new AVO.Grid_Layout({columns: 1})'
			)),
			
			new Backend_Image_Upload_Field_Set(array(
					'title'					=> 'Фото',
					'note'					=> 'Загрузите фото категории',
					'model'					=> 'Model_Category',
					'upload_variable_name'	=> '_fu_photo',
			)),
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
			layout: new AVO.Grid_Layout({columns: 2})
		}';
	}


	public function on_validate(AVO_Data_Form_Action_Result $result)
	{
		$url_title = $this->controls->url_title->value();
		if (empty($url_title)) {
			// find an url title by checking if it is already occupied and appending the incrementing counter
			$i = 0;
			$url_title = $this->_get_clean_url_title();
			while (true) {
				$url_title_occupied = DB::query(Database::SELECT, 'SELECT COUNT(*) FROM categories WHERE (:id IS NULL OR id <> :id) AND url_title = :url_title')
					->param(':url_title', $url_title)
					->param(':id', $this->controls->id->value())
					->execute()
					->get(0);
				if (!$url_title_occupied) break;
				$url_title = $this->_get_clean_url_title(self::URL_TITLE_LENGTH - strlen(strval(++$i)));
				$url_title .= $i;
			}
			$this->controls->url_title->value($url_title);
		}
		return parent::on_validate($result);
	}


	protected function _get_clean_url_title($limit = self::URL_TITLE_LENGTH) {
		return URL::title(Text::limit_chars(Text::compress_spaces($this->controls->title->value()), $limit));
	}


	/**
	 * Autofills the SEO fields
	 *
	 * @param AVO_Data_Form_Action_Result $result
	 */
	public function action_seofill(AVO_Data_Form_Action_Result $result) {
		$clean_heading = Text::compress_spaces($this->controls->title->value());
		$seo_title = Text::limit_chars($clean_heading, 150, NULL, TRUE);
		$this->controls->seo_title->value($seo_title);

		if (empty($this->controls->seo_keywords->value)) {
			$seo_keywords = Model_Variable::value_by_name('global_keywords');
			$this->controls->seo_keywords->value($seo_keywords);
		}

		$seo_description = Text::limit_chars(Text::compress_spaces(strip_tags($this->controls->quote->value())), 150, '…', TRUE);
		$this->controls->seo_description->value($seo_description);

		$result->status = 0;
		$result->update_data = true;
		$result->get_data = true;
		$result->fields2update = array(
			'seo_title',
			'seo_keywords',
			'seo_description',
		);
		$result->processed = true;
	}
}
