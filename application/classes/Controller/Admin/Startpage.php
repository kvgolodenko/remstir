<?php

class Controller_Admin_Startpage extends Controller_Admin_Abstract_Authenticated {
	
	const SUBMENU_IMAGE			= 0;
	const SUBMENU_ITEMS			= 1;
	const SUBMENU_TEXT			= 2;
	const SUBMENU_KEYWORDS		= 3;
		
	public function before() {
		parent::before();

		if (is_object($this->template)) {
			$this->template->menu_id = self::MENU_STARTPAGE;
			$this->template->sub_menu = array(
					self::SUBMENU_IMAGE => array(
							'title'	=> __('Startpage image'),
							'url'	=> 'admin/startpage'
					),
					self::SUBMENU_ITEMS => array(
							'title'	=> __('Items'),
							'url'	=> 'admin/startpage/items'
					),
					self::SUBMENU_TEXT => array(
							'title'	=> __('Text'),
							'url'	=> 'admin/startpage/text'
					),
					self::SUBMENU_KEYWORDS => array(
							'title'	=> __('Keywords'),
							'url'	=> 'admin/startpage/keywords'
					),
			);
		}
	}

	public function action_index() {
 		$form = new Backend_Startpage_Form();
 		$this->register_ajax_controller($form);

 		if (is_object($this->view)) {
 			$this->view->form = $form;
 		}
	}
	public function action_items()
	{
		$grid = new Backend_Startpage_Items_Grid();
		$this->register_ajax_controller($grid);
	
		if (is_object($this->view)) {
			$this->template->sub_menu_id = self::SUBMENU_ITEMS;
			$this->view->grid = $grid;
		}
	}
	public function action_text()
	{
		$form = new Backend_Startpage_Text_Form();
		$this->register_ajax_controller($form);
	
		if (is_object($this->view)) {
			$this->template->sub_menu_id = self::SUBMENU_TEXT;
			$this->view->form = $form;
		}
	}
	public function action_keywords()
	{
		$form = new Backend_Startpage_Keywords_Form();
		$this->register_ajax_controller($form);
	
		if (is_object($this->view)) {
			$this->template->sub_menu_id = self::SUBMENU_KEYWORDS;
			$this->view->form = $form;
		}
	}
}
