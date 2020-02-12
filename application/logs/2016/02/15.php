<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-15 09:24:02 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'SUBMENU_MAIL' ~ APPPATH/classes/Controller/Admin/Users.php [ 18 ] in file:line
2016-02-15 09:24:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-15 09:45:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Backend/Users/Email/Form.php [ 22 ] in file:line
2016-02-15 09:45:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-15 10:24:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$subject ~ MODPATH/avo/classes/AVO/Data/Form.php [ 299 ] in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:299
2016-02-15 10:24:35 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 299, Array)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php(604): AVO_Data_Form->handle_action(NULL, true)
#2 /Users/kirill/workspace/apollon/web/application/views/admin/users/email.php(3): AVO_Data_Form->render_object('direct')
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
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:299
2016-02-15 10:27:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Model/User.php [ 35 ] in file:line
2016-02-15 10:27:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-15 10:28:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Variable::find_by_id() ~ APPPATH/classes/Controller/Public.php [ 69 ] in file:line
2016-02-15 10:28:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-15 10:32:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Variable::find_by_id() ~ APPPATH/classes/Controller/Public.php [ 75 ] in file:line
2016-02-15 10:32:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-15 10:34:04 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Model::factory(), called in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php on line 75 and defined ~ SYSPATH/classes/Kohana/Model.php [ 21 ] in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-15 10:34:04 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/kirill/w...', 21, Array)
#1 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(75): Kohana_Model::factory()
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-15 10:35:55 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Model::factory(), called in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php on line 75 and defined ~ SYSPATH/classes/Kohana/Model.php [ 21 ] in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-15 10:35:55 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/kirill/w...', 21, Array)
#1 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(75): Kohana_Model::factory()
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Model.php:21
2016-02-15 10:39:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Message_Template::get_datasource() ~ APPPATH/classes/Backend/Users/Email/Form.php [ 16 ] in file:line
2016-02-15 10:39:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-15 10:43:14 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Public.php [ 79 ] in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php:79
2016-02-15 10:43:14 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(79): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/kirill/w...', 79, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php:79
2016-02-15 10:55:56 --- EMERGENCY: ErrorException [ 2 ]: str_replace() expects at least 3 parameters, 2 given ~ APPPATH/classes/Controller/Public.php [ 79 ] in file:line
2016-02-15 10:55:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'str_replace() e...', '/Users/kirill/w...', 79, Array)
#1 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(79): str_replace('<%name%>', ' vcbcbvcb34534')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in file:line
2016-02-15 11:00:42 --- EMERGENCY: ErrorException [ 2 ]: str_replace() expects at most 4 parameters, 5 given ~ APPPATH/classes/Controller/Public.php [ 80 ] in file:line
2016-02-15 11:00:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'str_replace() e...', '/Users/kirill/w...', 80, Array)
#1 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(80): str_replace('<%name%>', 'gdsghfdh', '<%phone%>', '+380645645', '<p>&lt;%name%&g...')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in file:line
2016-02-15 11:04:14 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Public.php [ 88 ] in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php:88
2016-02-15 11:04:14 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(88): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/kirill/w...', 88, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php:88
2016-02-15 12:31:49 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/PDO.php:242
2016-02-15 12:31:49 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('facebook_applic...')
#2 [internal function]: Kohana_Database->quote('facebook_applic...')
#3 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO_MySQL))
#5 /Users/kirill/workspace/apollon/web/modules/avo/classes/Model/Variable.php(37): Kohana_Database_Query->execute()
#6 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(31): Model_Variable::value_by_name('facebook_applic...', true)
#7 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#14 {main} in /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/PDO.php:242
2016-02-15 12:31:54 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/PDO.php:242
2016-02-15 12:31:54 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('facebook_applic...')
#2 [internal function]: Kohana_Database->quote('facebook_applic...')
#3 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO_MySQL))
#5 /Users/kirill/workspace/apollon/web/modules/avo/classes/Model/Variable.php(37): Kohana_Database_Query->execute()
#6 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(31): Model_Variable::value_by_name('facebook_applic...', true)
#7 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#14 {main} in /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/PDO.php:242
2016-02-15 12:32:03 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/PDO.php:242
2016-02-15 12:32:03 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('facebook_applic...')
#2 [internal function]: Kohana_Database->quote('facebook_applic...')
#3 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO_MySQL))
#5 /Users/kirill/workspace/apollon/web/modules/avo/classes/Model/Variable.php(37): Kohana_Database_Query->execute()
#6 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(31): Model_Variable::value_by_name('facebook_applic...', true)
#7 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#14 {main} in /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/PDO.php:242
2016-02-15 13:08:24 --- INFO: Admin ki has been logged in from IP ::1 in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:246
2016-02-15 13:39:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'email' not found ~ APPPATH/classes/Controller/Public.php [ 86 ] in file:line
2016-02-15 13:39:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-15 14:06:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method email::connect() ~ APPPATH/classes/Controller/Public.php [ 84 ] in file:line
2016-02-15 14:06:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-15 14:07:46 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Public.php [ 92 ] in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php:92
2016-02-15 14:07:46 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(92): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/kirill/w...', 92, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php:92
2016-02-15 14:08:17 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Public.php [ 92 ] in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php:92
2016-02-15 14:08:17 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(92): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/kirill/w...', 92, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php:92
2016-02-15 14:08:57 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Public.php [ 93 ] in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php:93
2016-02-15 14:08:57 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(93): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/kirill/w...', 93, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php:93
2016-02-15 14:10:34 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Public.php [ 93 ] in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php:93
2016-02-15 14:10:34 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(93): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/kirill/w...', 93, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php:93
2016-02-15 14:11:39 --- EMERGENCY: Swift_TransportException [ 0 ]: Connection could not be established with host  [php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known #0] ~ MODPATH/email/vendor/swift/classes/Swift/Transport/StreamBuffer.php [ 245 ] in /Users/kirill/workspace/apollon/web/modules/email/vendor/swift/classes/Swift/Transport/StreamBuffer.php:80
2016-02-15 14:11:39 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/email/vendor/swift/classes/Swift/Transport/StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#1 /Users/kirill/workspace/apollon/web/modules/email/vendor/swift/classes/Swift/Transport/AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#2 /Users/kirill/workspace/apollon/web/modules/email/vendor/swift/classes/Swift/Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#3 /Users/kirill/workspace/apollon/web/modules/email/classes/Email.php(142): Swift_Mailer->send(Object(Swift_Message))
#4 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(86): Email::send('golodenkokv@gma...', 'admin@apollon.s...', '\xD0\xBF\xD0\xBE\xD0\xB4\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBA\xD0...', 'dfsdfdsf\n+38034...')
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/apollon/web/modules/email/vendor/swift/classes/Swift/Transport/StreamBuffer.php:80
2016-02-15 14:12:03 --- EMERGENCY: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1  https://support.google.com/mail/answer/14257 um4sm3611814lbb.1 - gsmtp
" ~ MODPATH/email/vendor/swift/classes/Swift/Transport/AbstractSmtpTransport.php [ 416 ] in /Users/kirill/workspace/apollon/web/modules/email/vendor/swift/classes/Swift/Transport/AbstractSmtpTransport.php:300
2016-02-15 14:12:03 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/email/vendor/swift/classes/Swift/Transport/AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 /Users/kirill/workspace/apollon/web/modules/email/vendor/swift/classes/Swift/Transport/EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <adm...', Array, Array)
#2 /Users/kirill/workspace/apollon/web/modules/email/vendor/swift/classes/Swift/Transport/EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <adm...', Array)
#3 /Users/kirill/workspace/apollon/web/modules/email/vendor/swift/classes/Swift/Transport/AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('admin@apollon.s...')
#4 /Users/kirill/workspace/apollon/web/modules/email/vendor/swift/classes/Swift/Transport/AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'admin@apollon.s...', Array, Array)
#5 /Users/kirill/workspace/apollon/web/modules/email/vendor/swift/classes/Swift/Transport/AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'admin@apollon.s...', Array, Array)
#6 /Users/kirill/workspace/apollon/web/modules/email/vendor/swift/classes/Swift/Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 /Users/kirill/workspace/apollon/web/modules/email/classes/Email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(86): Email::send('golodenkokv@gma...', 'admin@apollon.s...', '\xD0\xBF\xD0\xBE\xD0\xB4\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBA\xD0...', 'fgdfgdfh\n+38034...')
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#15 {main} in /Users/kirill/workspace/apollon/web/modules/email/vendor/swift/classes/Swift/Transport/AbstractSmtpTransport.php:300
2016-02-15 14:14:45 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Public.php [ 86 ] in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php:86
2016-02-15 14:14:45 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(86): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/kirill/w...', 86, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php:86
2016-02-15 14:42:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/email/classes/email.php [ 34 ] in file:line
2016-02-15 14:42:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-15 14:44:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method email::connect() ~ APPPATH/classes/Controller/Public.php [ 84 ] in file:line
2016-02-15 14:44:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line