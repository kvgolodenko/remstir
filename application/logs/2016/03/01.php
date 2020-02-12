<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-01 10:33:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Categories' not found ~ APPPATH/classes/Controller/Public.php [ 35 ] in file:line
2016-03-01 10:33:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-01 10:33:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH/views/public/index.php [ 16 ] in /Users/kirill/workspace/apollon/web/application/views/public/index.php:16
2016-03-01 10:33:11 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/index.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 16, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(161): Kohana_View->__toString()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(128): AVO_Controller->after()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/apollon/web/application/views/public/index.php:16
2016-03-01 10:35:52 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'NORMAL_NAME' ~ APPPATH/views/public/index.php [ 16 ] in file:line
2016-03-01 10:35:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-01 10:36:13 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'ORIGYNAL_NAME' ~ APPPATH/views/public/index.php [ 16 ] in file:line
2016-03-01 10:36:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-01 14:23:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: form ~ APPPATH/classes/Controller/Admin/Contacts.php [ 38 ] in /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Contacts.php:38
2016-03-01 14:23:18 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Contacts.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 38, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Contacts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Contacts))
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Contacts.php:38
2016-03-01 14:23:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: form ~ APPPATH/classes/Controller/Admin/Contacts.php [ 38 ] in /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Contacts.php:38
2016-03-01 14:23:38 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Contacts.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 38, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Contacts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Contacts))
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Contacts.php:38
2016-03-01 14:27:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: address ~ APPPATH/views/public/_header.php [ 5 ] in /Users/kirill/workspace/apollon/web/application/views/public/_header.php:5
2016-03-01 14:27:03 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/_header.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 5, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(160): Kohana_View->__toString()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(128): AVO_Controller->after()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/apollon/web/application/views/public/_header.php:5
2016-03-01 14:48:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/public/_header.php [ 5 ] in file:line
2016-03-01 14:48:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line