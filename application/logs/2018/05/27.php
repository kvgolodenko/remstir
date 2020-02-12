<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-05-27 05:59:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g-recaptcha-response ~ APPPATH/classes/Controller/Public.php [ 116 ] in /var/www/apollon/data/www/application/classes/Controller/Public.php:116
2018-05-27 05:59:49 --- DEBUG: #0 /var/www/apollon/data/www/application/classes/Controller/Public.php(116): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/apollo...', 116, Array)
#1 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#7 {main} in /var/www/apollon/data/www/application/classes/Controller/Public.php:116