<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-03 08:43:35 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_Menuitem class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-02-03 08:43:35 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /Users/kirill/workspace/apollon/web/application/views/public/_header.php(25): Kohana_ORM->__get('url')
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
2016-02-03 08:46:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: under_logo_text ~ APPPATH/views/public/_footer.php [ 9 ] in /Users/kirill/workspace/apollon/web/application/views/public/_footer.php:9
2016-02-03 08:46:52 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/_footer.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/apollon/web/application/views/public/errors/404.php(6): Kohana_View->__toString()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(162): Kohana_View->__toString()
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
#19 /Users/kirill/workspace/apollon/web/application/classes/HTTP/Exception/404.php(8): Kohana_Request->execute()
#20 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(976): HTTP_Exception_404->get_response()
#21 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#22 {main} in /Users/kirill/workspace/apollon/web/application/views/public/_footer.php:9
2016-02-03 08:47:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: under_logo_text ~ APPPATH/views/public/_footer.php [ 9 ] in /Users/kirill/workspace/apollon/web/application/views/public/_footer.php:9
2016-02-03 08:47:28 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/_footer.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/apollon/web/application/views/public/errors/404.php(6): Kohana_View->__toString()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(162): Kohana_View->__toString()
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
#19 /Users/kirill/workspace/apollon/web/application/classes/HTTP/Exception/404.php(8): Kohana_Request->execute()
#20 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(976): HTTP_Exception_404->get_response()
#21 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#22 {main} in /Users/kirill/workspace/apollon/web/application/views/public/_footer.php:9
2016-02-03 08:47:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: under_logo_text ~ APPPATH/views/public/_footer.php [ 9 ] in /Users/kirill/workspace/apollon/web/application/views/public/_footer.php:9
2016-02-03 08:47:32 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/_footer.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/apollon/web/application/views/public/errors/404.php(6): Kohana_View->__toString()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(162): Kohana_View->__toString()
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
#19 /Users/kirill/workspace/apollon/web/application/classes/HTTP/Exception/404.php(8): Kohana_Request->execute()
#20 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(976): HTTP_Exception_404->get_response()
#21 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#22 {main} in /Users/kirill/workspace/apollon/web/application/views/public/_footer.php:9