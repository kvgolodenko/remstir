<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Optimizes the search index
 *
 */
class Task_Index_Optimize extends Minion_Task {

	protected function _execute(array $params)
	{
		foreach (array('Model_Article', 'Model_Magazin_Article', 'Model_Product') as $model_name)
		{
			AVO_Search_ZendSearch::instance()->get_index($model_name)->optimize();
		}
	}

}
