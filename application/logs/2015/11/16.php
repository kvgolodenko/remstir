<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-16 08:23:29 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_press' in 'where clause' [ SELECT COUNT(*) FROM articles WHERE (NULL IS NULL OR id  NULL) AND is_press = 0 AND url_title = '' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-16 08:23:29 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Form.php(194): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): Backend_Articles_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#5 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#12 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-16 08:29:07 --- INFO: Admin sh has been logged in from IP ::1 in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:246
2015-11-16 08:35:12 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_FOOTER' ~ APPPATH/classes/Controller/Admin/Footer.php [ 11 ] in file:line
2015-11-16 08:35:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 08:35:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$instagram_url ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-16 08:35:42 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/contacts/index.php(3): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Contacts))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-16 08:37:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$under_logo_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-16 08:37:27 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/contacts/index.php(3): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Contacts))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-16 08:38:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$under_logo_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-16 08:38:28 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/contacts/index.php(3): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Contacts))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-16 08:39:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$under_logo_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-16 08:39:14 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/contacts/index.php(3): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Contacts))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-16 08:39:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$under_logo_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-16 08:39:15 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/contacts/index.php(3): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Contacts))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-16 08:39:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$under_logo_text ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-16 08:39:49 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/value_marketing/web/application/views/admin/contacts/index.php(3): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Contacts))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:299
2015-11-16 08:48:33 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_SETTINGS' ~ APPPATH/classes/Controller/Admin/Abstract/Authenticated.php [ 59 ] in file:line
2015-11-16 08:48:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 09:57:08 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Model_Contact::$under_logo_text ~ APPPATH/views/public/_footer.php [ 6 ] in file:line
2015-11-16 09:57:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 09:57:43 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Model_Contact::$under_logo_text ~ APPPATH/views/public/_footer.php [ 6 ] in file:line
2015-11-16 09:57:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 09:58:49 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Model_Contact::$under_logo_text ~ APPPATH/views/public/_footer.php [ 6 ] in file:line
2015-11-16 09:58:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 10:00:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: under_logo_text ~ APPPATH/views/public/_footer.php [ 6 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/_footer.php:6
2015-11-16 10:00:49 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/_footer.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 6, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php(40): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(118): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/_footer.php:6
2015-11-16 10:01:33 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Model_Variable::$under_logo_text ~ APPPATH/views/public/_footer.php [ 6 ] in file:line
2015-11-16 10:01:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 10:02:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: under_logo_text ~ APPPATH/views/public/_footer.php [ 6 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/_footer.php:6
2015-11-16 10:02:32 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/_footer.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 6, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php(40): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(118): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/_footer.php:6
2015-11-16 10:48:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Grid' not found ~ APPPATH/classes/Backend/Contacts/Form.php [ 138 ] in file:line
2015-11-16 10:48:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 10:48:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Grid' not found ~ APPPATH/classes/Backend/Contacts/Form.php [ 138 ] in file:line
2015-11-16 10:48:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 10:49:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Grid' not found ~ APPPATH/classes/Backend/Contacts/Form.php [ 138 ] in file:line
2015-11-16 10:49:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 10:50:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Grid' not found ~ APPPATH/classes/Backend/Contacts/Form.php [ 138 ] in file:line
2015-11-16 10:50:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 10:50:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Grid' not found ~ APPPATH/classes/Backend/Contacts/Form.php [ 138 ] in file:line
2015-11-16 10:50:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 10:56:12 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ MODPATH/avo/classes/AVO/Data/Grid.php [ 475 ] in file:line
2015-11-16 10:56:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 11:56:38 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'SUBMENU_QUOTE' ~ APPPATH/classes/Controller/Admin/Contacts.php [ 15 ] in file:line
2015-11-16 11:56:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:02:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 30 ] in file:line
2015-11-16 12:02:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:02:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 30 ] in file:line
2015-11-16 12:02:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:03:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 30 ] in file:line
2015-11-16 12:03:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:03:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 30 ] in file:line
2015-11-16 12:03:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:06:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Backend/Contacts/Grid.php [ 40 ] in file:line
2015-11-16 12:06:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:06:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Backend/Contacts/Grid.php [ 40 ] in file:line
2015-11-16 12:06:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:07:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Backend/Contacts/Grid.php [ 40 ] in file:line
2015-11-16 12:07:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:35:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 31 ] in file:line
2015-11-16 12:35:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:35:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 31 ] in file:line
2015-11-16 12:35:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:36:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 31 ] in file:line
2015-11-16 12:36:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:36:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Content_Form' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 42 ] in file:line
2015-11-16 12:36:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:36:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 31 ] in file:line
2015-11-16 12:36:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:37:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 31 ] in file:line
2015-11-16 12:37:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:37:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 31 ] in file:line
2015-11-16 12:37:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:38:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 31 ] in file:line
2015-11-16 12:38:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:38:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Form' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 31 ] in file:line
2015-11-16 12:38:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:39:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contacts_Content_Form' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 31 ] in file:line
2015-11-16 12:39:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:41:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Contact_Grid' not found ~ APPPATH/classes/Controller/Admin/Contacts.php [ 42 ] in file:line
2015-11-16 12:41:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:42:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: form ~ APPPATH/views/admin/contacts/info.php [ 3 ] in /Users/kirill/workspace/value_marketing/web/application/views/admin/contacts/info.php:3
2015-11-16 12:42:27 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/admin/contacts/info.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 3, Array)
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
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Contacts))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/admin/contacts/info.php:3
2015-11-16 12:44:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: form ~ APPPATH/views/admin/contacts/info.php [ 3 ] in /Users/kirill/workspace/value_marketing/web/application/views/admin/contacts/info.php:3
2015-11-16 12:44:17 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/admin/contacts/info.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 3, Array)
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
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Contacts))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/admin/contacts/info.php:3
2015-11-16 12:45:47 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_draft' in 'order clause' [ SELECT * FROM contacts ORDER BY is_draft DESC, frontend_date DESC LIMIT 25 OFFSET 0  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-16 12:45:47 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM c...', 'Model_Article', Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(132): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(99): AVO_Data_Source_DB->_get_dataset(NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(317): AVO_Data_Source_DB->fetch(NULL)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#5 /Users/kirill/workspace/value_marketing/web/application/views/admin/contacts/info.php(3): AVO_Data_Grid->render_object('direct')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Contacts))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-16 12:46:31 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_draft' in 'order clause' [ SELECT * FROM contacts ORDER BY is_draft DESC, frontend_date DESC LIMIT 25 OFFSET 0  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-16 12:46:31 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM c...', 'Model_Article', Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(132): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(99): AVO_Data_Source_DB->_get_dataset(NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(317): AVO_Data_Source_DB->fetch(NULL)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#5 /Users/kirill/workspace/value_marketing/web/application/views/admin/contacts/info.php(3): AVO_Data_Grid->render_object('direct')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Contacts))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-16 12:49:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Contact::get_datasource() ~ APPPATH/classes/Backend/Contacts/Form.php [ 12 ] in file:line
2015-11-16 12:49:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 12:53:40 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH/avo/classes/AVO/Data/Form.php [ 276 ] in file:line
2015-11-16 12:53:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 13:02:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Backend/Contacts/Content/Form.php [ 18 ] in file:line
2015-11-16 13:02:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 13:17:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: contact_header ~ APPPATH/views/public/contact.php [ 17 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php:17
2015-11-16 13:17:51 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 17, Array)
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
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php:17
2015-11-16 13:41:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'insert_query' (T_STRING), expecting ')' ~ APPPATH/classes/Backend/Contacts/Grid.php [ 24 ] in file:line
2015-11-16 13:41:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 13:41:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'insert_query' (T_STRING), expecting ')' ~ APPPATH/classes/Backend/Contacts/Grid.php [ 24 ] in file:line
2015-11-16 13:41:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 13:41:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'insert_query' (T_STRING), expecting ')' ~ APPPATH/classes/Backend/Contacts/Grid.php [ 24 ] in file:line
2015-11-16 13:41:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 13:41:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'insert_query' (T_STRING), expecting ')' ~ APPPATH/classes/Backend/Contacts/Grid.php [ 24 ] in file:line
2015-11-16 13:41:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 13:41:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'insert_query' (T_STRING), expecting ')' ~ APPPATH/classes/Backend/Contacts/Grid.php [ 24 ] in file:line
2015-11-16 13:41:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 13:41:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'insert_query' (T_STRING), expecting ')' ~ APPPATH/classes/Backend/Contacts/Grid.php [ 24 ] in file:line
2015-11-16 13:41:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 13:41:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'insert_query' (T_STRING), expecting ')' ~ APPPATH/classes/Backend/Contacts/Grid.php [ 24 ] in file:line
2015-11-16 13:41:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-16 13:44:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: contact_heading ~ APPPATH/views/public/contact.php [ 24 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php:24
2015-11-16 13:44:19 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 24, Array)
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
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php:24
2015-11-16 14:08:33 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Model::factory(), called in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php on line 17 and defined ~ SYSPATH/classes/Kohana/Model.php [ 21 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Model.php:21
2015-11-16 14:08:33 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Model.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/kirill/w...', 21, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(17): Kohana_Model::factory()
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Model.php:21
2015-11-16 14:12:08 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Model::factory(), called in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php on line 18 and defined ~ SYSPATH/classes/Kohana/Model.php [ 21 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Model.php:21
2015-11-16 14:12:08 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Model.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/kirill/w...', 21, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(18): Kohana_Model::factory()
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Model.php:21
2015-11-16 14:12:44 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Model::factory(), called in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php on line 18 and defined ~ SYSPATH/classes/Kohana/Model.php [ 21 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Model.php:21
2015-11-16 14:12:44 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Model.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/kirill/w...', 21, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(18): Kohana_Model::factory()
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Model.php:21
2015-11-16 14:13:23 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/public/contact.php [ 30 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php:30
2015-11-16 14:13:23 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php(30): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/kirill/w...', 30, Array)
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
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php:30
2015-11-16 14:15:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: contact_heading ~ APPPATH/views/public/contact.php [ 33 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php:33
2015-11-16 14:15:09 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 33, Array)
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
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/contact.php:33