<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-22 13:16:29 --- INFO: Admin ki has been logged in from IP fe80::c62c:3ff:fe1f:495d in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:246
2016-06-22 13:16:55 --- EMERGENCY: Kohana_Exception [ 0 ]: Using of undefined property 0 ~ MODPATH/avo/classes/AVO/Abstract/Parametrized/Class.php [ 13 ] in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php:58
2016-06-22 13:16:55 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php(58): AVO_Abstract_Parametrized_Class->_report_undefined_property(0)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php(7): AVO_Abstract_Parametrized_Class->__set(0, '')
#2 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Field.php(84): AVO_Abstract_Parametrized_Class->__construct(Array)
#3 /Users/kirill/workspace/apollon/web/application/classes/Backend/Trainers/Form.php(59): AVO_Field->__construct(Array)
#4 /Users/kirill/workspace/apollon/web/application/classes/Backend/Trainers/Grid.php(47): Backend_Trainers_Form->__construct()
#5 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Trainers.php(14): Backend_Trainers_Grid->__construct()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Trainers->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Trainers))
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#12 {main} in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php:58
2016-06-22 13:16:56 --- EMERGENCY: Kohana_Exception [ 0 ]: Using of undefined property 0 ~ MODPATH/avo/classes/AVO/Abstract/Parametrized/Class.php [ 13 ] in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php:58
2016-06-22 13:16:56 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php(58): AVO_Abstract_Parametrized_Class->_report_undefined_property(0)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php(7): AVO_Abstract_Parametrized_Class->__set(0, '')
#2 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Field.php(84): AVO_Abstract_Parametrized_Class->__construct(Array)
#3 /Users/kirill/workspace/apollon/web/application/classes/Backend/Trainers/Form.php(59): AVO_Field->__construct(Array)
#4 /Users/kirill/workspace/apollon/web/application/classes/Backend/Trainers/Grid.php(47): Backend_Trainers_Form->__construct()
#5 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Trainers.php(14): Backend_Trainers_Grid->__construct()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Trainers->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Trainers))
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#12 {main} in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php:58
2016-06-22 13:17:15 --- EMERGENCY: Kohana_Exception [ 0 ]: Using of undefined property 0 ~ MODPATH/avo/classes/AVO/Abstract/Parametrized/Class.php [ 13 ] in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php:58
2016-06-22 13:17:15 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php(58): AVO_Abstract_Parametrized_Class->_report_undefined_property(0)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php(7): AVO_Abstract_Parametrized_Class->__set(0, '')
#2 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Field.php(84): AVO_Abstract_Parametrized_Class->__construct(Array)
#3 /Users/kirill/workspace/apollon/web/application/classes/Backend/Trainers/Form.php(59): AVO_Field->__construct(Array)
#4 /Users/kirill/workspace/apollon/web/application/classes/Backend/Trainers/Grid.php(47): Backend_Trainers_Form->__construct()
#5 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Trainers.php(14): Backend_Trainers_Grid->__construct()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Trainers->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Trainers))
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#12 {main} in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php:58