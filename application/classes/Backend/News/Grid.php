<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_News_Grid extends AVO_Data_Grid {

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = true;
		$this->allow_move = false;

		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM blog_articles',
			'select_query'		=> 'SELECT * FROM blog_articles ORDER BY frontend_date DESC',
			'find_query'		=> 'SELECT * FROM blog_articles WHERE id = :id',
			'delete_query'		=> 'DELETE FROM blog_articles WHERE id = :id',

			'update_query'		=>
				'UPDATE blog_articles
					SET
						heading = :heading,
						preview_text = :preview_text,
						body_text = :body_text,
						frontend_date = :frontend_date,
						category = :category,
						url_title = :url_title,
						seo_title = :seo_title,
						seo_keywords = :seo_keywords,
						seo_description = :seo_description
					WHERE id = :id',

		'insert_query'	=>
				'INSERT INTO blog_articles (
					ord, heading, preview_text, body_text, frontend_date, category, url_title, seo_title, seo_keywords, seo_description
				)
				VALUES (
					(SELECT * FROM (SELECT IFNULL(MIN(ord) - 1, 0) FROM blog_articles) assets_ord), :heading, :preview_text, :body_text, :frontend_date, :category, :url_title, :seo_title, :seo_keywords, :seo_description
				)',

			'custom_errors' => array(
				'/Duplicate entry \'.+?\' for key \'is_press_2\'/' => array('url_title', __('duplicate value')),
			),

			'model_class_name'	=> 'Model_News_Article',
		));

		$edit_form = new Backend_News_Form();
		$edit_form->datasource = $this->datasource;
		$this->forms = array(
			'edit_form'	=> $edit_form
		);

		$this->height = 340;

		$this->fields = new AVO_Controls_List(array(
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
				'title'			=> __('Portrait teaser image'),
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
		$portrait_image = $this->fields->model(); /* @var $portrait_image Model_Article */
		$this->fields->portrait_image->value($portrait_image->grid_preview_link());


			if ($this->fields->url_title->value()) {
				$this->fields->preview_link->value(HTML::anchor(URL::site('/draft_article/'.$this->fields->url_title->value(), true), 'Draft preview', array('target' => '_blank', 'class' => 'btn btn-mini btn-warning')));
			} else {
				$this->fields->preview_link->value('Case does not have URL yet');
			}
			$this->fields->preview_link->value(HTML::anchor(URL::site('/blog_article/'.$this->fields->url_title->value(), true), 'Go to article', array('target' => '_blank', 'class' => 'btn btn-mini btn-success')));
		}

}
































