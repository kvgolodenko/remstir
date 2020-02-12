<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Controller_Admin_Abstract_Authenticated extends Controller_Admin_Abstract {

	const MENU_SETTINGS			= 0;
	const MENU_NEWS				= 1;
	const MENU_CONTACTS			= 2;
	const MENU_TRAINERS			= 3;
	const MENU_CATEGORIES		= 4;
	const MENU_USERS			= 5;
	const MENU_TABELS			= 6;
	const MENU_PRICES			= 7;
	const MENU_NUTRITION		= 8;
	const MENU_GALLERY			= 9;
	const MENU_STARTPAGE		= 10;
	const MENU_ABOUT			= 11;


	public function before()
	{
		parent::before();

		$this->admin = new Model_Administrator((int) $this->session->get('admin:user_id'));

		if ( ! $this->is_admin())
		{
			$this->request->avo_redirect('admin/auth', array(
				'perform_action'	=> 'doc_reload',
				'status'			=> 1,
				'message'			=> __('Access denied'),
			));
		}

		if (is_object($this->template))
		{
			$this->template->is_admin = TRUE;
			$this->template->username = $this->admin->full_name;

			// build up the menu structure
			$this->template->menu = array(
				self::MENU_SETTINGS=> array(
					'title'	=> __('Settings'),
					'url'	=> 'admin/settings'
				),
				self::MENU_TRAINERS=> array(
					'title'	=> __('Trainers'),
					'url'	=> 'admin/trainers'
				),
				self::MENU_CONTACTS => array(
					'title'	=> __('Contacts'),
					'url'	=> 'admin/contacts'
				),
				self::MENU_CATEGORIES=> array(
					'title'	=> __('Categories'),
					'url'	=> 'admin/categories'
				),
				self::MENU_USERS=> array(
					'title'	=> __('Users'),
					'url'	=> 'admin/users'
				),
				self::MENU_TABELS=> array(
					'title'	=> __('Tabels'),
					'url'	=> 'admin/tabels'
				),
				self::MENU_PRICES=> array(
					'title'	=> __('Prices'),
					'url'	=> 'admin/prices'
				),
				self::MENU_NUTRITION=> array(
					'title'	=> __('Sport nutrition'),
					'url'	=> 'admin/nutritions'
				),
				self::MENU_GALLERY=> array(
					'title'	=> __('Gallery'),
					'url'	=> 'admin/gallery'
				),
				self::MENU_NEWS=> array(
					'title'	=> __('News'),
					'url'	=> 'admin/news'
				),
				self::MENU_STARTPAGE=> array(
					'title'	=> __('Startpage'),
					'url'	=> 'admin/startpage'
				),
				self::MENU_ABOUT=> array(
					'title'	=> __('About'),
					'url'	=> 'admin/about'
				),
			);
			$this->template->sub_menu = NULL;
			$this->template->menu_id = 0;
			$this->template->sub_menu_id = 0;
		}
	}
}
