<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_News_Images_Grid extends AVO_Data_Grid
{

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = TRUE;
		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM blog_images WHERE blog_article_id = :blog_article_id',
			'select_query'		=> 'SELECT * FROM blog_images WHERE blog_article_id = :blog_article_id ORDER BY ord',
			'find_query'		=> 'SELECT * FROM blog_images WHERE id = :id',
			'delete_query'		=> 'DELETE FROM blog_images WHERE id = :id',

			'update_query'		=>
				'UPDATE blog_images
					SET
						id = :id,
						blog_article_id = :blog_article_id,
						text =:text
					WHERE id = :id',

			'insert_query'	=>
				'INSERT INTO blog_images (ord, blog_article_id, text)
					VALUES ((SELECT * FROM (SELECT IFNULL(MAX(ord), 0) + 1 FROM blog_images WHERE blog_article_id = :blog_article_id) assets_ord), :blog_article_id, :text)',

			'move_parameters'	=> array(
				'table'			=> 'blog_images',
				'where'			=> 'blog_article_id = :blog_article_id',
				'order_by'		=> 'ord'
			),

			'on_calc_parameter'	=> array($this, 'on_calc_data_source_parameter'),
			'model_class_name'	=> 'Model_News_Image',
		));

		$edit_form = new Backend_News_Images_Form();
		$edit_form->datasource = $this->datasource;
		$this->forms = array(
			'edit_form'	=> $edit_form
		);

		$this->height = 340;
		$this->width = 745;

		$this->fields = new AVO_Controls_List(array(
			AVO_Field::std_drag_field(),
			new AVO_Field(array(
				'name'			=> 'no',
				'type'			=> AVO_Field::TYPE_INT,
				'width'			=> 40,
				'title'			=> __('#'),
				'calculated'	=> true,
				'function'		=> 'ds_abspos',
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'id',
				'type'			=> AVO_Field::TYPE_INT,
				'key'			=> true,
				'hidden'		=> true,
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'preview',
				'type'			=> AVO_Field::TYPE_STRING,
				'encoded'		=> TRUE,
				'width'			=> Model_News_Image::GRID_PREVIEW_W,
				'title'			=> __('preview'),
				'calculated'	=> TRUE,
			)),
			new AVO_Field(array(
				'name'			=> 'text',
				'type'			=> AVO_Field::TYPE_STRING,
				'width'			=> 230,
				'title'			=> __('Text'),
				'sortable'		=> FALSE,
				'function'		=> function ($val) {
					return Text::limit_chars(strip_tags($val));
				},
			)),
		));
		$this->parameters = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'blog_article_id',
				'type'			=> AVO_Field::TYPE_INT,
			)),
		));
	}


	public function on_calc()
	{
		$image = Model_News_Image::factory(null, $this->fields->id->value());
		$this->fields->preview->value(HTML::anchor($image->url(Model_News_Image::$ORIGINAL_NAME),	HTML::image($image->url(Model_News_Image::GRID_PREVIEW_NAME)),
			array('class' => 'zoomed_preview')
		));
	}

}
