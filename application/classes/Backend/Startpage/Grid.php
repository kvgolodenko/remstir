<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Startpage_Grid extends AVO_Data_Grid
{

	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = TRUE;
		$this->datasource = new AVO_Data_Source_DB(array(
			'count_query'		=> 'SELECT COUNT(*) FROM startpage_images',
			'select_query'		=> 'SELECT * FROM startpage_images ORDER BY ord',
			'find_query'		=> 'SELECT * FROM startpage_images WHERE id = :id',
			'delete_query'		=> 'DELETE FROM startpage_images WHERE id = :id',

			'update_query'		=>
				'UPDATE startpage_images
					SET
					WHERE id = :id',

			'insert_query'	=>
				'INSERT INTO startpage_images (
				)
				VALUES (
				(SELECT * FROM (SELECT IFNULL(MAX(ord), 0) + 1 FROM startpage_images) assets_ord)',
				

			'move_parameters'	=> array(
				'table'			=> 'startpage_images',
				'where'			=> 'id = :id',
				'order_by'		=> 'ord'
			),

			'on_calc_parameter'	=> array($this, 'on_calc_data_source_parameter'),
			'model_class_name'	=> 'Model_Startpage_Image',
		));

		$edit_form = new Backend_Startpage_Form();
		$edit_form->datasource = $this->datasource;
		$this->forms = array(
			'edit_form'	=> $edit_form
		);

		$this->height = 340;
		$this->width = 745;

		$this->fields = new AVO_Controls_List(array(
			AVO_Field::std_drag_field(),
			new AVO_Field(array(
				'name'			=> 'id',
				'type'			=> AVO_Field::TYPE_INT,
				'key'			=> true,
				'hidden'		=> true,
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
		$image = Model_Startpage_Image::factory(null, $this->fields->id->value());
		$this->fields->preview->value(HTML::anchor(
			$image->url(Model_Startpage_Image::$ORIGINAL_NAME),
			HTML::image($image->url(Model_Startpage_Image::GRID_PREVIEW_NAME)),
			array('class' => 'zoomed_preview')
		));
	}

}
