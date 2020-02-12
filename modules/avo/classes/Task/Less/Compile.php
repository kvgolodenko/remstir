<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Compiles the LESS stylesheets
 *
 */
class Task_Less_Compile extends Minion_Task {

	protected function _execute(array $params)
	{
		$project_path = dirname(dirname(APPPATH));

		$lessc = 'lessc';
		$cssdir = DOCROOT.'css';

		$files = explode("\n", shell_exec('find '.escapeshellarg($cssdir).' -name \'*.less\''));
		// remove the last empty line
		array_pop($files);

		foreach ($files as $less_file)
		{
			$css_file = preg_replace('/.less$/', '.css', $less_file);
			Minion_CLI::write(shell_exec(escapeshellcmd($lessc).' '.escapeshellarg($less_file).' '.escapeshellarg($css_file)));
		}
	}

}
