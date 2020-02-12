<?php defined('SYSPATH') OR die('No direct access allowed.');

class Backend_Settings_Zips_Filter_Form extends AVO_Data_Form {

	public function __construct()
	{
		parent::__construct();

		$this->title_class = '';
		$this->title = '';
		$this->width = '100%';


		$this->datasource = new AVO_Data_Source_Array(array(
			'dataset' => array(
				array(
					'id'				=> 1,
					'zip_search'		=> '',
					'county_id_search'	=> NULL,
				),
			),
		));

		$this->controls = new AVO_Controls_List(array(
			new AVO_Layout_Control(array(
				'row_id', 'zip_search',
				'layout', 'new AVO.Horizontal_Layout()'
			)),
				new AVO_Field(array(
					'name'			=> 'id',
					'type'			=> AVO_Field::TYPE_INT,
					'key'			=> TRUE,
					'hidden'		=> TRUE,
					'fixed_value'	=> 1,
				)),
				new AVO_Field(array(
					'name'			=> 'zip_search',
					'type'			=> AVO_Field::TYPE_STRING,
					'title'			=> __('search for'),
					'width'			=> 100,
					'default_focus'	=> TRUE,
					'max_length'	=> 10,
				)),
				new AVO_Field(array(
					'name'				=> 'county_id_search',
					'type'				=> AVO_Field::TYPE_LOOKUP,
					'title'				=> __('in county'),
					'width'				=> 200,
					'lookup_datasource'	=> new AVO_Data_Source_DB(array(
						'select_query'		=> 'SELECT * FROM counties ORDER BY name',
						'find_query'		=> 'SELECT * FROM counties WHERE id = :id',
					)),
				)),
				new AVO_Button(array(
					'name'			=> 'btn_filter',
					'icon'			=> 'icon-search',
					'value'			=> __('filter'),
					'class_extension'	=> '{
						onClick: function() {
							return false;
						}
					}',
				)),
				new AVO_Button(array(
					'name'			=> 'btn_reset_filter',
					'icon'			=> 'icon-remove',
					'value'			=> __('reset'),
					'class_extension'	=> '{
							onClick: function() {
								var form = this.parent();
								var link = form.control("link_zips");
								link.disableUpdates();
								form.control("zip_search").updatePageControlValue(null);
								form.control("county_id_search").updatePageControlValue("");
								link.enableUpdates();
								link.updateChild();
								return false;
							}
						}',
				)),
			AVO_Layout_Control::end_layout(),
			new AVO_Link(array(
				'name'		=> 'link_zips',
				'child'		=> new Backend_Settings_Zips_Grid,
				'params'	=> array(
					'id' 				=> 'dummy_id',
					'zip_search'		=> 'zip_search',
					'county_id_search'	=> 'county_id_search',
				),
			)),
		));

		$this->class_extension = '{
			html_class: "",
			layout: new AVO.Grid_Layout({columns: 1})
		}';
	}

}
