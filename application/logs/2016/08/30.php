<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-30 10:04:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g-recaptcha ~ APPPATH/classes/Controller/Public.php [ 108 ] in /var/www/apollon/data/www/application/classes/Controller/Public.php:108
2016-08-30 10:04:00 --- DEBUG: #0 /var/www/apollon/data/www/application/classes/Controller/Public.php(108): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/apollo...', 108, Array)
#1 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/apollon/data/www/apollon.sumy.ua/index.php(123): Kohana_Request->execute()
#7 {main} in /var/www/apollon/data/www/application/classes/Controller/Public.php:108
2016-08-30 10:04:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g-recaptcha ~ APPPATH/classes/Controller/Public.php [ 108 ] in /var/www/apollon/data/www/application/classes/Controller/Public.php:108
2016-08-30 10:04:08 --- DEBUG: #0 /var/www/apollon/data/www/application/classes/Controller/Public.php(108): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/apollo...', 108, Array)
#1 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/apollon/data/www/apollon.sumy.ua/index.php(123): Kohana_Request->execute()
#7 {main} in /var/www/apollon/data/www/application/classes/Controller/Public.php:108
2016-08-30 10:08:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g-recaptcha ~ APPPATH/classes/Controller/Public.php [ 108 ] in /var/www/apollon/data/www/application/classes/Controller/Public.php:108
2016-08-30 10:08:27 --- DEBUG: #0 /var/www/apollon/data/www/application/classes/Controller/Public.php(108): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/apollo...', 108, Array)
#1 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/apollon/data/www/apollon.sumy.ua/index.php(123): Kohana_Request->execute()
#7 {main} in /var/www/apollon/data/www/application/classes/Controller/Public.php:108
2016-08-30 12:30:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'ReCaptcha' not found ~ APPPATH/classes/Controller/Public.php [ 113 ] in file:line
2016-08-30 12:30:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line