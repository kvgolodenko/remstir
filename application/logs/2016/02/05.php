<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-05 10:18:17 --- INFO: Admin ki failed to log in using password ki from IP ::1 in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:246
2016-02-05 10:19:18 --- INFO: Admin ki failed to log in using password  from IP ::1 in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:246
2016-02-05 10:19:19 --- INFO: Admin ki failed to log in using password  from IP ::1 in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:246
2016-02-05 10:19:21 --- INFO: Admin ki has been logged in from IP ::1 in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:246
2016-02-05 10:19:27 --- EMERGENCY: ErrorException [ 2 ]: constant(): Couldn't find constant Model_Employee::FORM_PREVIEW_W ~ MODPATH/avo/classes/Backend/Image/Upload/Field/Set.php [ 105 ] in file:line
2016-02-05 10:19:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'constant(): Cou...', '/Users/kirill/w...', 105, Array)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/Backend/Image/Upload/Field/Set.php(105): constant('Model_Employee:...')
#2 /Users/kirill/workspace/apollon/web/application/classes/Backend/Employees/Form.php(78): Backend_Image_Upload_Field_Set->__construct(Array)
#3 /Users/kirill/workspace/apollon/web/application/classes/Backend/Employees/Grid.php(45): Backend_Employees_Form->__construct()
#4 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Employees.php(14): Backend_Employees_Grid->__construct()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Employees->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Employees))
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in file:line
2016-02-05 10:20:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Employees_Grid' not found ~ APPPATH/classes/Controller/Admin/Employees.php [ 14 ] in file:line
2016-02-05 10:20:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-05 10:20:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Employees_Grid' not found ~ APPPATH/classes/Controller/Admin/Employees.php [ 14 ] in file:line
2016-02-05 10:20:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-05 10:21:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Employees_Grid' not found ~ APPPATH/classes/Controller/Admin/Employees.php [ 14 ] in file:line
2016-02-05 10:21:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-05 10:21:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Employees_Grid' not found ~ APPPATH/classes/Controller/Admin/Employees.php [ 14 ] in file:line
2016-02-05 10:21:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-05 10:23:40 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_ABOUT' ~ APPPATH/classes/Controller/Admin/About.php [ 11 ] in file:line
2016-02-05 10:23:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-05 10:23:52 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_EMPLOYEES' ~ APPPATH/classes/Controller/Admin/Trainers.php [ 9 ] in file:line
2016-02-05 10:23:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-05 10:24:11 --- EMERGENCY: ErrorException [ 2 ]: constant(): Couldn't find constant Model_Employee::FORM_PREVIEW_W ~ MODPATH/avo/classes/Backend/Image/Upload/Field/Set.php [ 105 ] in file:line
2016-02-05 10:24:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'constant(): Cou...', '/Users/kirill/w...', 105, Array)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/Backend/Image/Upload/Field/Set.php(105): constant('Model_Employee:...')
#2 /Users/kirill/workspace/apollon/web/application/classes/Backend/Trainers/Form.php(78): Backend_Image_Upload_Field_Set->__construct(Array)
#3 /Users/kirill/workspace/apollon/web/application/classes/Backend/Trainers/Grid.php(45): Backend_Trainers_Form->__construct()
#4 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Trainers.php(14): Backend_Trainers_Grid->__construct()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Trainers->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Trainers))
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in file:line
2016-02-05 10:24:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Employee' not found ~ APPPATH/classes/Backend/Trainers/Grid.php [ 74 ] in file:line
2016-02-05 10:24:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-05 10:25:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Employee' not found ~ APPPATH/classes/Backend/Trainers/Grid.php [ 74 ] in file:line
2016-02-05 10:25:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-05 10:25:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Employee' not found ~ APPPATH/classes/Backend/Trainers/Grid.php [ 74 ] in file:line
2016-02-05 10:25:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-05 10:32:56 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on null ~ APPPATH/classes/Backend/Trainers/Form.php [ 92 ] in file:line
2016-02-05 10:32:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-05 10:54:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The get_url property does not exist in the Model_Trainer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-02-05 10:54:30 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('get_url')
#1 /Users/kirill/workspace/apollon/web/application/views/public/_trainers.php(6): Kohana_ORM->__get('get_url')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(161): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#10 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(122): AVO_Controller->after()
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-02-05 10:54:39 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_Trainer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-02-05 10:54:39 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /Users/kirill/workspace/apollon/web/application/views/public/_trainers.php(6): Kohana_ORM->__get('url')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(161): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#10 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(122): AVO_Controller->after()
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-02-05 10:54:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Trainer::get_url() ~ APPPATH/views/public/_trainers.php [ 6 ] in file:line
2016-02-05 10:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-05 10:56:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Trainer::get_url() ~ APPPATH/views/public/_trainers.php [ 6 ] in file:line
2016-02-05 10:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-05 12:19:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: trainers_teasers ~ APPPATH/views/public/_trainers.php [ 5 ] in /Users/kirill/workspace/apollon/web/application/views/public/_trainers.php:5
2016-02-05 12:19:47 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/_trainers.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 5, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(161): Kohana_View->__toString()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(122): AVO_Controller->after()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/apollon/web/application/views/public/_trainers.php:5
2016-02-05 12:21:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: employee ~ APPPATH/views/public/_trainer_teaser.php [ 3 ] in /Users/kirill/workspace/apollon/web/application/views/public/_trainer_teaser.php:3
2016-02-05 12:21:15 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/_trainer_teaser.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 3, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/apollon/web/application/views/public/_trainers.php(6): Kohana_View->__toString()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(161): Kohana_View->__toString()
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(122): AVO_Controller->after()
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/apollon/web/application/views/public/_trainer_teaser.php:3
2016-02-05 15:07:39 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'DESC' in 'order clause' [ SELECT `trainer`.`id` AS `id`, `trainer`.`created` AS `created`, `trainer`.`modified` AS `modified`, `trainer`.`modify_count` AS `modify_count`, `trainer`.`ord` AS `ord`, `trainer`.`name` AS `name`, `trainer`.`title` AS `title`, `trainer`.`uid` AS `uid`, `trainer`.`ext` AS `ext`, `trainer`.`width` AS `width`, `trainer`.`height` AS `height`, `trainer`.`position` AS `position`, `trainer`.`phone` AS `phone`, `trainer`.`email` AS `email`, `trainer`.`seo_title` AS `seo_title`, `trainer`.`seo_keywords` AS `seo_keywords`, `trainer`.`seo_description` AS `seo_description`, `trainer`.`description` AS `description` FROM `trainers` AS `trainer` ORDER BY `DESC` ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/Query.php:251
2016-02-05 15:07:39 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT `trainer...', 'Model_Trainer', Array)
#1 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(49): Kohana_ORM->find_all()
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_trainers()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#10 {main} in /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/Query.php:251
2016-02-05 15:17:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Employee' not found ~ APPPATH/classes/Controller/Public.php [ 249 ] in file:line
2016-02-05 15:17:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-05 15:34:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Employee' not found ~ APPPATH/classes/Controller/Public.php [ 249 ] in file:line
2016-02-05 15:34:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line