<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-20 08:15:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Startpage_Application::add_application() ~ APPPATH/classes/Controller/Public.php [ 933 ] in file:line
2015-11-20 08:15:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 08:15:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/classes/Controller/Public.php [ 933 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 08:15:22 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(933): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 933, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 08:15:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/classes/Controller/Public.php [ 933 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 08:15:42 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(933): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 933, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 08:15:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/classes/Controller/Public.php [ 933 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 08:15:59 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(933): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 933, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 08:34:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php:137
2015-11-20 08:34:48 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(137): Kohana_View->set_filename('index')
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(30): Kohana_View->__construct('index', NULL)
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(933): Kohana_View::factory('index')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php:137
2015-11-20 08:35:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view /index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php:137
2015-11-20 08:35:00 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/index')
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(30): Kohana_View->__construct('/index', NULL)
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(933): Kohana_View::factory('/index')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php:137
2015-11-20 08:35:08 --- EMERGENCY: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php:137
2015-11-20 08:35:08 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(137): Kohana_View->set_filename('')
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(30): Kohana_View->__construct('', NULL)
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(933): Kohana_View::factory('')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php:137
2015-11-20 08:39:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php:137
2015-11-20 08:39:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(137): Kohana_View->set_filename('index')
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(30): Kohana_View->__construct('index', NULL)
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(935): Kohana_View::factory('index')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php:137
2015-11-20 08:40:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/public/index.php [ 11 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/index.php:11
2015-11-20 08:40:11 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 11, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(118): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/index.php:11
2015-11-20 09:38:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/Public.php [ 933 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 09:38:22 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(933): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kirill/w...', 933, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 09:41:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/Public.php [ 933 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 09:41:43 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(933): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kirill/w...', 933, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 09:41:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/Public.php [ 933 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 09:41:52 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(933): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kirill/w...', 933, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 09:46:07 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be of the type array, object given, called in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php on line 935 and defined ~ SYSPATH/classes/Kohana/Upload.php [ 52 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:52
2015-11-20 09:46:07 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php(52): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/kirill/w...', 52, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(935): Kohana_Upload::save(Object(Validation), NULL, '/Users/kirill/w...', 511)
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:52
2015-11-20 09:46:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/Public.php [ 935 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:935
2015-11-20 09:46:35 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(935): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kirill/w...', 935, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:935
2015-11-20 09:47:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/Public.php [ 933 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 09:47:45 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(933): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kirill/w...', 933, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 09:48:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/Public.php [ 935 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:935
2015-11-20 09:48:25 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(935): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kirill/w...', 935, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:935
2015-11-20 10:13:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/Public.php [ 933 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 10:13:06 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(933): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kirill/w...', 933, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:933
2015-11-20 10:52:35 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::image() must be of the type array, null given ~ SYSPATH/classes/Kohana/Upload.php [ 209 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:209
2015-11-20 10:52:35 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php(209): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/kirill/w...', 209, Array)
#1 [internal function]: Kohana_Upload::image(NULL)
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(944): Kohana_Validation->check()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#10 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:209
2015-11-20 10:53:34 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::image() must be of the type array, null given ~ SYSPATH/classes/Kohana/Upload.php [ 209 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:209
2015-11-20 10:53:34 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php(209): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/kirill/w...', 209, Array)
#1 [internal function]: Kohana_Upload::image(NULL)
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(944): Kohana_Validation->check()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#10 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:209
2015-11-20 10:54:06 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::image() must be of the type array, null given ~ SYSPATH/classes/Kohana/Upload.php [ 209 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:209
2015-11-20 10:54:06 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php(209): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/kirill/w...', 209, Array)
#1 [internal function]: Kohana_Upload::image(NULL)
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(944): Kohana_Validation->check()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#10 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:209
2015-11-20 10:54:10 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::image() must be of the type array, null given ~ SYSPATH/classes/Kohana/Upload.php [ 209 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:209
2015-11-20 10:54:10 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php(209): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/kirill/w...', 209, Array)
#1 [internal function]: Kohana_Upload::image(NULL)
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(944): Kohana_Validation->check()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#10 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:209
2015-11-20 10:55:01 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::image() must be of the type array, null given ~ SYSPATH/classes/Kohana/Upload.php [ 209 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:209
2015-11-20 10:55:01 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php(209): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/kirill/w...', 209, Array)
#1 [internal function]: Kohana_Upload::image(NULL)
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(944): Kohana_Validation->check()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#10 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:209
2015-11-20 10:55:09 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::image() must be of the type array, null given ~ SYSPATH/classes/Kohana/Upload.php [ 209 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:209
2015-11-20 10:55:09 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php(209): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/kirill/w...', 209, Array)
#1 [internal function]: Kohana_Upload::image(NULL)
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(944): Kohana_Validation->check()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#10 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:209
2015-11-20 10:55:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH/classes/Controller/Public.php [ 937 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:937
2015-11-20 10:55:36 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(937): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 937, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:937
2015-11-20 10:55:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH/classes/Controller/Public.php [ 937 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:937
2015-11-20 10:55:48 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(937): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 937, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:937
2015-11-20 11:06:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: app ~ APPPATH/classes/Controller/Public.php [ 935 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:935
2015-11-20 11:06:16 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(935): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 935, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:935
2015-11-20 11:07:06 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/assets/apllications/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:07:06 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(936): Kohana_Upload::save(Array, 'asdasdasdasdaas...', '/Users/kirill/w...', 436)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:09:30 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/assets/apllications/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:09:30 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(936): Kohana_Upload::save(Array, 'asdasdasdasdaas...', '/Users/kirill/w...', 436)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:09:32 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/assets/apllications/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:09:32 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(936): Kohana_Upload::save(Array, 'asdasdasdasdaas...', '/Users/kirill/w...', 436)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:09:39 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/assets/apllications/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:09:39 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(936): Kohana_Upload::save(Array, 'asdasdasdasdaas...', '/Users/kirill/w...', 436)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:11:19 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/assets/apllications/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:11:19 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(936): Kohana_Upload::save(Array, 'asdasdasdasdaas...', '/Users/kirill/w...', 436)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:11:47 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/assets/apllication/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:11:47 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(936): Kohana_Upload::save(Array, 'asdasdasdasdaas...', '/Users/kirill/w...', 436)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:11:54 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/assets/apllication/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:11:54 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(936): Kohana_Upload::save(Array, 'asdasdasdasdaas...', '/Users/kirill/w...', 436)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:12:02 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/assets/apllication/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:12:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(936): Kohana_Upload::save(Array, 'asdasdasdasdaas...', '/Users/kirill/w...', 436)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:12:47 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/assets/application/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:12:47 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(936): Kohana_Upload::save(Array, 'asdasdasdasdaas...', '/Users/kirill/w...', 436)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:12:54 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/assets/application/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 11:12:54 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(936): Kohana_Upload::save(Array, 'asdasdasdasdaas...', '/Users/kirill/w...', 436)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:936
2015-11-20 13:11:59 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Upload::type() must be of the type array, string given, called in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php on line 937 and defined ~ SYSPATH/classes/Kohana/Upload.php [ 146 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:146
2015-11-20 13:11:59 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php(146): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/kirill/w...', 146, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(937): Kohana_Upload::type(Array, 'pdf')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Upload.php:146
2015-11-20 13:12:24 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Public.php [ 932 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:932
2015-11-20 13:12:24 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(932): Kohana_Core::error_handler(8, 'Array to string...', '/Users/kirill/w...', 932, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:932
2015-11-20 13:24:03 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'SUBMENU_APPLICATIONS' ~ APPPATH/classes/Controller/Admin/Startpage.php [ 25 ] in file:line
2015-11-20 13:24:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 13:24:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Startpage_Applications_Grid' not found ~ APPPATH/classes/Controller/Admin/Startpage.php [ 57 ] in file:line
2015-11-20 13:24:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 13:30:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Startpage_Application_Form' not found ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 44 ] in file:line
2015-11-20 13:30:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 13:31:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Startpage_Application_Form' not found ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 44 ] in file:line
2015-11-20 13:31:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 13:31:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Startpage_Application_Form' not found ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 44 ] in file:line
2015-11-20 13:31:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 13:31:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Startpage_Application_Form' not found ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 44 ] in file:line
2015-11-20 13:31:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 13:31:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Startpage_Application_Form' not found ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 44 ] in file:line
2015-11-20 13:31:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 13:40:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: grid ~ APPPATH/views/admin/startpage/applications.php [ 1 ] in /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php:1
2015-11-20 13:40:11 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 1, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php:1
2015-11-20 13:40:18 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/avo/classes/AVO/Data/Grid.php [ 327 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php:327
2015-11-20 13:40:18 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(327): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/kirill/w...', 327, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php(1): AVO_Data_Grid->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php:327
2015-11-20 13:40:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: grid ~ APPPATH/views/admin/startpage/applications.php [ 1 ] in /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php:1
2015-11-20 13:40:37 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 1, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php:1
2015-11-20 13:41:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: grid ~ APPPATH/views/admin/startpage/applications.php [ 2 ] in /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php:2
2015-11-20 13:41:11 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 2, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php:2
2015-11-20 13:41:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: grid ~ APPPATH/views/admin/startpage/applications.php [ 2 ] in /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php:2
2015-11-20 13:41:11 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 2, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php:2
2015-11-20 13:41:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: grid ~ APPPATH/views/admin/startpage/applications.php [ 2 ] in /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php:2
2015-11-20 13:41:13 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 2, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php:2
2015-11-20 13:41:54 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/avo/classes/AVO/Data/Grid.php [ 327 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php:327
2015-11-20 13:41:54 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(327): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/kirill/w...', 327, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php(2): AVO_Data_Grid->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php:327
2015-11-20 13:42:28 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/avo/classes/AVO/Data/Grid.php [ 327 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php:327
2015-11-20 13:42:28 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(327): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/kirill/w...', 327, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php(2): AVO_Data_Grid->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php:327
2015-11-20 13:46:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 140 ] in file:line
2015-11-20 13:46:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 13:47:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 142 ] in file:line
2015-11-20 13:47:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 13:47:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 142 ] in file:line
2015-11-20 13:47:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 13:47:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 142 ] in file:line
2015-11-20 13:47:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 13:48:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 140 ] in file:line
2015-11-20 13:48:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 13:48:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Startpage_Application::url() ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 141 ] in file:line
2015-11-20 13:48:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:09:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: path ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Startpage/Applications/Grid.php:138
2015-11-20 14:09:26 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Startpage/Applications/Grid.php(138): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 138, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(358): Backend_Startpage_Applications_Grid->on_calc()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#3 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php(2): AVO_Data_Grid->render_object('direct')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#12 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#19 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Startpage/Applications/Grid.php:138
2015-11-20 14:22:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:22:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:23:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:23:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:23:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:23:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:24:28 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:24:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:25:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:25:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:26:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:26:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:26:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:26:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:26:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:26:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:26:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:26:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:26:44 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:26:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:26:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:26:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:30:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:30:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:30:39 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:30:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:30:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title_field_name ~ APPPATH/classes/Model/Startpage/Application.php [ 44 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php:44
2015-11-20 14:30:57 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 44, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Startpage/Applications/Grid.php(138): Model_Startpage_Application->url(Object(AVO_Field))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(358): Backend_Startpage_Applications_Grid->on_calc()
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php(2): AVO_Data_Grid->render_object('direct')
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php:44
2015-11-20 14:31:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/classes/Model/Startpage/Application.php [ 44 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php:44
2015-11-20 14:31:23 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 44, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Startpage/Applications/Grid.php(138): Model_Startpage_Application->url(Object(AVO_Field))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(358): Backend_Startpage_Applications_Grid->on_calc()
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php(2): AVO_Data_Grid->render_object('direct')
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php:44
2015-11-20 14:31:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title_field_name ~ APPPATH/classes/Model/Startpage/Application.php [ 44 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php:44
2015-11-20 14:31:48 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 44, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Startpage/Applications/Grid.php(138): Model_Startpage_Application->url(Object(AVO_Field))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(358): Backend_Startpage_Applications_Grid->on_calc()
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php(2): AVO_Data_Grid->render_object('direct')
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php:44
2015-11-20 14:32:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ext ~ APPPATH/classes/Model/Startpage/Application.php [ 44 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php:44
2015-11-20 14:32:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 44, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Startpage/Applications/Grid.php(138): Model_Startpage_Application->url(Object(AVO_Field))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(358): Backend_Startpage_Applications_Grid->on_calc()
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php(2): AVO_Data_Grid->render_object('direct')
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php:44
2015-11-20 14:39:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:39:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:39:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:39:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:39:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:39:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:40:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:40:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:40:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:40:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:40:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:40:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:41:10 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 137 ] in file:line
2015-11-20 14:41:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:41:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 137 ] in file:line
2015-11-20 14:41:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:41:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 137 ] in file:line
2015-11-20 14:41:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:42:13 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 137 ] in file:line
2015-11-20 14:42:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:42:21 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 137 ] in file:line
2015-11-20 14:42:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:42:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 137 ] in file:line
2015-11-20 14:42:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:42:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 137 ] in file:line
2015-11-20 14:42:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:43:49 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:43:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:44:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 140 ] in file:line
2015-11-20 14:44:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:44:44 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:44:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:45:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:45:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:47:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 138 ] in file:line
2015-11-20 14:47:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 14:55:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/classes/Controller/Public.php [ 944 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:944
2015-11-20 14:55:21 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(944): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 944, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:944
2015-11-20 15:11:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$client_email ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:11:28 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:11:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$client_email ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:11:36 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:11:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$client_email ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:11:43 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:12:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$client_email ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:12:21 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:12:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$client_email ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:12:23 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:12:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$client_email ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:12:32 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:12:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$client_email ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:12:33 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:12:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$client_email ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:12:41 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:15:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$appform_client_mail_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:15:32 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:15:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$appform_client_mail_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:15:54 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:16:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$appform_client_mail_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:16:30 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:16:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$appform_client_mail_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:16:33 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:17:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$appform_client_mail_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:17:18 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:17:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$appform_client_mail_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:17:21 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:17:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$appform_client_mail_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:17:35 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:18:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$appform_user_mail_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:18:00 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/appform.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-20 15:31:53 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'SUBMENU_EMAILS' ~ APPPATH/classes/Controller/Admin/Settings.php [ 18 ] in file:line
2015-11-20 15:31:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 15:32:24 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'SUBMENU_EMAILS' ~ APPPATH/classes/Controller/Admin/Settings.php [ 18 ] in file:line
2015-11-20 15:32:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 16:36:00 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Public.php [ 960 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:960
2015-11-20 16:36:00 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(960): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/kirill/w...', 960, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:960
2015-11-20 16:36:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Public.php [ 957 ] in file:line
2015-11-20 16:36:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 16:37:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Public.php [ 984 ] in file:line
2015-11-20 16:37:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 16:41:10 --- EMERGENCY: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/swiftmailer/Swift-4.1.1/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 308 ] in /Users/kirill/workspace/value_marketing/web/modules/swiftmailer/Swift-4.1.1/lib/classes/Swift/Mime/Headers/MailboxHeader.php:238
2015-11-20 16:41:10 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/swiftmailer/Swift-4.1.1/lib/classes/Swift/Mime/Headers/MailboxHeader.php(238): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 /Users/kirill/workspace/value_marketing/web/modules/swiftmailer/Swift-4.1.1/lib/classes/Swift/Mime/Headers/MailboxHeader.php(96): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Users/kirill/workspace/value_marketing/web/modules/swiftmailer/Swift-4.1.1/lib/classes/Swift/Mime/Headers/MailboxHeader.php(60): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Users/kirill/workspace/value_marketing/web/modules/swiftmailer/Swift-4.1.1/lib/classes/Swift/Mime/SimpleMimeEntity.php(573): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Users/kirill/workspace/value_marketing/web/modules/swiftmailer/Swift-4.1.1/lib/classes/Swift/Mime/SimpleMessage.php(195): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /Users/kirill/workspace/value_marketing/web/modules/swiftmailer/classes/email.php(7): Swift_Mime_SimpleMessage->setFrom('')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(954): email::send(NULL, '', 'Thank you for y...', 'Hei! \nDette er ...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#13 {main} in /Users/kirill/workspace/value_marketing/web/modules/swiftmailer/Swift-4.1.1/lib/classes/Swift/Mime/Headers/MailboxHeader.php:238
2015-11-20 16:53:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Public.php [ 955 ] in file:line
2015-11-20 16:53:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-20 17:07:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The to_adress property does not exist in the Model_Message_Template class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-20 17:07:33 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('to_adress')
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(967): Kohana_ORM->__get('to_adress')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603