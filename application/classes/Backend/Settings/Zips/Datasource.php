<?php defined('SYSPATH') OR die('No direct script access.');

class Backend_Settings_Zips_Datasource extends AVO_Data_Source_DB {

	public function __construct(array $array = array())
	{
		$defaults = array(
			'count_query'	=>
				'SELECT COUNT(*)
				FROM zips
				WHERE
					(:zip_search IS NULL OR LOCATE(:zip_search, zip))
					AND (:county_id_search IS NULL OR county_id = :county_id_search)',

			'select_query'	=>
				'SELECT zips.*, counties.name AS county_name
				FROM zips
					JOIN counties ON counties.id = zips.county_id
				WHERE
					(:zip_search IS NULL OR LOCATE(:zip_search, zip))
					AND (:county_id_search IS NULL OR county_id = :county_id_search)',

			'find_query'	=> 'SELECT * FROM zips WHERE id = :id',

			'delete_query'	=> 'DELETE FROM zips WHERE id = :id',

			'update_query'	=>
				'UPDATE zips
				SET
					county_id = :county_id,
					zip = :zip
				WHERE
					id = :id',

			'insert_query'	=> 'INSERT INTO zips (county_id, zip) VALUES (:county_id, :zip)',
		);
		parent::__construct(Arr::merge($defaults, $array));
	}

}
