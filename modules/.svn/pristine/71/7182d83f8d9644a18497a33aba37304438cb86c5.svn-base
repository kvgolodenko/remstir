<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Restores the database from the dump
 *
 */
class Task_Db_Restore extends Minion_Task {

	protected function _execute(array $params)
	{
		$project_path = dirname(dirname(APPPATH));
		$db_name = $project_name = basename($project_path);
		$home_path = trim(`cd && pwd`);
		$mysql_config = $home_path.DIRECTORY_SEPARATOR.'.mysql';
		$db_path = dirname(dirname(APPPATH)).DIRECTORY_SEPARATOR.'db'.DIRECTORY_SEPARATOR;

		$password = is_file($mysql_config) ? rtrim(file_get_contents($mysql_config)) : '';

		if (!is_file("{$db_path}dump.sql") OR !is_file("{$db_path}createdb.sql"))
		{
			Minion_CLI::write('Dump or the database creating dump are not found');
			return;
		}

		Minion_CLI::write('creating the database…');
		if(!Kohana::$is_windows)
		{
			Minion_CLI::write(shell_exec('cat '.escapeshellarg("$db_path/createdb.sql").' |mysql -u root -h localhost '.escapeshellarg("-p$password")));
		}
		else
		{
			Minion_CLI::write(shell_exec('type '.escapeshellarg("$db_path/createdb.sql").' |mysql -u root -h localhost '.escapeshellarg("-p$password")));
		}
		Minion_CLI::write('restoring the database…');
		if (!Kohana::$is_windows)
		{
			Minion_CLI::write(shell_exec('LANG=C sed \'s/DEFINER=`[^`]*`@`[^`]*`/DEFINER=CURRENT_USER/g\' '.escapeshellarg($db_path.'/dump.sql').' |mysql -u root -h localhost '.escapeshellarg("-p$password").' '.escapeshellarg($db_name)));
		}
		else
		{
			Minion_CLI::write(shell_exec('mysql -u root -h localhost '.escapeshellarg("-p$password").' '.escapeshellarg($db_name).' < '. escapeshellarg($db_path.'/dump.sql')));
		}
	}

}
