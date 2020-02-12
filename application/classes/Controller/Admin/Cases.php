<?php

class Controller_Admin_Cases extends Controller_Admin_Abstract_Authenticated {
	const SUBMENU_CASES = 0;
	const SUBMENU_PAGE  = 1;
	const SUBMENU_APPLICATIONS = 2;
	
	public function before() {
		parent::before();

		if (is_object($this->template)) {
			$this->template->menu_id = self::MENU_CASES;
			$this->template->sub_menu = array(
				self::SUBMENU_CASES => array(
						'title'	=> __('Cases'),
						'url'	=> 'admin/cases'
				),
				self::SUBMENU_PAGE => array(
						'title'	=> __('Page'),
						'url'	=> 'admin/cases/page'
				),
				self::SUBMENU_APPLICATIONS => array(
						'title'	=> __('Applications'),
						'url'	=> 'admin/cases/applications'
				),
			);		
		}
	}

	public function action_index() {
 		$grid = new Backend_Cases_Grid();
 		$this->register_ajax_controller($grid);

 		if (is_object($this->view)) {
 			$this->view->grid = $grid;
 		}
	}
	public function action_page() {
 		$form = new Backend_Cases_Page_Form();
 		$this->register_ajax_controller($form);

 		if (is_object($this->view)) {
 			$this->template->sub_menu_id = self::SUBMENU_PAGE;
 			$this->view->form = $form;
 		}
 		
	}
	public function action_applications() {
 		$grid = new Backend_Cases_Applications_Grid();
 		$this->register_ajax_controller($grid);

 		if (is_object($this->view)) {
 			$this->template->sub_menu_id = self::SUBMENU_APPLICATIONS;
 			$this->view->grid = $grid;
 		}
 		
	}
}
