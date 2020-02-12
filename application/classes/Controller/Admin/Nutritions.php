<?php

class Controller_Admin_Nutritions extends Controller_Admin_Abstract_Authenticated {

	const SUBMENU_PRICE			= 0;
	const SUBMENU_TEXT			= 1;
	
	public function before() {
		parent::before();
		if (is_object($this->template)) {
			$this->template->menu_id = self::MENU_NUTRITION;
			$this->template->sub_menu = array(
					self::SUBMENU_PRICE => array(
							'title'	=> __('Price'),
							'url'	=> 'admin/nutritions'
					),
					self::SUBMENU_TEXT => array(
							'title'	=> __('Page'),
							'url'	=> 'admin/nutritions/text'
					),
			);
		}
	}

	public function action_index() {
 		$grid = new Backend_Nutritions_Grid();
 		$this->register_ajax_controller($grid);

 		if (is_object($this->view)) {
 			$this->template->sub_menu_id = self::SUBMENU_PRICE;
 			$this->view->grid = $grid;
 		}
	}
	
	public function action_text()
	{
		$form = new Backend_Nutritions_Text_Form();
		$this->register_ajax_controller($form);
	
		if (is_object($this->view)) {
			$this->template->sub_menu_id = self::SUBMENU_TEXT;
			$this->view->form = $form;
		}
	}
}
