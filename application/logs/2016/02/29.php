<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-29 08:41:53 --- INFO: Admin sh failed to log in using password sh from IP ::1 in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:246
2016-02-29 08:41:56 --- INFO: Admin ki has been logged in from IP ::1 in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:246
2016-02-29 12:32:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: htis ~ APPPATH/classes/Controller/Abstract/Public.php [ 75 ] in /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php:75
2016-02-29 12:32:43 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 75, Array)
#1 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php:75
2016-02-29 15:09:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$about_body_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:299
2016-02-29 15:09:59 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/apollon/web/application/views/admin/about/index.php(1): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_About))
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:299
2016-02-29 15:10:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$about_body_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:299
2016-02-29 15:10:43 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/apollon/web/application/views/admin/about/index.php(1): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_About))
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:299
2016-02-29 15:10:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$about_use_ads ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:299
2016-02-29 15:10:51 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/apollon/web/application/views/admin/about/index.php(1): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_About))
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:299
2016-02-29 15:13:01 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_HTML::chars(), called in /Users/kirill/workspace/apollon/web/application/views/public/about.php on line 2 and defined ~ SYSPATH/classes/Kohana/HTML.php [ 69 ] in /Users/kirill/workspace/apollon/web/system/classes/Kohana/HTML.php:69
2016-02-29 15:13:01 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/system/classes/Kohana/HTML.php(69): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/kirill/w...', 69, Array)
#1 /Users/kirill/workspace/apollon/web/application/views/public/about.php(2): Kohana_HTML::chars()
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(161): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#10 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(128): AVO_Controller->after()
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/apollon/web/system/classes/Kohana/HTML.php:69
2016-02-29 15:41:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-29 15:41:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-29 15:41:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on null ~ MODPATH/avo/classes/AVO/Data/Form.php [ 189 ] in file:line
2016-02-29 15:41:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line