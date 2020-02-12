<?php

class Controller_Admin_Users extends Controller_Admin_Abstract_Authenticated {
	
	const SUBMENU_USERS			= 0;
	const SUBMENU_EMAIL			= 1;

	public function before() {
		parent::before();

		if (is_object($this->template)) {
			$this->template->menu_id = self::MENU_USERS;
			$this->template->sub_menu = array(
					self::SUBMENU_USERS => array(
							'title'	=> __('Клиенты'),
							'url'	=> 'admin/users'
					),
					self::SUBMENU_EMAIL => array(
							'title'	=> __(' Е-мейл'),
							'url'	=> 'admin/users/email'
					),
			);
		}
	}

	public function action_index() {
 		$grid = new Backend_Users_Grid();
 		$this->register_ajax_controller($grid);

 		if (is_object($this->view)) {
 			$this->template->sub_menu_id = self::SUBMENU_USERS;
 			$this->view->grid = $grid;
 		}
	}
	
	public function action_email()
	{
		$form = new Backend_Users_Email_Form();
		$this->register_ajax_controller($form);
	
		if (is_object($this->view)) {
			$this->template->sub_menu_id = self::SUBMENU_EMAIL;
			$this->view->form = $form;
		}
	}
}
