<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Startpage_Application model
 * @author kirill
 *
 * @property int id
 * @property string created
 * @property string modified
 * @property int modify_count
 * @property int ord
 * @property text text
 * @property string title
 * @property string uid
 * @property string ext
 * @property string width
 * @property string height
 *
 */
class Model_Startpage_Application extends ORM{
	protected $_table_name = 'work_applications';
	
	public static $STORAGE_PATH = 'assets/applications/';
	public static $uid_field_name = 'uid';
	public static $title_field_name = 'title';
	public static $ext_field_name = 'ext';
	public static $ORIGINAL_NAME = 'original';
	
	
	public function add_application($name, $phone, $email, $text,$filename,$ext)
	{
		DB::insert('work_applications',array('name','phone','email','text','uid','title','ext')) 
			  ->values(array($name, $phone, $email, $text,$filename,$filename,$ext))   
			  ->execute();
	}
	public function add_simple_app($name, $phone){
		DB::insert('work_applications',array('name','phone'))
			->values(array($name, $phone))
			->execute();
	}
	public function add_contact ($name, $phone)
	{
		DB::insert('work_applications',array('name','phone')) 
			  ->values(array($name, $phone))   
			  ->execute();
	}
	public function url(){
		$uid = $this->{static::$uid_field_name};
		return static::$STORAGE_PATH.'title';
	}
	
}
