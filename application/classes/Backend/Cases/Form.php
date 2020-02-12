<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Cases_Form extends AVO_Data_Form
{

	const URL_TITLE_LENGTH = 128;

	public function __construct()
	{
		parent::__construct();

		$this->save_action = 'save_draft';
		$this->title_class = 'ico32 ico32-picture_dawn';
		$this->title = array('Add new case', 'Edit case');
		$this->close_button_title = __('Back');
		$this->clear_cache = true;
		$this->width = 745;

		$this->controls = new AVO_Controls_List(array(
			new AVO_Layout_Control(array(
				'layout',	'new AVO.Tabbed_Layout()',
			)),
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
						'name'				=> 'is_draft',
						'type'				=> AVO_Field::TYPE_BOOL,
						'hidden'		=> true,
					)),
					new AVO_Field(array(
						'name'			=> 'heading',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> __('Heading'),
						'width'			=> 400,
						'max_length'	=> 256,
						'validator'		=> new AVO_Validator_Not_Null,
					)),
					new AVO_Field(array(
						'name'			=> 'preview_text',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> __('Preview text'),
						'width'			=> 400,
						'max_length'	=> 256,
						'validator'		=> new AVO_Validator_Not_Null,
					)),
					new AVO_Field(array(
						'name'			=> 'category',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> __('Category'),
						'width'			=> 400,
						'max_length'	=> 256,
						'validator'		=> new AVO_Validator_Not_Null,
					)),
					new AVO_Field(array(
						'name'			=> 'body_text',
						'type'			=> AVO_Field::TYPE_TEXT,
						'title'			=> 'Body text',
						'width'			=> 412,
						'height'		=> 412,
						'html_editor'	=> true,
						'validator'		=> new AVO_Validator_Not_Null,
						'class_extension'	=> '{
							"tinymce_options": {
								"plugins": "advlist autolink lists link preview code table contextmenu paste textcolor image",
								plugin_preview_width : 412,
								relative_urls:false,
								"content_css": AVO.settings.base_path + "css/public/editor_styles.css",
								"toolbar": "undo redo | bold italic | link unlink | code",
								"valid_elements": ""
									+ "-span,-a,-ul,-strong,-em,-u,"
									+ "a[href|target|title],"
									+ "img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],"
									+ "ul[style],ol[style],li[style],"
									+ "br,"
									+ "strong/b,"
									+ "em/i,"
									+ "h2,"
									+ "span[style|class],"
									+ "div[style|class],"
									+ "p[style|class],"
									+ "u,"
									+ "script[type|src]"
							}
						}',
					)),

					new AVO_Field(array(
						'name'			=> 'created',
						'type'			=> AVO_Field::TYPE_DATE,
						'title'			=> __('Created'),
						'width'			=> 400,
						'function'		=> 'App::date_to_timestamp',
						'max_length'	=> 256,
						'hidden'		=> true
					)),
					new AVO_Field(array(
						'name'			=> 'frontend_date',
						'type'			=> AVO_Field::TYPE_DATETIME,
						'title'			=> __('Publication date'),
						'width'			=> 400,
						'function'		=> 'Text::sqldatetime2str',
						'max_length'	=> 16,
						'value'			=> date('d.m.Y G:i'),
						'validator'		=> new AVO_Validator_Date_Time,
					)),
					new AVO_Field(array(
							'name'			=> 'top_heading',
							'type'			=> AVO_Field::TYPE_STRING,
							'title'			=> __('Top heading'),
							'width'			=> 400,
							'max_length'	=> 256,
							'validator'		=> new AVO_Validator_Not_Null,
					)),
					new AVO_Field(array(
							'name'			=> 'top_preview_text',
							'type'			=> AVO_Field::TYPE_STRING,
							'title'			=> __('Top preview text'),
							'width'			=> 400,
							'max_length'	=> 256,
							'validator'		=> new AVO_Validator_Not_Null,
					)),
					new AVO_Layout_Control(array(
						'colspan',	'2',
						'layout',	'new AVO.Grid_Layout({columns: 1})'
					)),
						new Backend_Image_Upload_Field_Set(array(
							'title'					=> 'Teaser image',
							'note'					=> 'This image will be used when case is teased on start page.',
							'model'					=> 'Model_Case',
							'upload_variable_name'	=> '_fu_articleportraitimage',
							'field_name'			=> 'portrait_image',
						)),
					AVO_Layout_Control::end_layout(),
					new AVO_Layout_Control(array(
						'colspan',	'2',
						'layout',	'new AVO.Grid_Layout({columns: 1})'
					)),
						new Backend_Image_Upload_Field_Set(array(
							'title'					=> 'Top case post image',
							'note'					=> 'This image will be used when you wil open the case',
							'model'					=> 'Model_Case_Landscape_Image',
							'upload_variable_name'	=> '_fu_articlelandscapeimage',
							'field_name'			=> 'landscape_image',
						)),
					AVO_Layout_Control::end_layout(),
				AVO_Layout_Control::end_layout(), // end content
				AVO_Layout_Control::end_layout(),
				new AVO_Layout_Control(array(
						'colspan',	'2',
						'layout',	'new AVO.Grid_Layout({columns: 2})'
				)),
					new Backend_Field_SEO_URL(array(
						'title' => new AVO_Label(array(
							'value'	=> __('URL title'),
							'hint'	=> __("Used as a part of the url to identify the object. Limited to :max_length characters.\nLeave it empty and it will be autogenerated.", array(
									':max_length' => self::URL_TITLE_LENGTH)),
						)),
					)),
					new Backend_Field_SEO_Title(),
					new Backend_Field_SEO_Keywords(),
					new Backend_Field_SEO_Description(),
					new AVO_Button(array(
							'name'				=> 'btn_seofill',
							'icon'				=> 'page_go',
							'action'			=> 'seofill',
							'value'				=> __('auto-fill SEO info'),
					)),
				
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
	
	/**
	 * Autofills the SEO fields
	 *
	 * @param AVO_Data_Form_Action_Result $result
	 */
	public function action_seofill(AVO_Data_Form_Action_Result $result)
	{
		$clean_heading = Text::compress_spaces($this->controls->heading->value());
		$seo_title = Text::limit_chars($clean_heading, 150, null, true);
		$this->controls->seo_title->value($seo_title);
	
		if (empty($this->controls->seo_keywords->value)) {
			$seo_keywords = Model_Variable::value_by_name('global_keywords');
			$this->controls->seo_keywords->value($seo_keywords);
		}
	
		$seo_description = Text::limit_chars(Text::compress_spaces(strip_tags($this->controls->body_text->value())), 150, '…', true);
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
	public function on_validate(AVO_Data_Form_Action_Result $result)
	{
		$url_title = $this->controls->url_title->value();
		if (empty($url_title)) {
			$url_title = $this->_get_clean_url_title();
			$this->controls->url_title->value($url_title);
		}
	
		$url_title_occupied = DB::query(Database::SELECT, 'SELECT COUNT(*) FROM cases WHERE (:id IS NULL OR id <> :id) AND url_title = :url_title')
		->param(':url_title', $this->controls->url_title->value())
		->param(':id', $this->controls->id->value())
		->execute()
		->get(0);
		if ($url_title_occupied) {
			$validation = parent::on_validate($result);
			$validation[] = array('url_title', __('Autogenerated value from heading will not be unique. Please fill out this input manually'), false);
			return $validation;
		}
		return parent::on_validate($result);
	}
}