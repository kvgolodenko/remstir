<?php

class Controller_Admin_Contacts extends Controller_Admin_Abstract_Authenticated {
	
	const SUBMENU_CONTACTS			= 0;
	const SUBMENU_SOCIAL			= 1;
	const SUBMENU_PAGE				= 2;
	
	
	public function before()
	{
		parent::before();

		if (is_object($this->template))
		{
			$this->template->menu_id = self::MENU_CONTACTS;
			$this->template->sub_menu = array(
					self::SUBMENU_CONTACTS => array(
							'title'	=> __('Контакты'),
							'url'	=> 'admin/contacts'
					),
					self::SUBMENU_SOCIAL => array(
							'title'	=> __('Соцсети'),
							'url'	=> 'admin/contacts/social'
					),
					self::SUBMENU_PAGE => array(
							'title'	=> __('Страница'),
							'url'	=> 'admin/contacts/page'
					),
			);
		}
	}


	public function action_index()
	{
		$form = new Backend_Contacts_Form();
		$this->register_ajax_controller($form);
	
		if (is_object($this->view)) {
			$this->template->sub_menu_id = self::SUBMENU_CONTACTS;
			$this->view->form = $form;
		}
	}
	
	public function action_social()
	{
		$form = new Backend_Contacts_Social_Form();
		$this->register_ajax_controller($form);
	
		if (is_object($this->view)) {
			$this->template->sub_menu_id = self::SUBMENU_SOCIAL;
			$this->view->form = $form;
		}
	}
	public function action_page()
	{
		$form = new Backend_Contacts_Page_Form();
		$this->register_ajax_controller($form);
	
		if (is_object($this->view)) {
			$this->template->sub_menu_id = self::SUBMENU_PAGE;
			$this->view->form = $form;
		}
	}
}
