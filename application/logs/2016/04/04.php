<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-04 10:49:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_mobile' not found ~ APPPATH/views/mobile/news.php [ 6 ] in file:line
2016-04-04 10:49:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-04 10:54:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_mobile' not found ~ APPPATH/views/mobile/news.php [ 6 ] in file:line
2016-04-04 10:54:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-04 10:54:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_mobile' not found ~ APPPATH/views/mobile/news.php [ 10 ] in file:line
2016-04-04 10:54:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-04 11:55:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_News_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 11:55:32 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /Users/kirill/workspace/apollon/web/application/views/public/_article_teaser.php(8): Kohana_ORM->__get('url')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/public/news.php(11): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(162): Kohana_View->__toString()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(127): AVO_Controller->after()
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 11:55:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_News_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 11:55:32 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /Users/kirill/workspace/apollon/web/application/views/public/_article_teaser.php(8): Kohana_ORM->__get('url')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/public/news.php(11): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(162): Kohana_View->__toString()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(127): AVO_Controller->after()
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 11:55:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_News_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 11:55:32 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /Users/kirill/workspace/apollon/web/application/views/public/_article_teaser.php(8): Kohana_ORM->__get('url')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/public/news.php(11): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(162): Kohana_View->__toString()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(127): AVO_Controller->after()
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 11:55:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_News_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 11:55:32 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /Users/kirill/workspace/apollon/web/application/views/public/_article_teaser.php(8): Kohana_ORM->__get('url')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/public/news.php(11): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(162): Kohana_View->__toString()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(127): AVO_Controller->after()
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 11:55:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_News_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 11:55:32 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /Users/kirill/workspace/apollon/web/application/views/public/_article_teaser.php(8): Kohana_ORM->__get('url')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/public/news.php(11): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(162): Kohana_View->__toString()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(127): AVO_Controller->after()
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 11:55:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_News_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 11:55:32 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /Users/kirill/workspace/apollon/web/application/views/public/_article_teaser.php(8): Kohana_ORM->__get('url')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/public/news.php(11): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/application/views/public/layout.php(162): Kohana_View->__toString()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(127): AVO_Controller->after()
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 13:10:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_News_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 13:10:24 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /Users/kirill/workspace/apollon/web/application/views/mobile/_article_teaser.php(8): Kohana_ORM->__get('url')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/mobile/news.php(11): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/application/views/mobile/layout.php(162): Kohana_View->__toString()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(127): AVO_Controller->after()
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 13:10:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_News_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 13:10:24 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /Users/kirill/workspace/apollon/web/application/views/mobile/_article_teaser.php(8): Kohana_ORM->__get('url')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/mobile/news.php(11): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/application/views/mobile/layout.php(162): Kohana_View->__toString()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(127): AVO_Controller->after()
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 13:10:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_News_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 13:10:24 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /Users/kirill/workspace/apollon/web/application/views/mobile/_article_teaser.php(8): Kohana_ORM->__get('url')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/mobile/news.php(11): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/application/views/mobile/layout.php(162): Kohana_View->__toString()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(127): AVO_Controller->after()
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 13:10:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_News_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 13:10:25 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /Users/kirill/workspace/apollon/web/application/views/mobile/_article_teaser.php(8): Kohana_ORM->__get('url')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/mobile/news.php(11): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/application/views/mobile/layout.php(162): Kohana_View->__toString()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(127): AVO_Controller->after()
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 13:10:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_News_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 13:10:25 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /Users/kirill/workspace/apollon/web/application/views/mobile/_article_teaser.php(8): Kohana_ORM->__get('url')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/mobile/news.php(11): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/application/views/mobile/layout.php(162): Kohana_View->__toString()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(127): AVO_Controller->after()
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 13:10:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_News_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 13:10:25 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('url')
#1 /Users/kirill/workspace/apollon/web/application/views/mobile/_article_teaser.php(8): Kohana_ORM->__get('url')
#2 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/apollon/web/application/views/mobile/news.php(11): Kohana_View->__toString()
#6 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/apollon/web/application/views/mobile/layout.php(162): Kohana_View->__toString()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(127): AVO_Controller->after()
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/apollon/web/modules/orm/classes/Kohana/ORM.php:603
2016-04-04 21:37:56 --- INFO: Admin ki has been logged in from IP fe80::c62c:3ff:fe1f:495d in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:246