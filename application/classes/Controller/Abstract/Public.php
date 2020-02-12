<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Abstract_Public extends AVO_Controller
{
	const RESOURCE_SERIAL = 2;

	/**
	 * Current AJAX response, if any
	 * @var stdClass
	 */
	protected $result;
	/**
	 * is the request ajax+post?
	 * @var bool
	 */
	protected $is_ajax;

	protected $fb_app_id;

	public function before() {
		$this->auto_view = TRUE;
 		$this->module = 'public';
 		$detect = new Mobiledetect;

//		if ($detect->isMobile() && !$detect->isTablet()) {
//			$this->module = 'mobile';
//		} else {
//// 			$this->module = 'mobile';
//			$this->module = 'public';
//		}
		$this->fb_app_id = Model_Variable::value_by_name('facebook_application_id', true);

		parent::before();

		// Prepare AJAX
		$this->is_ajax = ($this->request->is_ajax() AND ($this->request->is_post() OR $this->request->is_put()));
		if ($this->is_ajax)
		{
			$this->force_ajax_response();
		}
		else
		{
			if (is_object($this->template))
			{
				// define the application styles and javascript code

				$this->session = Session::instance();
				
				$this->add_js_script('js/'.$this->module.'.js');
				$this->add_js_script('js/lib/underscore.js');
				$this->add_js_script('js/lib/responsive-bp.js');
				$this->use_client_library('modernizr', 'jquery', 'jquery-dataSelector');


				if (Kohana::$environment == Kohana::DEVELOPMENT)
				{
					$this->add_js_script('/lib/less/less-1.3.3.js');
					$this->template->styles[] = array(
							'url' => 'css/'.$this->module.'/style.less',
							'rel' => 'stylesheet/less'
							
					);
				}
				else
				{
					$this->template->styles[] = array(
							'url' => 'css/'.$this->module.'/style.css'
					);
				}
				$this->template->styles[] = array('url' => 'css/fontello-4e3e7919/css/fontello.css');
				$this->template->styles[] = array('url' => 'css/lib/normalize.css');
				$this->template->styles[] = array('url' => 'lib/fancybox-2.1.4/jquery.fancybox.css');
				$this->template->styles[] = array('url' => 'lib/fancybox-2.1.4/helpers/jquery.fancybox-buttons.css');
				$this->template->styles[] = array('url' => 'lib/fancybox-2.1.4/helpers/jquery.fancybox-thumbs.css');

				if ($this->module == 'public') {
					$this->add_js_script('js/lib/intention.js');
					$this->add_js_script('js/lib/context.js');
					$this->add_js_script('js/lib/isotope.min.js');
				}
				$this->add_js_script('js/lib/fotorama.js');
				$this->add_js_script('js/lib/imagesloaded.pkgd.min.js');
// 				$this->add_js_script('js/lib/jquery.mousewheel-3.0.6.pack.js');
				$this->add_js_script('lib/fancybox-2.1.4/jquery.fancybox.pack.js');
				$this->add_js_script('lib/fancybox-2.1.4/helpers/jquery.fancybox-buttons.js');
				$this->add_js_script('lib/fancybox-2.1.4/helpers/jquery.fancybox-media.js');
				$this->add_js_script('lib/fancybox-2.1.4/helpers/jquery.fancybox-thumbs.js');
				

				$this->template->google_api_key = Model_Variable::value_by_name('ga_id', true);
				View::set_global('fb_app_id', $this->fb_app_id);




				View::set_global('footer_text', Model_Variable::value_by_name('footer_text', true));
				View::set_global('menu_text', Model_Variable::value_by_name('menu_text', true));
				View::set_global('email', Model_Variable::value_by_name('email', true));
				View::set_global('active_category_id', null);
				View::set_global('active_tag_title', null);
				View::set_global('show_categories', true);
				View::set_global('is_archive', false);
			}
		}
	}


	/**
	 * forces the controller to handler the current request as ajax
	 *
	 */
	public function force_ajax_response()
	{
		$this->is_ajax = TRUE;
		$this->auto_render = FALSE;
		$this->result = new stdClass;
	}


	/**
	 * Post-process the controller execution
	 * @see AVO_Controller::after()
	 */
	public function after()
	{
		if ($this->is_ajax)
		{
			$this->response
				->json()
				->no_cache()
				->body(json_encode($this->result));
		}
		parent::after();
	}


	/**
	 * appends a part to a title
	 *
	 * @param string $value
	 */
	public function append_title($value)
	{
		if ( ! $this->template) return;
		if ( ! is_array($this->template->title))
		{
			$this->template->title = array($this->template->title);
		}
		$this->template->title[] = $value;
	}
}
