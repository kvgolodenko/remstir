<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Gallery_Albums_Grid extends AVO_Data_Grid
{

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = TRUE;
		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM albums',
			'select_query'		=> 'SELECT * FROM albums ORDER BY ord',
			'find_query'		=> 'SELECT * FROM albums WHERE id = :id',
			'delete_query'		=> 'DELETE FROM albums WHERE id = :id',

			'update_query'		=>
				'UPDATE albums
					SET
						header =:header,
						subtitle = :subtitle,
						url_title = :url_title
					WHERE id = :id',

			'insert_query'	=>
				'INSERT INTO albums (
					ord, header, subtitle, url_title
				)
				VALUES (
				(SELECT * FROM (SELECT IFNULL(MAX(ord), 0) + 1 FROM albums) assets_ord), :header, :subtitle, :url_title)',
				

			'move_parameters'	=> array(
				'table'			=> 'albums',
				'where'			=> 'id = :id',
				'order_by'		=> 'ord'
			),

			'on_calc_parameter'	=> array($this, 'on_calc_data_source_parameter'),
			'model_class_name'	=> 'Model_Gallery_Album',
		));

		$edit_form = new Backend_Gallery_Albums_Form();
		$edit_form->datasource = $this->datasource;
		$this->forms = array(
			'edit_form'	=> $edit_form
		);

		$this->height = 340;
		$this->width = 1280;

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
				'width'			=> Model_Gallery_Album::GRID_PREVIEW_W,
				'title'			=> __('preview'),
				'calculated'	=> TRUE,
			)),
			new AVO_Field(array(
				'name'			=> 'header',
				'type'			=> AVO_Field::TYPE_STRING,
				'width'			=> 230,
				'title'			=> __('Header'),
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'subtitle',
				'type'			=> AVO_Field::TYPE_STRING,
				'width'			=> 230,
				'title'			=> __('Subtitle'),
				'sortable'		=> FALSE,
			)),
		));
		$this->parameters = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'article_id',
				'type'			=> AVO_Field::TYPE_INT,
			)),
		));
	}


	public function on_calc()
	{
		$image = Model_Gallery_Album::factory(null, $this->fields->id->value());
		$this->fields->preview->value(HTML::anchor(
			$image->url(Model_Gallery_Album::$ORIGINAL_NAME),
			HTML::image($image->url(Model_Gallery_Album::GRID_PREVIEW_NAME)),
			array('class' => 'zoomed_preview')
		));
	}

}
