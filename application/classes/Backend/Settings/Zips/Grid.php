<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Settings_Zips_Grid extends AVO_Data_Grid {


	public function __construct()
	{
		parent::__construct();

		$this->clear_cache = TRUE;

		$edit_form = new Backend_Settings_Zips_Form();
		$this->forms = array(
			'edit_form'	=> $edit_form
		);

		$edit_form->datasource = $this->datasource = new Backend_Settings_Zips_Datasource(array(
			'on_calc_parameter'	=> array($this, 'on_calc_data_source_parameter'),
		));


		$this->fields = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'			=> 'no',
				'type'			=> AVO_Field::TYPE_INT,
				'width'			=> 40,
				'title'			=> __('#'),
				'calculated'	=> TRUE,
				'function'		=> 'ds_abspos',
				'sortable'		=> FALSE,
			)),
			new AVO_Field(array(
				'name'			=> 'id',
				'type'			=> AVO_Field::TYPE_INT,
				'key'			=> TRUE,
				'hidden'		=> TRUE,
			)),
			new AVO_Field(array(
				'name'			=> 'county_name',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('county'),
			)),
			new AVO_Field(array(
				'name'			=> 'zip',
				'type'			=> AVO_Field::TYPE_STRING,
				'title'			=> __('zip code'),
			)),
		));

		$this->parameters = new AVO_Controls_List(array(
			new AVO_Field(array(
				'name'				=> 'county_id_search',
				'type'				=> AVO_Field::TYPE_INT,
			)),
			new AVO_Field(array(
				'name'				=> 'zip_search',
				'type'				=> AVO_Field::TYPE_STRING,
			)),
		));
	}
}

