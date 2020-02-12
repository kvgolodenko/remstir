<?php

class Controller_Admin_Settings extends Controller_Admin_Abstract_Authenticated {


	public function before()
	{
		parent::before();

		if (is_object($this->template))
		{
			$this->template->menu_id = self::MENU_SETTINGS;
		}
	}


	/**
	 * Default (index) action handler.
	 * Processes the calls to the general application settings
	 *
	 */
	public function action_index()
	{
		$grid = new Backend_Settings_Admins_Grid();
		$this->register_ajax_controller($grid);
		
		if (is_object($this->view))
		{
			$this->template->menu_id = self::MENU_SETTINGS;
			$this->view->grid = $grid;
		}
	}

}
