<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Startpage_Items_Grid extends AVO_Data_Grid
{

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = TRUE;
		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM startpage_items',
			'select_query'		=> 'SELECT * FROM startpage_items ORDER BY ord',
			'find_query'		=> 'SELECT * FROM startpage_items WHERE id = :id',
			'delete_query'		=> 'DELETE FROM startpage_items WHERE id = :id',

			'update_query'		=>
				'UPDATE startpage_items
					SET
						header = :header,
						subtitle = :subtitle,
						text = :text,
						url_title	= :url_title
					WHERE id = :id',

			'insert_query'	=>
				'INSERT INTO startpage_items (
					ord, header, subtitle, text, url_title
				)
				VALUES (
				(SELECT * FROM (SELECT IFNULL(MAX(ord), 0) + 1 FROM startpage_items) assets_ord), :header, :subtitle, :text, :url_title)',
				

			'move_parameters'	=> array(
				'table'			=> 'startpage_items',
				'where'			=> 'id = :id',
				'order_by'		=> 'ord'
			),

			'on_calc_parameter'	=> array($this, 'on_calc_data_source_parameter'),
			'model_class_name'	=> 'Model_Startpage_Item_Image',
		));

		$edit_form = new Backend_Startpage_Items_Form();
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
						'name'			=> 'header',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> __('Header'),
						'width'			=> 400,
						'max_length'	=> 256,
						'sortable'		=> FALSE,
				)),
				new AVO_Field(array(
						'name'			=> 'preview',
						'type'			=> AVO_Field::TYPE_STRING,
						'encoded'		=> TRUE,
						'width'			=> Model_Startpage_Item_Image::GRID_PREVIEW_W,
						'title'			=> __('preview'),
						'calculated'	=> TRUE,
				)),
				new AVO_Field(array(
						'name'			=> 'preview_link',
						'type'			=> AVO_Field::TYPE_STRING,
						'encoded'		=> TRUE,
						'width'			=> 412,
						'title'			=> __('Preview link'),
						'calculated'	=> TRUE,
				)),
				new AVO_Field(array(
						'name'			=> 'subtitle',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> __('Top image head 2'),
						'width'			=> 400,
						'max_length'	=> 256,
						'sortable'		=> FALSE,
				)),
				new AVO_Field(array(
						'name'			=> 'url_title',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> __('URL title'),
						'width'			=> 400,
						'max_length'	=> 256,
						'sortable'		=> FALSE,
				)),
				new AVO_Field(array(
						'name'			=> 'text',
						'type'			=> AVO_Field::TYPE_STRING,
						'title'			=> __('Top image head 3'),
						'width'			=> 400,
						'sortable'		=> FALSE,
				)),
		));
		$this->parameters = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'id',
				'type'			=> AVO_Field::TYPE_INT,
			)),
		));
	}


	public function on_calc()
	{
		$image = Model_Startpage_Item_Image::factory(null, $this->fields->id->value());
		$this->fields->preview->value(HTML::anchor(
			$image->url(Model_Startpage_Item_Image::$ORIGINAL_NAME),
			HTML::image($image->url(Model_Startpage_Item_Image::GRID_PREVIEW_NAME)),
			array('class' => 'zoomed_preview')
		));
		
		$this->fields->preview_link->value(HTML::anchor(URL::site('/item/'.$this->fields->url_title->value(), true), 'Go to article', array('target' => '_blank', 'class' => 'btn btn-mini btn-success')));
		
	}

}
