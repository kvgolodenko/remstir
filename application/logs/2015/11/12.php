<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-12 08:43:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH/views/public/blog.php [ 56 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/blog.php:56
2015-11-12 08:43:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/blog.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 56, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(204): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/blog.php:56
2015-11-12 08:45:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: articles_amount ~ APPPATH/views/public/blog.php [ 41 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/blog.php:41
2015-11-12 08:45:57 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/blog.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 41, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(204): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/blog.php:41
2015-11-12 09:48:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: case ~ APPPATH/views/public/contact.php [ 17 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php:17
2015-11-12 09:48:31 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(204): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php:17
2015-11-12 09:48:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: subtitle ~ APPPATH/views/public/contact.php [ 17 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php:17
2015-11-12 09:48:48 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(204): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php:17
2015-11-12 09:48:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/public/contact.php [ 17 ] in file:line
2015-11-12 09:48:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-12 12:53:43 --- INFO: Admin sh has been logged in from IP ::1 in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:246
2015-11-12 15:48:41 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_SETTINGS' ~ APPPATH/classes/Controller/Admin/Settings.php [ 16 ] in file:line
2015-11-12 15:48:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-12 15:48:56 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_SETTINGS' ~ APPPATH/classes/Controller/Admin/Settings.php [ 16 ] in file:line
2015-11-12 15:48:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-12 15:48:59 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_SETTINGS' ~ APPPATH/classes/Controller/Admin/Settings.php [ 16 ] in file:line
2015-11-12 15:48:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-12 15:49:14 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_SETTINGS' ~ APPPATH/classes/Controller/Admin/Settings.php [ 16 ] in file:line
2015-11-12 15:49:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-12 15:52:20 --- INFO: Admin sh has been logged in from IP ::1 in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:246
2015-11-12 15:54:07 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_SETTINGS' ~ APPPATH/classes/Controller/Admin/Settings.php [ 16 ] in file:line
2015-11-12 15:54:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-12 16:01:32 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_Cases' ~ APPPATH/classes/Controller/Admin/Cases.php [ 9 ] in file:line
2015-11-12 16:01:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-12 16:01:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Cases_Grid' not found ~ APPPATH/classes/Controller/Admin/Cases.php [ 14 ] in file:line
2015-11-12 16:01:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-12 16:05:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Cases_Form' not found ~ APPPATH/classes/Backend/Cases/Grid.php [ 57 ] in file:line
2015-11-12 16:05:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-12 16:06:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Categories_Form' not found ~ APPPATH/classes/Backend/Articles/Linked/Categories/Form.php [ 3 ] in file:line
2015-11-12 16:06:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-12 16:06:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Categories_Form' not found ~ APPPATH/classes/Backend/Articles/Linked/Categories/Form.php [ 3 ] in file:line
2015-11-12 16:06:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-12 16:06:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Categories_Form' not found ~ APPPATH/classes/Backend/Articles/Linked/Categories/Form.php [ 3 ] in file:line
2015-11-12 16:06:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line