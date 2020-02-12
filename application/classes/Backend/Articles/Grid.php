<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Articles_Grid extends AVO_Data_Grid {

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = true;
		$this->allow_move = false;

		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM articles',
			'select_query'		=> 'SELECT * FROM articles ORDER BY frontend_date DESC',
			'find_query'		=> 'SELECT * FROM articles WHERE id = :id',
			'delete_query'		=> 'DELETE FROM articles WHERE id = :id',

			'update_query'		=>
				'UPDATE articles
					SET
						is_draft = :is_draft,
						heading = :heading,
						preview_text = :preview_text,
						body_text = :body_text,
						frontend_date = :frontend_date,
						url_title = :url_title,
						category = :category,
						seo_title = :seo_title,
						seo_keywords = :seo_keywords,
						seo_description = :seo_description
					WHERE id = :id',

		'insert_query'	=>
				'INSERT INTO articles (
					ord, is_draft, heading, preview_text, body_text, frontend_date, url_title, category, seo_title, seo_keywords, seo_description)
				VALUES (
					(SELECT * FROM (SELECT IFNULL(MIN(ord) - 1, 0) FROM articles WHERE id = :id) assets_ord), :is_draft, :heading, :preview_text, :body_text, :frontend_date, :url_title, :category, :seo_title, :seo_keywords, :seo_description
				)',
				
			'model_class_name'	=> 'Model_Article',
		));

		$edit_form = new Backend_Articles_Form();
		$edit_form->datasource = $this->datasource;
		$this->forms = array(
			'edit_form'	=> $edit_form
		);

		$this->height = 340;

		$this->fields = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'is_draft',
				'type'			=> AVO_Field::TYPE_BOOL,
				'title'			=> __('Is draft?'),
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
					'name'			=> 'url_title',
					'type'			=> AVO_Field::TYPE_STRING,
					'title'			=> __('URL Title'),
					'sortable'		=> FALSE,
					'hidden'		=> true,
			)),
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
				'name'			=> 'portrait_image',
				'type'			=> AVO_Field::TYPE_STRING,
				'encoded'		=> TRUE,
				'width'			=> Model_Article::GRID_PREVIEW_W,
				'height'			=> Model_Article::GRID_PREVIEW_H,
				'title'			=> __('Portrait teaser image'),
				'calculated'	=> TRUE,
			)),
			new AVO_Field(array(
				'name'			=> 'landscape_image',
				'type'			=> AVO_Field::TYPE_STRING,
				'encoded'		=> TRUE,
				'width'			=> Model_Article_Landscape_Image::GRID_PREVIEW_W,
				'height'			=> Model_Article_Landscape_Image::GRID_PREVIEW_H,
				'title'			=> __('Landscape teaser image and top blog post image'),
				'calculated'	=> TRUE,
			)),
			new AVO_Field(array(
				'name'			=> 'category',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Category'),
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'heading',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Heading'),
				'width'			=> 412,
				'sortable'		=> FALSE,
				'function'		=> array('Text', 'limit_chars'),
			)),
			new AVO_Field(array(
				'name'			=> 'preview_text',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('Preview text'),
				'width'			=> 412,
				'sortable'		=> FALSE,
				'function'		=> array('Text', 'limit_chars'),
			)),
			new AVO_Field(array(
				'name'			=> 'frontend_date',
				'type'			=> AVO_Field::TYPE_DATE,
				'function'		=> 'Text::sqldatetime2str',
				'title'			=> __('Publication date'),
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'body_text',
				'type'			=> AVO_Field::TYPE_TEXT,
				'title'			=> __('Body text'),
				'width'			=> 412,
				'sortable'		=> FALSE,
				'function'		=> function ($val) {
					return Text::limit_chars(strip_tags($val));
				},
			)),
			new AVO_Field(array(
				'name'			=> 'preview_link',
				'type'			=> AVO_Field::TYPE_STRING,
				'encoded'		=> TRUE,
				'width'			=> 412,
				'title'			=> __('Preview link'),
				'calculated'	=> TRUE,
			)),
		));
	}

public function on_calc()
	{
		$portrait_image = Model_Article::factory(null, $this->fields->id->value()); /* @var $portrait_image Model_Article */
		$this->fields->portrait_image->value($portrait_image->grid_preview_link());

		$landscape_image = Model_Article_Landscape_Image::clone_from($portrait_image);
		$this->fields->landscape_image->value($landscape_image->grid_preview_link());
		$this->fields->preview_link->value(HTML::anchor(URL::site('/article/'.$this->fields->url_title->value(), true), 'Go to article', array('target' => '_blank', 'class' => 'btn btn-mini btn-success')));
	}

}
































