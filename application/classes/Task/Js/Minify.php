<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Compiles the LESS stylesheets
 *
 */
class Task_Js_Minify extends Minion_Task {

	protected function _execute(array $params)
	{
		$project_path = dirname(dirname(APPPATH));

		$uglify = 'uglifyjs';
		$jsdir = DOCROOT.'js';

		$files = explode("\n", shell_exec('find '.escapeshellarg($jsdir).' -name \'*.js\''));
		// remove the last empty line
		array_pop($files);

		foreach ($files as $js_file)
		{
			$js_file = preg_replace('/.js$/', '.js', $js_file);
			Minion_CLI::write(shell_exec(escapeshellcmd($uglify).' '.escapeshellarg($js_file).' -o '.escapeshellarg($js_file).' --source-map '.escapeshellarg($js_file).'.map'));
		}
	}

}
