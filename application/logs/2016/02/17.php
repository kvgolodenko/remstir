<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-17 08:04:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/mobile/index.php [ 12 ] in /Users/kirill/workspace/apollon/web/application/views/mobile/index.php:12
2016-02-17 08:04:32 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/mobile/index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 12, Array)
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/apollon/web/application/views/mobile/layout.php(162): Kohana_View->__toString()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(119): AVO_Controller->after()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/apollon/web/application/views/mobile/index.php:12
2016-02-17 09:37:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Blog_Article' not found ~ APPPATH/classes/Controller/Public.php [ 40 ] in file:line
2016-02-17 09:37:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-17 09:44:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Blog_Image' not found ~ APPPATH/classes/Controller/Public.php [ 191 ] in file:line
2016-02-17 09:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-17 09:47:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?>', expecting variable (T_VARIABLE) or '$' ~ APPPATH/views/public/_news_article.php [ 2 ] in file:line
2016-02-17 09:47:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-17 10:04:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: b ~ APPPATH/views/public/_news_article.php [ 5 ] in /Users/kirill/workspace/apollon/web/application/views/public/_news_article.php:5
2016-02-17 10:04:53 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/application/views/public/_news_article.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 5, Array)
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
#16 {main} in /Users/kirill/workspace/apollon/web/application/views/public/_news_article.php:5
2016-02-17 11:28:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The text property does not exist in the Model_News_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-02-17 11:28:30 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('text')
#1 /Users/kirill/workspace/apollon/web/application/views/public/_news_article.php(8): Kohana_ORM->__get('text')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(161): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#10 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(120): AVO_Controller->after()
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603