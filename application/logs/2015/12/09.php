<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-12-09 15:27:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: detect ~ APPPATH/classes/Controller/Abstract/Public.php [ 26 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php:26
2015-12-09 15:27:13 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 26, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php:26
2015-12-09 16:02:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'assets/startpage_image/1-97646f812b37626fa387eeb264e8f2c8-normal/7.jpeg' not found ~ APPPATH/views/mobile/blog.php [ 7 ] in file:line
2015-12-09 16:02:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-09 16:03:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'assets/startpage_image/1-97646f812b37626fa387eeb264e8f2c8-normal/7.jpeg' not found ~ APPPATH/views/mobile/blog.php [ 7 ] in file:line
2015-12-09 16:03:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line