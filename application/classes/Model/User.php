<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * User model
 * @author kirill
 *
 */
class Model_User extends ORM {
	
	public function add_user($name, $phone)
	{
		DB::insert('users',array('name','phone'))
		->values(array($name, $phone))
		->execute();
	}
	public function check_user($name,$phone)
	{
		$result = Model_User::factory()
			->where('name', '=', $name)
			->and_where('phone', '=', $phone)
			->count_all();
		
			if($result > 0){
				return FALSE;
			}
			else{
				return TRUE;
			}
	}
	
}

