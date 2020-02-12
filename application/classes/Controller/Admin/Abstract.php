<?php

abstract class Controller_Admin_Abstract extends AVO_Controller {

	const RESOURCE_SERIAL = 0;

	/**
	 * Administrator
	 * @var Model_Administrator
	 */
	public $admin;

	public function before()
	{
		$this->module = 'admin';
		parent::before();

		if (is_object($this->template))
		{
			$this->template->is_admin = FALSE;
			$this->template->show_header = TRUE;

			// define the common styles
			$this->add_js_script('js/admin.js');
			$this->add_stylesheet(array('url' => 'css/admin/style.'.self::RESOURCE_SERIAL.'.css'));

			$this->use_client_library(
				'modernizr', 'jquery', 'jquery-dataSelector', 'fancybox', 'jquery-ui', 'jquery-ui-i18n',
				'jquery-ui-timepicker', 'bootstrap',  'fileuploader', 'avo', 'jcrop'
			);

			$this->add_js_script('js/tinymce/tinymce.min.js');
			$this->add_js_script('js/tinymce/jquery.tinymce.min.js');

		}
	}

	public function is_admin()
	{
		return ($this->admin AND $this->admin->loaded());
	}


	public function after()
	{
		parent::after();
		if (Kohana::$environment == Kohana::DEVELOPMENT) ProfilerToolbar::firebug();
	}

}
