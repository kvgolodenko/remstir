<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Fixes the ownership and permittions for media files and directories
 *
 */
class Task_Collect_Garbage extends Minion_Task {

	protected function _execute(array $params)
	{
		AVO_Controller::collect_garbage(TRUE);
	}

}
