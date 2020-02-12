<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-01 15:29:02 --- EMERGENCY: View_Exception [ 0 ]: The requested view menu could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php:137
2016-04-01 15:29:02 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(137): Kohana_View->set_filename('menu')
#1 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(30): Kohana_View->__construct('menu', NULL)
#2 /Users/kirill/workspace/apollon/web/application/views/mobile/_header.php(27): Kohana_View::factory('menu')
#3 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/apollon/web/application/views/mobile/layout.php(161): Kohana_View->__toString()
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#11 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(127): AVO_Controller->after()
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#15 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#18 {main} in /Users/kirill/workspace/apollon/web/system/classes/Kohana/View.php:137