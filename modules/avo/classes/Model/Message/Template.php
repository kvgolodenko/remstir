<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Message_Template extends ORM {

	/**
	 * Searches for a template identified by a string identificator
	 *
	 * @param string identificator
	 * @return Model_Message_Template
	 * @throws Kohana_Exception if template is not found
	 */
	public static function find_by_id($id) {
		$template = new self();
		$template->where('str_id', '=', $id)->find();
		if ($template->loaded()) return $template;
		throw new Kohana_Exception('Message template :name is not found', array(':name' => $id));
	}

}
