<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-23 13:00:47 --- INFO: Admin ki has been logged in from IP ::1 in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:246
2016-03-23 14:12:30 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php:125
2016-03-23 14:12:30 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(139): Kohana_Session::instance()
#4 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Abstract.php(16): AVO_Controller->before()
#5 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Abstract/Authenticated.php(21): Controller_Admin_Abstract->before()
#6 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Settings.php(8): Controller_Admin_Abstract_Authenticated->before()
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(69): Controller_Admin_Settings->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#13 {main} in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php:125
2016-03-23 14:12:39 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php:125
2016-03-23 14:12:39 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(139): Kohana_Session::instance()
#4 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Abstract.php(16): AVO_Controller->before()
#5 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Abstract/Authenticated.php(21): Controller_Admin_Abstract->before()
#6 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Settings.php(8): Controller_Admin_Abstract_Authenticated->before()
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(69): Controller_Admin_Settings->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#13 {main} in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php:125
2016-03-23 14:12:43 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php:125
2016-03-23 14:12:43 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(139): Kohana_Session::instance()
#4 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Abstract.php(16): AVO_Controller->before()
#5 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Abstract/Authenticated.php(21): Controller_Admin_Abstract->before()
#6 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Settings.php(8): Controller_Admin_Abstract_Authenticated->before()
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(69): Controller_Admin_Settings->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#13 {main} in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php:125
2016-03-23 14:12:59 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php:125
2016-03-23 14:12:59 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(139): Kohana_Session::instance()
#4 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Abstract.php(16): AVO_Controller->before()
#5 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Abstract/Authenticated.php(21): Controller_Admin_Abstract->before()
#6 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Settings.php(8): Controller_Admin_Abstract_Authenticated->before()
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(69): Controller_Admin_Settings->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#13 {main} in /Users/kirill/workspace/apollon/web/system/classes/Kohana/Session.php:125
2016-03-23 14:40:44 --- INFO: Password is changed for admin kir in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:208
2016-03-23 14:41:20 --- INFO: Password is changed for admin ki in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:208