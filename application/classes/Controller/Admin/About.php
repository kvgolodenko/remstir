<?php

class Controller_Admin_About extends Controller_Admin_Abstract_Authenticated {

	public function before()
	{
		parent::before();

		if (is_object($this->template))
		{
			$this->template->menu_id = self::MENU_ABOUT;
		}
	}


	public function action_index()
	{
 		$form = new Backend_About_Form();
 		$this->register_ajax_controller($form);

 		if (is_object($this->view))
 		{
 			$this->view->form = $form;
 		}
	}
}
