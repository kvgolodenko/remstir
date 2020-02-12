<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_About_Form extends AVO_Data_Form {

	public function __construct()
	{
		parent::__construct();

		$this->send_data_back_on_save = TRUE;
		$this->title_class = 'ico32 ico32-tools';
		$this->title = __('About page');
		$this->datasource = Model_Variable::get_datasource(
			'about_header',
			'about_text'
		);
		$this->clear_cache = true;

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
						'value'			=> 1,
						'hidden'		=> true,
					)),
					new AVO_Field(array(
						'name'			=> 'about_header',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> __('Heading'),
						'width'			=> 400,
						'max_length'	=> 256,
						'validator'		=> new AVO_Validator_Not_Null,
					)),
					new AVO_Field(array(
						'name'			=> 'about_text',
						'type'			=> AVO_Field::TYPE_TEXT,
						'title'			=> 'Body text',
						'width'			=> 412,
						'height'		=> 412,
						'html_editor'	=> true,
						'class_extension'	=> '{
							"tinymce_options": {
								"plugins": "textcolor media fullscreen paste charmap hr advlist autolink lists link preview code table contextmenu paste textcolor image",
								media_alt_source: false,
								media_poster: false,
								media_dimensions: false,
								media_filter_html: false,
								plugin_preview_width : 412,
								paste_as_text: true,
								style_formats: [
									{title: "Block", items: [
										{title: "Subheader", format: "h3"}
									]},
									{title: "Inline", items: [
										{title: "Superscript", icon: "superscript", format: "superscript"},
										{title: "Subscript", icon: "subscript", format: "subscript"}
									]},
								],
								file_browser_callback: function(field_name, url, type, win) {
									var upload_form = AVO.Backend_Timages_Upload_Form;
									upload_form.input2update = $("#"+field_name);
									upload_form.update("get_data", null, function() {
										$("#upload_form_cont").show();
										upload_form.show();
									});
						        },
								relative_urls:false,
								"content_css": AVO.settings.base_path + "css/public/editor_styles.css",
								"toolbar": "undo redo | underline bold italic strikethrough | styleselect fontsizeselect | forecolor backcolor | alignleft aligncenter alignright alignjustify | charmap | hr | link unlink | bullist | media | removeformat | image | fullscreen code",
								"valid_elements": "iframe[src],object,"
									+ "-span,-a,-ul,-strong,-em,-u,hr,sub,sup,"
									+ "a[href|target|title],blockquote,"
									+ "img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],"
									+ "ul[style],ol[style],li[style],"
									+ "br,"
									+ "strong/b,"
									+ "em/i,"
									+ "h3,"
									+ "span[style|class],"
									+ "div[style|class],"
									+ "p[style|class],"
									+ "u",
							}
						}',
					)),

				AVO_Layout_Control::end_layout(),
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
