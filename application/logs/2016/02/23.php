<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-23 08:17:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH/views/public/index.php [ 55 ] in /Users/kirill/workspace/apollon/web/application/views/public/index.php:55
2016-02-23 08:17:38 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/index.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 55, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(161): Kohana_View->__toString()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(120): AVO_Controller->after()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/apollon/web/application/views/public/index.php:55
2016-02-23 08:53:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Startpage' not found ~ APPPATH/classes/Controller/Public.php [ 37 ] in file:line
2016-02-23 08:53:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 08:53:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Startpage' not found ~ APPPATH/classes/Controller/Public.php [ 37 ] in file:line
2016-02-23 08:53:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 08:53:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Startpage' not found ~ APPPATH/classes/Controller/Public.php [ 37 ] in file:line
2016-02-23 08:53:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 08:54:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Startpage' not found ~ APPPATH/classes/Controller/Public.php [ 37 ] in file:line
2016-02-23 08:54:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 08:54:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Startpage' not found ~ APPPATH/classes/Controller/Public.php [ 37 ] in file:line
2016-02-23 08:54:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 08:54:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Startpage' not found ~ APPPATH/classes/Controller/Public.php [ 37 ] in file:line
2016-02-23 08:54:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 08:55:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Startpage' not found ~ APPPATH/classes/Controller/Public.php [ 37 ] in file:line
2016-02-23 08:55:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:37:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: form ~ APPPATH/views/admin/startpage/index.php [ 1 ] in /Users/kirill/workspace/apollon/web/application/views/admin/startpage/index.php:1
2016-02-23 09:37:18 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/admin/startpage/index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 1, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/apollon/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#13 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/apollon/web/application/views/admin/startpage/index.php:1
2016-02-23 09:40:14 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 215 ] in file:line
2016-02-23 09:40:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:40:48 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 215 ] in file:line
2016-02-23 09:40:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:40:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 215 ] in file:line
2016-02-23 09:40:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:40:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 215 ] in file:line
2016-02-23 09:40:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:40:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 215 ] in file:line
2016-02-23 09:40:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:41:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 215 ] in file:line
2016-02-23 09:41:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:41:48 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 215 ] in file:line
2016-02-23 09:41:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:42:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 215 ] in file:line
2016-02-23 09:42:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:42:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 215 ] in file:line
2016-02-23 09:42:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:42:56 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 215 ] in file:line
2016-02-23 09:42:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:43:10 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 215 ] in file:line
2016-02-23 09:43:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:43:39 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 215 ] in file:line
2016-02-23 09:43:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:44:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:44:35 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:44:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:44:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:44:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:44:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:44:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:44:55 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:44:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:44:56 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:44:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:44:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:44:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:47:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:47:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:47:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:47:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:47:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:47:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:47:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:47:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:47:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:47:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:48:01 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:48:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:49:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:49:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:49:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:49:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:49:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:49:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:49:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:49:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:51:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:51:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:51:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:51:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:51:43 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:51:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:51:43 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:51:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:55:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:55:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:55:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:55:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:55:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:55:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:55:28 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:55:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:55:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:55:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:56:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:56:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:58:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:58:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:58:28 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:58:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:58:28 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:58:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:58:28 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:58:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:58:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:58:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:58:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:58:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:59:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:59:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:59:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:59:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:59:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:59:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:59:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:59:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 09:59:54 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 09:59:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:00:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:00:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:02:01 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:02:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:02:01 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:02:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:02:49 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:02:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:04:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:04:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:04:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:04:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:28:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:28:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:30:37 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:30:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:30:38 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:30:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:32:59 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:32:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:33:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:33:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:33:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:33:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:33:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:33:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:33:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:33:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:33:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-23 10:33:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:33:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:33:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:33:35 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:33:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:33:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:33:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:34:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:34:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:35:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:35:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:36:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:36:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:36:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:36:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:37:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:37:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:37:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:37:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:38:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:38:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:39:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:39:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:39:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:39:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:40:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:40:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:40:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:40:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:40:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Startpage_Form' not found ~ APPPATH/classes/Controller/Admin/Startpage.php [ 27 ] in file:line
2016-02-23 10:40:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:40:48 --- EMERGENCY: ErrorException [ 2 ]: constant(): Couldn't find constant Model_Startpage_Appform_Image::FORM_PREVIEW_W ~ MODPATH/avo/classes/Backend/Image/Upload/Field/Set.php [ 105 ] in file:line
2016-02-23 10:40:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'constant(): Cou...', '/Users/kirill/w...', 105, Array)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/Backend/Image/Upload/Field/Set.php(105): constant('Model_Startpage...')
#2 /Users/kirill/workspace/apollon/web/application/classes/Backend/Startpage/Form.php(53): Backend_Image_Upload_Field_Set->__construct(Array)
#3 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Startpage.php(27): Backend_Startpage_Form->__construct()
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Startpage->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#10 {main} in file:line
2016-02-23 10:41:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:41:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:42:04 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Variable::get_datasource(), called in /Users/kirill/workspace/apollon/web/application/classes/Backend/Startpage/Form.php on line 17 and defined ~ MODPATH/avo/classes/Model/Variable.php [ 94 ] in /Users/kirill/workspace/apollon/web/modules/avo/classes/Model/Variable.php:94
2016-02-23 10:42:04 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/avo/classes/Model/Variable.php(94): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/kirill/w...', 94, Array)
#1 /Users/kirill/workspace/apollon/web/application/classes/Backend/Startpage/Form.php(17): Model_Variable::get_datasource()
#2 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Startpage.php(27): Backend_Startpage_Form->__construct()
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Startpage->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/apollon/web/modules/avo/classes/Model/Variable.php:94
2016-02-23 10:42:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:42:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:44:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Startpage_Image::get_datasource() ~ APPPATH/classes/Backend/Startpage/Form.php [ 14 ] in file:line
2016-02-23 10:44:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:44:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_title' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-02-23 10:44:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:44:44 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:44:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:48:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:48:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:50:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:50:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:50:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:50:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:50:59 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:50:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:51:13 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:51:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:51:14 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:51:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:54:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Backend/Startpage/Form.php [ 58 ] in file:line
2016-02-23 10:54:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:55:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Backend/Startpage/Form.php [ 63 ] in file:line
2016-02-23 10:55:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:57:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Backend/Startpage/Form.php [ 60 ] in file:line
2016-02-23 10:57:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 10:57:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2016-02-23 10:57:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 11:17:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get_url() on string ~ APPPATH/views/public/index.php [ 60 ] in file:line
2016-02-23 11:17:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 11:19:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get_url() on string ~ APPPATH/views/public/index.php [ 60 ] in file:line
2016-02-23 11:19:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 11:22:45 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'NORMAL_NAME' ~ APPPATH/classes/Controller/Public.php [ 18 ] in file:line
2016-02-23 11:22:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-23 16:20:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$startpage_img_title ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:299
2016-02-23 16:20:27 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/apollon/web/application/views/admin/startpage/items.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/apollon/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:299
2016-02-23 16:20:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$startpage_img_title ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:299
2016-02-23 16:20:41 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/apollon/web/application/views/admin/startpage/items.php(1): AVO_Data_Form->render_object('direct')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/apollon/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:299
2016-02-23 16:34:27 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Model::factory(), called in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php on line 19 and defined ~ SYSPATH/classes/Kohana/Model.php [ 21 ] in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-23 16:34:27 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/kirill/w...', 21, Array)
#1 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(19): Kohana_Model::factory()
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-23 16:35:59 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Model::factory(), called in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php on line 40 and defined ~ SYSPATH/classes/Kohana/Model.php [ 21 ] in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-23 16:35:59 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/kirill/w...', 21, Array)
#1 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(40): Kohana_Model::factory()
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-23 16:36:11 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Model::factory(), called in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php on line 40 and defined ~ SYSPATH/classes/Kohana/Model.php [ 21 ] in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-23 16:36:11 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/kirill/w...', 21, Array)
#1 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(40): Kohana_Model::factory()
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-23 16:36:45 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Model::factory(), called in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php on line 40 and defined ~ SYSPATH/classes/Kohana/Model.php [ 21 ] in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-23 16:36:45 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/kirill/w...', 21, Array)
#1 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(40): Kohana_Model::factory()
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-23 16:37:38 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Model::factory(), called in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php on line 40 and defined ~ SYSPATH/classes/Kohana/Model.php [ 21 ] in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-23 16:37:38 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/kirill/w...', 21, Array)
#1 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(40): Kohana_Model::factory()
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-23 16:40:53 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php on line 41 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1849 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:1849
2016-02-23 16:40:53 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(1849): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/kirill/w...', 1849, Array)
#1 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(41): Kohana_ORM->where('str_id')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:1849
2016-02-23 16:41:43 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Model::factory(), called in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php on line 40 and defined ~ SYSPATH/classes/Kohana/Model.php [ 21 ] in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-23 16:41:43 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/kirill/w...', 21, Array)
#1 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(40): Kohana_Model::factory()
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21