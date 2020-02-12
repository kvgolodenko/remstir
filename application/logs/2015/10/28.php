<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-28 10:56:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/public/_1_article_teaser.php [ 37 ] in file:line
2015-10-28 10:56:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-28 10:57:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/public/_1_article_teaser.php [ 38 ] in file:line
2015-10-28 10:57:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-28 13:51:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The previewtext property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-10-28 13:51:55 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('previewtext')
#1 /Users/kirill/workspace/value_marketing/web/application/views/public/_1_article_teaser.php(10): Kohana_ORM->__get('previewtext')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(58): Kohana_View->__toString()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(128): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-10-28 13:51:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The previewtext property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-10-28 13:51:55 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('previewtext')
#1 /Users/kirill/workspace/value_marketing/web/application/views/public/_1_article_teaser.php(10): Kohana_ORM->__get('previewtext')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(58): Kohana_View->__toString()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(128): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603