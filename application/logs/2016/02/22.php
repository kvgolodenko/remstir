<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-22 14:09:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH/views/public/index.php [ 55 ] in /Users/kirill/workspace/apollon/web/application/views/public/index.php:55
2016-02-22 14:09:37 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/index.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 55, Array)
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
2016-02-22 20:07:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH/views/public/index.php [ 55 ] in /Users/kirill/workspace/apollon/web/application/views/public/index.php:55
2016-02-22 20:07:23 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/index.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 55, Array)
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
2016-02-22 20:08:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH/views/public/index.php [ 55 ] in /Users/kirill/workspace/apollon/web/application/views/public/index.php:55
2016-02-22 20:08:57 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/index.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 55, Array)
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
2016-02-22 20:09:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH/views/public/index.php [ 55 ] in /Users/kirill/workspace/apollon/web/application/views/public/index.php:55
2016-02-22 20:09:32 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/index.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 55, Array)
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
2016-02-22 20:09:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH/views/public/index.php [ 55 ] in /Users/kirill/workspace/apollon/web/application/views/public/index.php:55
2016-02-22 20:09:40 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/index.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 55, Array)
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
2016-02-22 20:12:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH/views/public/index.php [ 55 ] in /Users/kirill/workspace/apollon/web/application/views/public/index.php:55
2016-02-22 20:12:51 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/index.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 55, Array)
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
2016-02-22 20:17:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH/views/public/index.php [ 55 ] in /Users/kirill/workspace/apollon/web/application/views/public/index.php:55
2016-02-22 20:17:15 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/index.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 55, Array)
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
2016-02-22 20:17:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH/views/public/index.php [ 55 ] in /Users/kirill/workspace/apollon/web/application/views/public/index.php:55
2016-02-22 20:17:50 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/index.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 55, Array)
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