<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-09-01 11:29:20 --- INFO: Admin ki has been logged in from IP 127.0.0.1 in /Users/kirill/workspace/apollon/modules/avo/classes/AVO/Data/Form.php:246
2019-09-01 11:29:22 --- EMERGENCY: ErrorException [ 8192 ]: Function create_function() is deprecated ~ MODPATH/avo/classes/AVO/Data/Source/DB.php [ 45 ] in /Users/kirill/workspace/apollon/modules/avo/classes/AVO/Data/Source/DB.php:45
2019-09-01 11:29:22 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/avo/classes/AVO/Data/Source/DB.php(45): Kohana_Core::error_handler(8192, 'Function create...', '/Users/kirill/w...', 45, Array)
#1 /Users/kirill/workspace/apollon/application/classes/Backend/Settings/Admins/Datasource.php(7): AVO_Data_Source_DB->__construct(Array)
#2 /Users/kirill/workspace/apollon/application/classes/Backend/Settings/Admins/Grid.php(9): Backend_Settings_Admins_Datasource->__construct()
#3 /Users/kirill/workspace/apollon/application/classes/Controller/Admin/Settings.php(24): Backend_Settings_Admins_Grid->__construct()
#4 /Users/kirill/workspace/apollon/system/classes/Kohana/Controller.php(84): Controller_Admin_Settings->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#7 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kirill/workspace/apollon/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(129): Kohana_Request->execute()
#10 {main} in /Users/kirill/workspace/apollon/modules/avo/classes/AVO/Data/Source/DB.php:45
2019-09-01 12:20:36 --- EMERGENCY: ErrorException [ 1 ]: Method View::__toString() must not throw an exception, caught ParseError: syntax error, unexpected end of file ~ APPPATH/views/public/layout.php [ 0 ] in file:line
2019-09-01 12:20:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-09-01 12:26:33 --- EMERGENCY: ErrorException [ 1 ]: Method View::__toString() must not throw an exception, caught ParseError: syntax error, unexpected end of file ~ APPPATH/views/public/layout.php [ 0 ] in file:line
2019-09-01 12:26:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-09-01 12:41:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: startpage_images ~ APPPATH/views/public/index.php [ 10 ] in /Users/kirill/workspace/apollon/application/views/public/index.php:10
2019-09-01 12:41:04 --- DEBUG: #0 /Users/kirill/workspace/apollon/application/views/public/index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 10, Array)
#1 /Users/kirill/workspace/apollon/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/apollon/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/apollon/application/views/public/layout.php(198): Kohana_View->__toString()
#5 /Users/kirill/workspace/apollon/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/apollon/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/apollon/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/apollon/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/apollon/application/classes/Controller/Abstract/Public.php(133): AVO_Controller->after()
#10 /Users/kirill/workspace/apollon/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/apollon/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/apollon/application/views/public/index.php:10
2019-09-01 12:42:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: startpage_images ~ APPPATH/views/public/index.php [ 10 ] in /Users/kirill/workspace/apollon/application/views/public/index.php:10
2019-09-01 12:42:32 --- DEBUG: #0 /Users/kirill/workspace/apollon/application/views/public/index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 10, Array)
#1 /Users/kirill/workspace/apollon/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/apollon/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/apollon/application/views/public/layout.php(198): Kohana_View->__toString()
#5 /Users/kirill/workspace/apollon/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/apollon/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/apollon/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/apollon/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/apollon/application/classes/Controller/Abstract/Public.php(133): AVO_Controller->after()
#10 /Users/kirill/workspace/apollon/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/apollon/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/apollon/application/views/public/index.php:10
2019-09-01 15:16:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/Controller/Public.php [ 186 ] in /Users/kirill/workspace/apollon/application/classes/Controller/Public.php:186
2019-09-01 15:16:12 --- DEBUG: #0 /Users/kirill/workspace/apollon/application/classes/Controller/Public.php(186): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kirill/w...', 186, Array)
#1 /Users/kirill/workspace/apollon/system/classes/Kohana/Controller.php(84): Controller_Public->action_signin()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/apollon/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/apollon/application/classes/Controller/Public.php:186
2019-09-01 15:19:46 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /Users/kirill/workspace/apollon/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2019-09-01 15:19:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-09-01 15:23:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/Controller/Public.php [ 186 ] in /Users/kirill/workspace/apollon/application/classes/Controller/Public.php:186
2019-09-01 15:23:48 --- DEBUG: #0 /Users/kirill/workspace/apollon/application/classes/Controller/Public.php(186): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kirill/w...', 186, Array)
#1 /Users/kirill/workspace/apollon/system/classes/Kohana/Controller.php(84): Controller_Public->action_signin()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/apollon/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/apollon/application/classes/Controller/Public.php:186
2019-09-01 15:31:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Request::$data ~ APPPATH/classes/Controller/Public.php [ 186 ] in /Users/kirill/workspace/apollon/application/classes/Controller/Public.php:186
2019-09-01 15:31:20 --- DEBUG: #0 /Users/kirill/workspace/apollon/application/classes/Controller/Public.php(186): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 186, Array)
#1 /Users/kirill/workspace/apollon/system/classes/Kohana/Controller.php(84): Controller_Public->action_signin()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/apollon/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/apollon/application/classes/Controller/Public.php:186
2019-09-01 15:56:28 --- EMERGENCY: Kohana_Exception [ 0 ]: Kohana_Response::status unknown status value : 1 ~ SYSPATH/classes/Kohana/Response.php [ 213 ] in /Users/kirill/workspace/apollon/application/classes/Controller/Public.php:197
2019-09-01 15:56:28 --- DEBUG: #0 /Users/kirill/workspace/apollon/application/classes/Controller/Public.php(197): Kohana_Response->status(1)
#1 /Users/kirill/workspace/apollon/system/classes/Kohana/Controller.php(84): Controller_Public->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/apollon/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/apollon/application/classes/Controller/Public.php:197
2019-09-01 17:03:59 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /Users/kirill/workspace/apollon/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2019-09-01 17:03:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-09-01 17:04:46 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /Users/kirill/workspace/apollon/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2019-09-01 17:04:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line