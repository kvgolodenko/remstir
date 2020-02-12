<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-27 16:45:45 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant error - assumed 'error' ~ DOCROOT/recaptchalib.php [ 124 ] in /var/www/apollon/data/www/apollon.sumy.ua/recaptchalib.php:124
2016-09-27 16:45:45 --- DEBUG: #0 /var/www/apollon/data/www/apollon.sumy.ua/recaptchalib.php(124): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/apollo...', 124, Array)
#1 /var/www/apollon/data/www/application/classes/Controller/Public.php(121): ReCaptcha->verifyResponse('95.47.151.109', '03AHJ_VuuTCWAny...')
#2 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#8 {main} in /var/www/apollon/data/www/apollon.sumy.ua/recaptchalib.php:124
2016-09-27 16:46:18 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant error - assumed 'error' ~ DOCROOT/recaptchalib.php [ 124 ] in /var/www/apollon/data/www/apollon.sumy.ua/recaptchalib.php:124
2016-09-27 16:46:18 --- DEBUG: #0 /var/www/apollon/data/www/apollon.sumy.ua/recaptchalib.php(124): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/apollo...', 124, Array)
#1 /var/www/apollon/data/www/application/classes/Controller/Public.php(121): ReCaptcha->verifyResponse('95.47.151.109', '03AHJ_VusnULfqh...')
#2 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#8 {main} in /var/www/apollon/data/www/apollon.sumy.ua/recaptchalib.php:124