<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-12-01 08:21:46 --- INFO: Admin sh has been logged in from IP ::1 in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:246
2015-12-01 14:43:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$case_teasers_subtitle ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-12-01 14:43:37 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/cases/page.php(3): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-12-01 14:44:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$case_teasers_subtitle ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-12-01 14:44:30 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/cases/page.php(3): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-12-01 14:44:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$case_teasers_subtitle ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-12-01 14:44:35 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/cases/page.php(3): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-12-01 14:45:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$case_teasers_subtitle ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-12-01 14:45:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/cases/page.php(3): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-12-01 14:45:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$case_teasers_subtitle ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-12-01 14:45:18 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/cases/page.php(3): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-12-01 14:45:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$case_teasers_subtitle ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-12-01 14:45:19 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/cases/page.php(3): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-12-01 14:45:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$case_teasers_subtitle ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-12-01 14:45:21 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/cases/page.php(3): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-12-01 14:48:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: case_teasers_header ~ APPPATH/views/public/cases.php [ 23 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php:23
2015-12-01 14:48:41 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 23, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(161): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(122): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php:23