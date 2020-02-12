<?php

/**
 * Tv_Banner_Position model
 * @author izaika
 *
 * @property int id
 * @property int position
 *
 */
class Model_Tv_Banner_Position extends ORM {

	protected $_has_one = array(
		'banner' => array(
			'model'       => 'Tv_Banner',
			'foreign_key' => 'tv_banner_position_id',
		),
	);
}

