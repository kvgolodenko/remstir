<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-30 07:56:07 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/PDO.php:242
2015-11-30 07:56:07 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('facebook_applic...')
#2 [internal function]: Kohana_Database->quote('facebook_applic...')
#3 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO_MySQL))
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Model/Variable.php(37): Kohana_Database_Query->execute()
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(31): Model_Variable::value_by_name('facebook_applic...', true)
#7 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(11): Controller_Abstract_Public->before()
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#14 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/PDO.php:242
2015-11-30 07:57:08 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/PDO.php:242
2015-11-30 07:57:08 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('facebook_applic...')
#2 [internal function]: Kohana_Database->quote('facebook_applic...')
#3 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO_MySQL))
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Model/Variable.php(37): Kohana_Database_Query->execute()
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(31): Model_Variable::value_by_name('facebook_applic...', true)
#7 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(11): Controller_Abstract_Public->before()
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#14 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/PDO.php:242
2015-11-30 09:40:43 --- INFO: Admin sh has been logged in from IP ::1 in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:246
2015-11-30 13:39:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The preview_text property does not exist in the Model_Startpage_Application class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-30 13:39:33 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('preview_text')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(327): Kohana_ORM->__get('preview_text')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#3 /Users/kirill/workspace/value_marketing/web/application/views/admin/startpage/applications.php(2): AVO_Data_Grid->render_object('direct')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#12 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#19 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-30 13:42:07 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 148 ] in file:line
2015-11-30 13:42:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-30 13:42:15 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 147 ] in file:line
2015-11-30 13:42:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-30 13:42:37 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 147 ] in file:line
2015-11-30 13:42:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-30 13:43:35 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 147 ] in file:line
2015-11-30 13:43:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-30 13:55:41 --- EMERGENCY: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO `work_applications` (`name`, `phone`, `email`, `text`, `uid`, `title`, `ext`) VALUES ('Gary Oldman', '2342323234', 'garyoldman@mail.com', 'Hei, jeg ønsker å søke jobb hos Value Marketing...', '91edc3ad338ae877d741b4c0e05b286f', '91edc3ad338ae877d741b4c0e05b286f') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-30 13:55:41 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO `wo...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php(34): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(948): Model_Startpage_Application->add_application('Gary Oldman', '2342323234', 'garyoldman@mail...', 'Hei, jeg \xC3\xB8nske...', '91edc3ad338ae87...')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-30 13:58:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ext ~ APPPATH/classes/Model/Startpage/Application.php [ 33 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php:33
2015-11-30 13:58:07 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 33, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(950): Model_Startpage_Application->add_application('Gary Oldman', '2342323234', 'garyoldman@mail...', 'Hei, jeg \xC3\xB8nske...', '037a595e6f4f057...', '.pdf')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Model/Startpage/Application.php:33
2015-11-30 14:01:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Startpage/Applications/Grid.php [ 150 ] in file:line
2015-11-30 14:01:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-30 15:22:20 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Public.php [ 965 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:965
2015-11-30 15:22:20 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(965): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/kirill/w...', 965, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:965
2015-11-30 16:23:09 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Public.php [ 965 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:965
2015-11-30 16:23:09 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(965): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/kirill/w...', 965, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:965
2015-11-30 16:23:21 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Public.php [ 965 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:965
2015-11-30 16:23:21 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(965): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/kirill/w...', 965, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:965
2015-11-30 16:26:23 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Public.php [ 965 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:965
2015-11-30 16:26:23 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(965): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/kirill/w...', 965, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_application()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:965