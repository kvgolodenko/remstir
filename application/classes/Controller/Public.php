<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Public extends Controller_Abstract_Public
{
	const SITE_NAME = 'Apollon fitnes club';
	const ITEMS_PER_PAGE = 6;
	const BLOGS_PER_PAGE = 6;
	const EXT  ='.pdf';


	public function before()
	{
		parent::before();
		View::set_global('site_name', self::SITE_NAME);
		View::set_global('menuitems', Model_Menuitem::factory()->find_all()->as_array());
		View::set_global('contacts', Model_Contact::factory()->order_by('ord','ASC')->find_all());
		View::set_global('contact_insta_url', Model_Variable::value_by_name('contact_insta_url',true));
		View::set_global('contact_vk_url', Model_Variable::value_by_name('contact_vk_url',true));
		View::set_global('startpage_image',Model_Startpage_Image::factory()->cached()->find()->url(Model_Startpage_Image::STANDARD_NAME));
		View::set_global('address', Model_Variable::value_by_name('contact_address',true));
		View::set_global('phone', Model_Variable::value_by_name('contact_phone',true));
		View::set_global('email', Model_Variable::value_by_name('contact_email',true));
		View::set_global('startpage_header', Model_Variable::value_by_name('startpage_header',true));
		View::set_global('startpage_text', Model_Variable::value_by_name('startpage_text',true));
		View::set_global('startpage_service_header', Model_Variable::value_by_name('startpage_service_header',true));
		View::set_global('startpage_service_text', Model_Variable::value_by_name('startpage_service_text',true));
		View::set_global('footer_text', Model_Variable::value_by_name('footer_text',true));
		View::set_global('banner_red_text', Model_Variable::value_by_name('banner_red_text',true));
		View::set_global('banner_text', Model_Variable::value_by_name('banner_text',true));
		View::set_global('banner_link', Model_Variable::value_by_name('banner_link',true));
        View::set_global('isUser', Session::instance()->get('user'));

    }


// HOME
	public function action_index()
	{
		$this->set_view($this->module.'/index');

		$this->template->title = self::SITE_NAME;
		$this->template->seo_description = Model_Variable::value_by_name('global_description', true);
		$this->template->seo_keywords = Model_Variable::value_by_name('global_keywords', true);

		$this->view->categories = Model_Category::factory()->cached()->find_all()->as_array();
		$this->view->menuitems = Model_Menuitem::factory()->cached()->find_all()->as_array();
		$this->view->points = Model_Startpage::factory()->cached()->find_all()->as_array();
		$this->view->startpage_items = Model_Startpage_Item::factory()->cached()->find_all()->as_array();
		$this->view->startpage_images = Model_Category::factory()->cached()->find_all()->as_array();

	}
	public function action_item (){
		$this->set_view($this->module.'/_item');
		$url_title = $this->request->param('url_title');

		$this->view->s = Model_Startpage_Item_Image::factory()
		->where('url_title', '=', $url_title)
		->order_by('id','DESC')
		->cached()
		->find();
	}

	public function action_news(){
		$this->set_view($this->module.'/news');
		$page = max(0, (int) $this->request->query('page'));

		$blog_articles = Model_News_Article::factory()
			->order_by('frontend_date', 'DESC')
			->limit(self::BLOGS_PER_PAGE +1)
			->offset($page * self::BLOGS_PER_PAGE)
			->cached()
			->find_all();

		$this->view->teasers_amount = Model_Article::factory()
		->cached()
		->count_all();

		$this->view->blog_articles = $blog_articles;
		$this->view->page = $page;

	}

	public function action_category(){
		$this->set_view($this->module.'/_category');
		$url_title = $this->request->param('url_title');

		$this->view->article = Model_Category::factory()
		->where('url_title', '=', $url_title)
		->order_by('id','DESC')
		->cached()
		->find();

	}
	public function action_about(){
		$this->set_view($this->module.'/about');
		$this->view->about_header = Model_Variable::value_by_name('about_header',true);
		$this->view->about_text = Model_Variable::value_by_name('about_text',true);

	}
	public static function find_by_id($id) {
		$template = new self();
		$template->where('str_id', '=', $id)->find();
		if ($template->loaded()) return $template;
		throw new Kohana_Exception('Message template :name is not found', array(':name' => $id));
	}

	public function action_subscribe(){

		if (!$this->is_ajax) {

			$this->set_view($this->module.'/_subscribe');
			// ваш секретный ключ
			$secret = "6Le19AcUAAAAAJNmBcXJq1q29IIyDWbnZoH46_3E";
			// пустой ответ
			$response = null;
			// проверка секретного ключа
			$reCaptcha = new ReCaptcha($secret);
			$name = Arr::get($_POST,'name');
			$phone = Arr::get($_POST,'phone');

			if ($_POST["g-recaptcha-response"]) {
				$response = $reCaptcha->verifyResponse(
						$_SERVER["REMOTE_ADDR"],
						$_POST["g-recaptcha-response"]
				);
				if ($name && $phone) {
					$form = new Model_User();
					$check = $form->check_user($name,$phone);

					if ($check) {
						$form->add_user($name,$phone);

						$template = Model_Variable::value_by_name('email_template',true);
						$to = Model_Variable::value_by_name('subscribe_email',true);
						$from = Model_Variable::value_by_name('from_email',true);
						$subject = Model_Variable::value_by_name('subject',true);
						$message = str_replace(
									array('<%name%>', '<%phone%>'),
									array($name, $phone),
									$template);
						try {
							@mail($to, $subject, $message);
						} catch (Exception $e) {
							echo $e->getMessage();
						}

						$this->view->result = "Вы оставили заявку на бесплатную пробную тренировку";
					}else{
						$this->view->result = "Вы уже записаны на бесплатную пробную тренировку";
					}
				} else {
					$this->view->result = "Не все поля заполнены";
				}
			}else {
					$this->view->result = "Очевидно, вы робот! Или забыли отметить 'Я не робот'... ";
				}


		}
	}


	public function action_trainers(){
		$this->set_view($this->module.'/_trainers');

		$this->view->trainer_teasers = Model_Trainer::factory()
			->cached()
			->order_by('ORD','ASC')
			->find_all()
			->as_array();
	}
	public function action_gallery(){
		$this->set_view($this->module.'/_gallery');

		$this->view->albums = Model_Gallery_Album::factory()
			->cached()
			->order_by('ORD','ASC')
			->find_all()
			->as_array();

	}
    public function action_login(){
        $this->set_view($this->module.'/login');
    }

    public function action_cabinet()
    {
        $isUser = Session::instance()->get('user');
        if ($isUser) {
            $this->set_view($this->module . '/cabinet');
        } else {
            $this->request->avo_redirect($this->module . '/errors/404');
        }
    }

    public function action_signin()
    {
	    if ($this->is_ajax) {
	        $phone = $this->request->post('phone');
	        $password = $this->request->post('password');

	        $user = Model_User::factory()
                ->where('phone', '=', $phone)
                ->find();
            $is_password_correct = password_verify($password, $user->password);

            if ($is_password_correct) {
                $this->result->status = 0;
                Session::instance()->set('user',$user->phone);
            }
        }
    }

    public function action_signout()
    {
        if ($this->is_ajax) {
            Session::instance()->destroy();
        }
    }

    public function action_register(){
	    if ($this->is_ajax) {
            $phone = $this->request->post('phone');
            $password = $this->request->post('password');
            $password_repeat = $this->request->post('repeat-password');
            if ($password !== $password_repeat) {
                $this->result->status = 1;
                return;
            }

            $is_user_registered = Model_User::factory()
                ->where('phone','=', $phone)
                ->or_where('phone', '=', '+38'.$phone)
                ->find()->id;

            if ($is_user_registered) {
                $this->result->status = 2;
                return;
            }
            $user = new Model_User();
            $user->phone = $phone;
            $user->password = password_hash($password,PASSWORD_DEFAULT);
            $user->save();

            $this->result->status = 0;

        }
    }

	public function action_tabels(){
		$this->set_view($this->module.'/_tabels');

		$this->view->tabels = Model_Tabel::factory()
			->cached()
			->order_by('ord','DESC')
			->find_all()
			->as_array();
	}
	public function action_price(){
		$this->set_view($this->module.'/_price');

		$this->view->prices = Model_Price::factory()
		->cached()
        ->order_by('ord')
		->find_all()
		->as_array();
	}
	public function action_sportbar(){
		$this->set_view($this->module.'/_sportbar');

		$this->view->nutritions = Model_Nutrition::factory()
		->cached()
		->find_all()
		->as_array();

		$this->view->nutrition_text = Model_Variable::value_by_name('nutrition_text',true);
	}

// ARTICLE


	public function action_cases()
	{
		$this->set_view($this->module.'/cases');

		$case_teasers = array();
		$case_teasers = DB::query(
				Database::SELECT,
				'SELECT * FROM cases ORDER BY RAND() LIMIT 6'
				)
				->as_object('Model_Case')
				//->cached()
		->execute();

		$this->view->case_image = Model_Case_Image::factory()->cached()->find()->url(Model_Case_Image::NORMAL_NAME);
		$this->view->mobile_case_image = Model_Case_Image::factory()->cached()->find()->url(Model_Case_Image::FORM_PREVIEW_NAME);
		$this->view->case_teasers = $case_teasers;
	}

	public function action_news_article()
 		{
 			$this->set_view($this->module.'/_news_article');

 			$url_title = $this->request->param('url_title');

 			$news_article = Model_News_Article::factory() 		/* @var $blog_article Model_Blog_Article */
	 			->where('url_title', '=', $url_title)
	 			->cached()
	 			->find();

 			$images = Model_News_Image::factory()
	 			->where('blog_article_id','=',$news_article->id)
	 			->cached()
	 			->find_all();

	 		if($news_article->loaded()){
	 			$this->view->news_article = $news_article;
	 			$this->view->images = $images;
	 		}
	 		else {
	 			throw new HTTP_Exception_404;
	 		}
 		}
	public function action_album()
 		{
 			$this->set_view($this->module.'/_album');

 			$url_title = $this->request->param('url_title');
 			$query = Model_Gallery_Album::factory()
 				->where('url_title', '=', $url_title)
	 			->cached()
	 			->find();
 			$id = $query->id;

 			$this->view->pictures = Model_Gallery_Image::factory() 		/* @var $blog_article Model_Blog_Article */
	 			->where('album_id', '=', $id)
	 			->cached()
	 			->find_all();

 		}

 		public function action_contact(){

 			$this->set_view($this->module.'/contact');
 			$this->view->contact_page_text = Model_Variable::value_by_name('contact_page_text', true);

 		}

		public function action_http404()
			{
				$this->set_view($this->module.'/errors/404');
			}
		public function action_sendSms()
		{
			try {
					$phone = $this->request->post('phone');
			    // $client = new SoapClient('http://turbosms.in.ua/api/wsdl.html');
					//
			    // $auth = [
			    //     'login' => 'apollon_sumy',
			    //     'password' => 'pjpekzREDFKF'
			    // ];
					//
			    // $result = $client->Auth($auth);
					//
					// $result = $client->GetCreditBalance();
    			// echo $result->GetCreditBalanceResult . PHP_EOL;
					//
			    // $text = iconv('windows-1251', 'utf-8', 'Заявка на ремонт по номеру: '$phone);
					//
 			    // $sms = [
			    //     'sender' => 'ApollonSumy',
			    //     'destination' => '+380503075631',
			    //     'text' => $text
			    // ];
			    // $result = $client->SendSMS($sms);
					// echo $result->SendSMSResult->ResultArray[0] . PHP_EOL;
					echo json_encode("OK");
			} catch(Exception $e) {
			    echo 'Ошибка: ' . $e->getMessage() . PHP_EOL;
			}
			echo 'SMS sent';
		}
}
