<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Articles_Images_Form extends AVO_Data_Form {
	public function __construct() {
		parent::__construct();

		$this->title_class = 'ico32 ico32-picture_dawn';
		$this->title = array(__('add new image'), __('edit image'));
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
					'note'					=> __('Please upload the image. Then use buttons to crop/resize images that will be used.'),
					'model'					=> 'Model_Article_Image',
					'upload_variable_name'	=> '_fu_articleimage',
				)),
			AVO_Layout_Control::end_layout(),
			new AVO_Field(array(
				'name'			=> 'video_url',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Video URL'),
				'width'			=> 400,
				'max_length'	=> 256,
			)),
			new AVO_Field(array(
				'name'			=> 'text',
				'type'			=> AVO_Field::TYPE_TEXT,
				'title'			=> 'text',
				'width'			=> 412,
				'height'		=> 300,
				'html_editor'	=> true,
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
							+ "u",
					}
				}',
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
				'name'			=> 'article_id',
				'type'			=> AVO_Field::TYPE_INT,
			)),
		));
	}

}
