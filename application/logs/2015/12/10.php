<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-12-10 08:37:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/views/public/case.php [ 41 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:41
2015-12-10 08:37:06 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/case.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kirill/w...', 41, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(162): Kohana_View->__toString()
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
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:41
2015-12-10 09:15:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/views/public/case.php [ 41 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:41
2015-12-10 09:15:25 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/case.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kirill/w...', 41, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(162): Kohana_View->__toString()
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
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:41
2015-12-10 09:29:48 --- INFO: Admin sh has been logged in from IP ::1 in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:246
2015-12-10 09:33:09 --- INFO: Admin sh has been logged in from IP ::1 in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:246
2015-12-10 09:35:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: attributes ~ APPPATH/views/public/blog_article.php [ 28 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/blog_article.php:28
2015-12-10 09:35:57 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/blog_article.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 28, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(162): Kohana_View->__toString()
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
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/blog_article.php:28
2015-12-10 10:32:23 --- INFO: Admin sh has been logged in from IP ::1 in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:246
2015-12-10 12:55:07 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`value_marketing`.`article_images`, CONSTRAINT `article_images_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `article_images` () VALUES () ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-12-10 12:55:07 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO `ar...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Backend/Image/Upload/Field.php(242): Kohana_ORM->save()
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(542): Backend_Image_Upload_Field->after_save(Object(AVO_Data_Form_Action_Result))
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): AVO_Data_Form->after_save(Object(AVO_Data_Form_Action_Result))
#6 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#8 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#15 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-12-10 12:55:29 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`value_marketing`.`article_images`, CONSTRAINT `article_images_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `article_images` () VALUES () ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-12-10 12:55:29 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO `ar...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Backend/Image/Upload/Field.php(242): Kohana_ORM->save()
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(542): Backend_Image_Upload_Field->after_save(Object(AVO_Data_Form_Action_Result))
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): AVO_Data_Form->after_save(Object(AVO_Data_Form_Action_Result))
#6 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#8 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#15 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-12-10 12:55:44 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`value_marketing`.`article_images`, CONSTRAINT `article_images_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `article_images` () VALUES () ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-12-10 12:55:44 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO `ar...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Backend/Image/Upload/Field.php(242): Kohana_ORM->save()
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(542): Backend_Image_Upload_Field->after_save(Object(AVO_Data_Form_Action_Result))
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): AVO_Data_Form->after_save(Object(AVO_Data_Form_Action_Result))
#6 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#8 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#15 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-12-10 13:00:52 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`value_marketing`.`article_images`, CONSTRAINT `article_images_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `article_images` () VALUES () ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-12-10 13:00:52 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO `ar...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Backend/Image/Upload/Field.php(242): Kohana_ORM->save()
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(542): Backend_Image_Upload_Field->after_save(Object(AVO_Data_Form_Action_Result))
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): AVO_Data_Form->after_save(Object(AVO_Data_Form_Action_Result))
#6 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#8 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#15 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-12-10 13:07:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function grid_preview_link() on null ~ APPPATH/classes/Backend/Articles/Grid.php [ 160 ] in file:line
2015-12-10 13:07:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 14:45:59 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on null ~ APPPATH/classes/Backend/Articles/Grid.php [ 153 ] in file:line
2015-12-10 14:45:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 14:52:52 --- EMERGENCY: Kohana_Exception [ 0 ]: The uid property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-12-10 14:52:52 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('uid')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Model/Generic/Image.php(379): Kohana_ORM->__get('uid')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Model/Generic/Image.php(367): Model_Generic_Image->preview_link('grid_preview')
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Grid.php(153): Model_Generic_Image->grid_preview_link()
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(358): Backend_Articles_Grid->on_calc()
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/articles/index.php(3): AVO_Data_Grid->render_object('direct')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#15 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#17 [internal function]: Kohana_Controller->execute()
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#21 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#22 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-12-10 14:53:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The uid property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-12-10 14:53:30 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('uid')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Model/Generic/Image.php(379): Kohana_ORM->__get('uid')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Model/Generic/Image.php(367): Model_Generic_Image->preview_link('grid_preview')
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Grid.php(153): Model_Generic_Image->grid_preview_link()
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(358): Backend_Articles_Grid->on_calc()
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/articles/index.php(3): AVO_Data_Grid->render_object('direct')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#15 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#17 [internal function]: Kohana_Controller->execute()
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#21 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#22 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-12-10 15:05:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The uid property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-12-10 15:05:44 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('uid')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Model/Generic/Image.php(379): Kohana_ORM->__get('uid')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Model/Generic/Image.php(367): Model_Generic_Image->preview_link('grid_preview')
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Grid.php(153): Model_Generic_Image->grid_preview_link()
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(358): Backend_Articles_Grid->on_calc()
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#6 /Users/kirill/workspace/value_marketing/web/application/views/admin/articles/index.php(3): AVO_Data_Grid->render_object('direct')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#15 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#17 [internal function]: Kohana_Controller->execute()
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#21 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#22 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-12-10 15:50:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Backend/Articles/Form.php [ 210 ] in file:line
2015-12-10 15:50:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 15:50:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Backend/Articles/Form.php [ 210 ] in file:line
2015-12-10 15:50:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 15:50:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Backend/Articles/Form.php [ 210 ] in file:line
2015-12-10 15:50:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 15:50:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Backend/Articles/Form.php [ 210 ] in file:line
2015-12-10 15:50:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 15:50:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Backend/Articles/Form.php [ 210 ] in file:line
2015-12-10 15:50:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 15:50:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Backend/Articles/Form.php [ 210 ] in file:line
2015-12-10 15:50:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 15:50:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Backend/Articles/Form.php [ 210 ] in file:line
2015-12-10 15:50:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 15:50:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Backend/Articles/Form.php [ 210 ] in file:line
2015-12-10 15:50:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 15:50:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Backend/Articles/Form.php [ 207 ] in file:line
2015-12-10 15:50:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 15:50:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Backend/Articles/Form.php [ 207 ] in file:line
2015-12-10 15:50:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 15:50:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Backend/Articles/Form.php [ 207 ] in file:line
2015-12-10 15:50:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 15:50:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Backend/Articles/Form.php [ 207 ] in file:line
2015-12-10 15:50:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 15:52:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::get_url() ~ APPPATH/classes/Controller/Public.php [ 122 ] in file:line
2015-12-10 15:52:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 16:34:57 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Backend_Articles_Form::on_validate() should be compatible with AVO_Data_Form::on_validate(AVO_Data_Form_Action_Result $result) ~ APPPATH/classes/Backend/Articles/Form.php [ 4 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Form.php:4
2015-12-10 16:34:57 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Form.php(4): Kohana_Core::error_handler(2048, 'Declaration of ...', '/Users/kirill/w...', 4, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Core.php(511): require('/Users/kirill/w...')
#2 [internal function]: Kohana_Core::auto_load('Backend_Article...')
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Grid.php(42): spl_autoload_call('Backend_Article...')
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Articles.php(14): Backend_Articles_Grid->__construct()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Articles->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Form.php:4
2015-12-10 17:16:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH/views/public/article.php [ 27 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/article.php:27
2015-12-10 17:16:34 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/article.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 27, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(162): Kohana_View->__toString()
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
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/article.php:27
2015-12-10 17:16:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::url() ~ APPPATH/views/public/article.php [ 27 ] in file:line
2015-12-10 17:16:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-10 17:18:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/public/article.php [ 31 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/article.php:31
2015-12-10 17:18:47 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/article.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 31, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(162): Kohana_View->__toString()
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
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/article.php:31
2015-12-10 17:19:28 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'LANDSCAPE_NAME' ~ APPPATH/views/public/article.php [ 27 ] in file:line
2015-12-10 17:19:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line