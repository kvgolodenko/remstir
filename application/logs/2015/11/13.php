<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-13 08:38:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: case ~ APPPATH/views/public/case.php [ 15 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 08:38:29 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/case.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 15, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 08:47:58 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 08:47:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(228): AVO_Search_ZendSearch->delete('Model_Article', 238)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 08:49:02 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 08:49:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(228): AVO_Search_ZendSearch->delete('Model_Article', 236)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 08:49:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: case ~ APPPATH/views/public/case.php [ 15 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 08:49:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/case.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 15, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 08:50:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: case ~ APPPATH/views/public/case.php [ 15 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 08:50:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/case.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 15, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 08:52:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: case ~ APPPATH/views/public/case.php [ 15 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 08:52:11 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/case.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 15, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 09:01:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:01:35 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:01:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:01:59 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:02:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:02:04 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:05:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:05:13 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:06:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:06:16 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:06:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:06:27 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:07:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:07:09 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:07:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:07:11 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:07:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:07:13 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:07:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:07:21 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:07:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:07:38 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:07:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:07:39 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:07:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:07:44 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:08:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:08:13 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:08:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:08:16 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:08:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::loaded() ~ APPPATH/classes/Controller/Public.php [ 1325 ] in file:line
2015-11-13 09:08:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 09:09:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$seo_title ~ APPPATH/classes/Controller/Public.php [ 1326 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1326
2015-11-13 09:09:10 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1326): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1326, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1326
2015-11-13 09:09:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:09:25 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:09:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:09:31 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:10:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: case ~ APPPATH/views/public/case.php [ 15 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 09:10:13 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/case.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 15, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 09:10:38 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'STANDARD_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 09:10:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 09:10:55 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'article_id' in 'where clause' [ SELECT `case_image`.`id` AS `id`, `case_image`.`created` AS `created`, `case_image`.`modified` AS `modified`, `case_image`.`modify_count` AS `modify_count`, `case_image`.`ord` AS `ord`, `case_image`.`text` AS `text`, `case_image`.`title` AS `title`, `case_image`.`uid` AS `uid`, `case_image`.`ext` AS `ext`, `case_image`.`width` AS `width`, `case_image`.`height` AS `height`, `case_image`.`case_id` AS `case_id`, `case_image`.`video_url` AS `video_url` FROM `case_images` AS `case_image` WHERE `article_id` = '238' ORDER BY `case_image`.`ord` ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 09:10:55 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT `case_im...', 'Model_Case_Imag...', Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1322): Kohana_ORM->find_all()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#10 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 09:11:09 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'article_id' in 'where clause' [ SELECT `case`.`id` AS `id`, `case`.`created` AS `created`, `case`.`modified` AS `modified`, `case`.`modify_count` AS `modify_count`, `case`.`ord` AS `ord`, `case`.`heading` AS `heading`, `case`.`body_text` AS `body_text`, `case`.`subtitle` AS `subtitle`, `case`.`url_title` AS `url_title`, `case`.`seo_title` AS `seo_title`, `case`.`seo_keywords` AS `seo_keywords`, `case`.`seo_description` AS `seo_description`, `case`.`frontend_date` AS `frontend_date`, `case`.`is_sticky` AS `is_sticky`, `case`.`is_archived` AS `is_archived`, `case`.`is_press` AS `is_press`, `case`.`use_ads_between_sharing_and_comments` AS `use_ads_between_sharing_and_comments`, `case`.`use_ads_in_bottom` AS `use_ads_in_bottom`, `case`.`portrait_title` AS `portrait_title`, `case`.`portrait_uid` AS `portrait_uid`, `case`.`portrait_ext` AS `portrait_ext`, `case`.`portrait_width` AS `portrait_width`, `case`.`portrait_height` AS `portrait_height`, `case`.`landscape_title` AS `landscape_title`, `case`.`landscape_uid` AS `landscape_uid`, `case`.`landscape_ext` AS `landscape_ext`, `case`.`landscape_width` AS `landscape_width`, `case`.`landscape_height` AS `landscape_height`, `case`.`video_url` AS `video_url`, `case`.`preview_text` AS `preview_text`, `case`.`alone_width` AS `alone_width`, `case`.`is_new` AS `is_new`, `case`.`are_comments_disabled` AS `are_comments_disabled`, `case`.`category_orientation` AS `category_orientation`, `case`.`is_draft` AS `is_draft`, `case`.`embed_code` AS `embed_code`, `case`.`category` AS `category` FROM `cases` AS `case` WHERE `article_id` = '238' ORDER BY `case`.`ord` ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 09:11:09 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT `case`.`...', 'Model_Case', Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1322): Kohana_ORM->find_all()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#10 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 09:11:17 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'STANDARD_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 09:11:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 09:11:48 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'STANDARD_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 09:11:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 09:12:35 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'LANDSCAPE_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 09:12:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 09:13:35 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'LANDSCAPE_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 09:13:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 09:13:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$landscape_uid ~ APPPATH/views/public/case.php [ 15 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 09:13:57 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/case.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 15, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 09:20:06 --- EMERGENCY: ErrorException [ 1 ]: Class Model_Case contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (AVO_Search_Searchable::index_map, AVO_Search_Searchable::index_filters) ~ APPPATH/classes/Model/Case.php [ 79 ] in file:line
2015-11-13 09:20:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 09:20:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Case::get_url() ~ APPPATH/views/public/_case_teaser.php [ 4 ] in file:line
2015-11-13 09:20:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 09:21:18 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'TABLET_LANDSCAPE_NAME' ~ APPPATH/views/public/_case_teaser.php [ 10 ] in file:line
2015-11-13 09:21:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 09:22:09 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'TABLET_LANDSCAPE_NAME' ~ APPPATH/views/public/_case_teaser.php [ 10 ] in file:line
2015-11-13 09:22:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 09:29:32 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:29:32 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(228): AVO_Search_ZendSearch->delete('Model_Article', 239)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:30:19 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:30:19 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(228): AVO_Search_ZendSearch->delete('Model_Article', 240)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:32:45 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:32:45 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(228): AVO_Search_ZendSearch->delete('Model_Article', 241)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:39:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH/classes/Controller/Public.php [ 1320 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:39:22 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1320): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kirill/w...', 1320, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1320
2015-11-13 09:44:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: case ~ APPPATH/views/public/case.php [ 15 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 09:44:11 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/case.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 15, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 09:44:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: case ~ APPPATH/views/public/case.php [ 15 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 09:44:44 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/case.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 15, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 09:46:31 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:46:31 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(228): AVO_Search_ZendSearch->delete('Model_Article', 239)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:46:53 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:46:53 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(228): AVO_Search_ZendSearch->delete('Model_Article', 241)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:46:58 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:46:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(228): AVO_Search_ZendSearch->delete('Model_Article', 240)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:47:02 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:47:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(228): AVO_Search_ZendSearch->delete('Model_Article', 238)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:47:05 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:47:05 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(228): AVO_Search_ZendSearch->delete('Model_Article', 236)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:47:45 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 09:47:45 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(228): AVO_Search_ZendSearch->delete('Model_Article', 242)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 10:01:39 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'NORMAL_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 10:01:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:03:00 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'NORMAL_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 10:03:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:03:06 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'NORMAL_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 10:03:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:03:58 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'STANDARD_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 10:03:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:07:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: case_images ~ APPPATH/views/public/case.php [ 15 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 10:07:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/case.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 15, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 10:07:31 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'NORMAL_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 10:07:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:07:50 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'NORMAL' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 10:07:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:08:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: case_images ~ APPPATH/classes/Controller/Public.php [ 1191 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1191
2015-11-13 10:08:50 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1191): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 1191, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1191
2015-11-13 10:08:58 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'NORMAL_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 10:08:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:09:29 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'NORMAL_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 10:09:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:10:13 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'NORMAL_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 10:10:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:12:02 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'NORMAL_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 10:12:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:15:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/Public.php [ 1181 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1181
2015-11-13 10:15:26 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(1181): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 1181, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_case()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:1181
2015-11-13 10:15:54 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'NORMAL_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 10:15:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:21:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cases ~ APPPATH/views/public/case.php [ 15 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 10:21:16 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/case.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 15, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/case.php:15
2015-11-13 10:21:23 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'NORMAL_NAME' ~ APPPATH/views/public/case.php [ 15 ] in file:line
2015-11-13 10:21:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:51:53 --- EMERGENCY: Kohana_Exception [ 0 ]: Using of undefined property hidden ~ MODPATH/avo/classes/AVO/Abstract/Parametrized/Class.php [ 13 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php:58
2015-11-13 10:51:53 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php(58): AVO_Abstract_Parametrized_Class->_report_undefined_property('hidden')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php(7): AVO_Abstract_Parametrized_Class->__set('hidden', true)
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(150): AVO_Abstract_Parametrized_Class->__construct(Array)
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Grid.php(43): Backend_Cases_Form->__construct()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Cases.php(14): Backend_Cases_Grid->__construct()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Cases->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php:58
2015-11-13 10:52:15 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 190 ] in file:line
2015-11-13 10:52:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 190 ] in file:line
2015-11-13 10:52:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 190 ] in file:line
2015-11-13 10:52:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 190 ] in file:line
2015-11-13 10:52:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 190 ] in file:line
2015-11-13 10:52:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 190 ] in file:line
2015-11-13 10:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 190 ] in file:line
2015-11-13 10:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 190 ] in file:line
2015-11-13 10:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 190 ] in file:line
2015-11-13 10:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 190 ] in file:line
2015-11-13 10:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 190 ] in file:line
2015-11-13 10:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 190 ] in file:line
2015-11-13 10:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 189 ] in file:line
2015-11-13 10:52:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 189 ] in file:line
2015-11-13 10:52:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 189 ] in file:line
2015-11-13 10:52:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 189 ] in file:line
2015-11-13 10:52:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 189 ] in file:line
2015-11-13 10:52:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 189 ] in file:line
2015-11-13 10:52:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:35 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 189 ] in file:line
2015-11-13 10:52:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 188 ] in file:line
2015-11-13 10:52:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 188 ] in file:line
2015-11-13 10:52:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 188 ] in file:line
2015-11-13 10:52:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 188 ] in file:line
2015-11-13 10:52:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 188 ] in file:line
2015-11-13 10:52:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 188 ] in file:line
2015-11-13 10:52:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 188 ] in file:line
2015-11-13 10:52:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 188 ] in file:line
2015-11-13 10:52:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 188 ] in file:line
2015-11-13 10:52:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:52:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 188 ] in file:line
2015-11-13 10:52:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 10:54:11 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 10:54:11 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(229): AVO_Search_ZendSearch->delete('Model_Article', 242)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 10:58:59 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:58:59 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:01 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:01 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:23 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:24 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:24 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:24 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 10:59:24 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:17 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:17 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:18 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:18 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:18 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:18 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:18 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:18 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:18 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:18 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:29 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:30 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:30 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:30 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:31 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:31 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:32 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:33 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:33 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:34 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:34 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:56 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:57 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:57 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:57 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:57 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:57 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:00:57 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:01:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:01:22 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:01:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:01:23 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:01:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:01:23 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:01:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_text property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:01:23 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_tex...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('top_preview_tex...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:03:52 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 11:03:52 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(243): AVO_Search_ZendSearch->delete('Model_Article', 242)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 11:04:42 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 11:04:42 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(243): AVO_Search_ZendSearch->delete('Model_Article', 242)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 11:05:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_image property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:05:46 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_ima...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(327): Kohana_ORM->__get('top_preview_ima...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#3 /Users/kirill/workspace/value_marketing/web/application/views/admin/cases/index.php(3): AVO_Data_Grid->render_object('direct')
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
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#19 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:05:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The top_preview_image property does not exist in the Model_Case class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 11:05:56 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('top_preview_ima...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(327): Kohana_ORM->__get('top_preview_ima...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#3 /Users/kirill/workspace/value_marketing/web/application/views/admin/cases/index.php(3): AVO_Data_Grid->render_object('direct')
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
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#19 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 12:12:37 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 12:12:37 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(243): AVO_Search_ZendSearch->delete('Model_Article', 241)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 12:12:50 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 12:12:50 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(243): AVO_Search_ZendSearch->delete('Model_Article', 239)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 12:13:15 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 12:13:15 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(243): AVO_Search_ZendSearch->delete('Model_Article', 240)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 12:13:47 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 12:13:47 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(243): AVO_Search_ZendSearch->delete('Model_Article', 238)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 12:14:53 --- EMERGENCY: Exception [ 0 ]: Model_Case must implement "AVO_Search_Searchable" ~ MODPATH/avo/classes/AVO/Search/ZendSearch.php [ 105 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:248
2015-11-13 12:14:53 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(248): AVO_Search_ZendSearch->index('Model_Case', 236)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:248
2015-11-13 12:15:40 --- EMERGENCY: Exception [ 0 ]: Model_Case must implement "AVO_Search_Searchable" ~ MODPATH/avo/classes/AVO/Search/ZendSearch.php [ 105 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:248
2015-11-13 12:15:40 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(248): AVO_Search_ZendSearch->index('Model_Case', 242)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:248
2015-11-13 12:18:22 --- EMERGENCY: Exception [ 0 ]: Model_Case must implement "AVO_Search_Searchable" ~ MODPATH/avo/classes/AVO/Search/ZendSearch.php [ 105 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:248
2015-11-13 12:18:22 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(248): AVO_Search_ZendSearch->index('Model_Case', 241)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:248
2015-11-13 12:18:53 --- EMERGENCY: Exception [ 0 ]: Model_Case must implement "AVO_Search_Searchable" ~ MODPATH/avo/classes/AVO/Search/ZendSearch.php [ 105 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:248
2015-11-13 12:18:53 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(248): AVO_Search_ZendSearch->index('Model_Case', 242)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Cases_Form->after_save(Object(AVO_Data_Form_Action_Result))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:248
2015-11-13 12:23:16 --- EMERGENCY: ErrorException [ 8 ]: Indirect modification of overloaded property AVO_Controls_List::$seo_title has no effect ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:16 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(201): Kohana_Core::error_handler(8, 'Indirect modifi...', '/Users/kirill/w...', 201, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): Backend_Cases_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save_draft')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:17 --- EMERGENCY: ErrorException [ 8 ]: Indirect modification of overloaded property AVO_Controls_List::$seo_title has no effect ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:17 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(201): Kohana_Core::error_handler(8, 'Indirect modifi...', '/Users/kirill/w...', 201, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): Backend_Cases_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save_draft')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:17 --- EMERGENCY: ErrorException [ 8 ]: Indirect modification of overloaded property AVO_Controls_List::$seo_title has no effect ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:17 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(201): Kohana_Core::error_handler(8, 'Indirect modifi...', '/Users/kirill/w...', 201, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): Backend_Cases_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save_draft')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:17 --- EMERGENCY: ErrorException [ 8 ]: Indirect modification of overloaded property AVO_Controls_List::$seo_title has no effect ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:17 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(201): Kohana_Core::error_handler(8, 'Indirect modifi...', '/Users/kirill/w...', 201, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): Backend_Cases_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save_draft')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:18 --- EMERGENCY: ErrorException [ 8 ]: Indirect modification of overloaded property AVO_Controls_List::$seo_title has no effect ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:18 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(201): Kohana_Core::error_handler(8, 'Indirect modifi...', '/Users/kirill/w...', 201, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): Backend_Cases_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save_draft')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:18 --- EMERGENCY: ErrorException [ 8 ]: Indirect modification of overloaded property AVO_Controls_List::$seo_title has no effect ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:18 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(201): Kohana_Core::error_handler(8, 'Indirect modifi...', '/Users/kirill/w...', 201, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): Backend_Cases_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save_draft')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:18 --- EMERGENCY: ErrorException [ 8 ]: Indirect modification of overloaded property AVO_Controls_List::$seo_title has no effect ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:18 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(201): Kohana_Core::error_handler(8, 'Indirect modifi...', '/Users/kirill/w...', 201, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): Backend_Cases_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save_draft')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:18 --- EMERGENCY: ErrorException [ 8 ]: Indirect modification of overloaded property AVO_Controls_List::$seo_title has no effect ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:23:18 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(201): Kohana_Core::error_handler(8, 'Indirect modifi...', '/Users/kirill/w...', 201, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): Backend_Cases_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save_draft')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php:201
2015-11-13 12:45:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Grid.php [ 159 ] in file:line
2015-11-13 12:45:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:20:59 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:20:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:01 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:02 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:02 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 200 ] in file:line
2015-11-13 13:21:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:07 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 200 ] in file:line
2015-11-13 13:21:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 200 ] in file:line
2015-11-13 13:21:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 200 ] in file:line
2015-11-13 13:21:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 200 ] in file:line
2015-11-13 13:21:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:49 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:55 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:56 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:56 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:56 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:56 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:59 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:21:59 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:21:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:22:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 193 ] in file:line
2015-11-13 13:22:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:22:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 200 ] in file:line
2015-11-13 13:22:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:23:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:23:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:23:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:23:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:23:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:23:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:23:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:23:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:23:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:23:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:24:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:24:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:24:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 195 ] in file:line
2015-11-13 13:24:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:27:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:27:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:27:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 195 ] in file:line
2015-11-13 13:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:27:43 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:27:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:27:43 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:27:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:27:43 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:27:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:27:44 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:27:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:27:44 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:27:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:27:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 195 ] in file:line
2015-11-13 13:27:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:27:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 195 ] in file:line
2015-11-13 13:27:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:27:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 195 ] in file:line
2015-11-13 13:27:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:27:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 195 ] in file:line
2015-11-13 13:27:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:28:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:28:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:28:01 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 195 ] in file:line
2015-11-13 13:28:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:28:01 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:28:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:28:02 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 195 ] in file:line
2015-11-13 13:28:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:29:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 203 ] in file:line
2015-11-13 13:29:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:30:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 202 ] in file:line
2015-11-13 13:30:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:31:37 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in file:line
2015-11-13 13:31:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:31:38 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 194 ] in file:line
2015-11-13 13:31:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:38:41 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 194 ] in file:line
2015-11-13 13:38:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:38:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 194 ] in file:line
2015-11-13 13:38:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:38:43 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 194 ] in file:line
2015-11-13 13:38:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:38:43 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 194 ] in file:line
2015-11-13 13:38:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:38:43 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 194 ] in file:line
2015-11-13 13:38:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:40:04 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 194 ] in file:line
2015-11-13 13:40:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:57:03 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 194 ] in file:line
2015-11-13 13:57:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:57:04 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 194 ] in file:line
2015-11-13 13:57:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:57:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 194 ] in file:line
2015-11-13 13:57:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:57:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 194 ] in file:line
2015-11-13 13:57:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:57:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 194 ] in file:line
2015-11-13 13:57:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:57:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 194 ] in file:line
2015-11-13 13:57:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:57:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 194 ] in file:line
2015-11-13 13:57:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:59:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in file:line
2015-11-13 13:59:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:59:49 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in file:line
2015-11-13 13:59:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:59:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in file:line
2015-11-13 13:59:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:59:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in file:line
2015-11-13 13:59:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:59:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in file:line
2015-11-13 13:59:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:59:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in file:line
2015-11-13 13:59:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 13:59:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in file:line
2015-11-13 13:59:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 14:00:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in file:line
2015-11-13 14:00:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 14:00:41 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Cases/Form.php [ 201 ] in file:line
2015-11-13 14:00:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 14:13:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/public/_case_teaser.php [ 9 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:40 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php(23): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/public/_case_teaser.php [ 9 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:40 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php(23): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/public/_case_teaser.php [ 9 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:40 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php(23): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/public/_case_teaser.php [ 9 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:40 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php(23): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/public/_case_teaser.php [ 9 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:40 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php(23): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/public/_case_teaser.php [ 9 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:40 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php(23): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/public/_case_teaser.php [ 9 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php(23): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/public/_case_teaser.php [ 9 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php(23): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/public/_case_teaser.php [ 9 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php(23): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/public/_case_teaser.php [ 9 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php(23): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/public/_case_teaser.php [ 9 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php(23): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/public/_case_teaser.php [ 9 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:13:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 9, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/cases.php(23): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(134): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/_case_teaser.php:9
2015-11-13 14:14:05 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'NORMAL_NAME' ~ APPPATH/views/public/_case_teaser.php [ 9 ] in file:line
2015-11-13 14:14:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 14:30:58 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 14:30:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Form.php(356): AVO_Search_ZendSearch->delete('Model_Article', 231)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Articles_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save_draft')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 14:31:15 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 14:31:15 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Form.php(356): AVO_Search_ZendSearch->delete('Model_Article', 231)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Articles_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save_draft')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 14:31:36 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 14:31:36 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Grid.php(189): AVO_Search_ZendSearch->delete('Model_Article', 231)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(243): Backend_Articles_Grid->after_delete(231)
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Grid->handle_action('delete')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 14:32:35 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 14:32:35 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Form.php(356): AVO_Search_ZendSearch->delete('Model_Article', 233)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Articles_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save_draft')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 14:32:50 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 14:32:50 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Grid.php(189): AVO_Search_ZendSearch->delete('Model_Article', 233)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(243): Backend_Articles_Grid->after_delete(233)
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Grid->handle_action('delete')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-13 14:39:54 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_press' in 'where clause' [ SELECT COUNT(*) FROM articles WHERE is_press = 0 AND is_new = 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:39:54 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(91): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(303): AVO_Data_Source_DB->ds_total(NULL, NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/articles/index.php(3): AVO_Data_Grid->render_object('direct')
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:40:22 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_press' in 'where clause' [ SELECT COUNT(*) FROM articles WHERE is_press = 0 AND is_new = 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:40:22 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(91): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(303): AVO_Data_Source_DB->ds_total(NULL, NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/articles/index.php(3): AVO_Data_Grid->render_object('direct')
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:40:48 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_press' in 'where clause' [ SELECT COUNT(*) FROM articles WHERE is_press = 0 AND is_new = 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:40:48 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(91): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(303): AVO_Data_Source_DB->ds_total(NULL, NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/articles/index.php(3): AVO_Data_Grid->render_object('direct')
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:40:54 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_press' in 'where clause' [ SELECT COUNT(*) FROM articles WHERE is_press = 0 AND is_new = 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:40:54 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(91): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(303): AVO_Data_Source_DB->ds_total(NULL, NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/articles/index.php(3): AVO_Data_Grid->render_object('direct')
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:41:33 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_press' in 'where clause' [ SELECT COUNT(*) FROM articles WHERE is_press = 0 AND is_new = 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:41:33 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(91): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(303): AVO_Data_Source_DB->ds_total(NULL, NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/articles/index.php(3): AVO_Data_Grid->render_object('direct')
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:41:47 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_press' in 'where clause' [ SELECT COUNT(*) FROM articles WHERE is_press = 0 AND is_new = 0 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:41:47 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(91): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(303): AVO_Data_Source_DB->ds_total(NULL, NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#4 /Users/kirill/workspace/value_marketing/web/application/views/admin/articles/index.php(3): AVO_Data_Grid->render_object('direct')
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#13 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#20 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:42:12 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY is_draft DESC, frontend_date DESC LIMIT 25 OFFSET 25' at line 1 [ SELECT * FROM articles WHERE ORDER BY is_draft DESC, frontend_date DESC LIMIT 25 OFFSET 25  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:42:12 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM a...', 'Model_Article', Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(132): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(99): AVO_Data_Source_DB->_get_dataset(NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(317): AVO_Data_Source_DB->fetch(NULL)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#5 /Users/kirill/workspace/value_marketing/web/application/views/admin/articles/index.php(3): AVO_Data_Grid->render_object('direct')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:43:00 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY is_draft DESC, frontend_date DESC LIMIT 25 OFFSET 25' at line 1 [ SELECT * FROM articles WHERE ORDER BY is_draft DESC, frontend_date DESC LIMIT 25 OFFSET 25  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:43:00 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM a...', 'Model_Article', Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(132): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(99): AVO_Data_Source_DB->_get_dataset(NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(317): AVO_Data_Source_DB->fetch(NULL)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#5 /Users/kirill/workspace/value_marketing/web/application/views/admin/articles/index.php(3): AVO_Data_Grid->render_object('direct')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:43:02 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY is_draft DESC, frontend_date DESC LIMIT 25 OFFSET 25' at line 1 [ SELECT * FROM articles WHERE ORDER BY is_draft DESC, frontend_date DESC LIMIT 25 OFFSET 25  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:43:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM a...', 'Model_Article', Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(132): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Source/DB.php(99): AVO_Data_Source_DB->_get_dataset(NULL)
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(317): AVO_Data_Source_DB->fetch(NULL)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#5 /Users/kirill/workspace/value_marketing/web/application/views/admin/articles/index.php(3): AVO_Data_Grid->render_object('direct')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/value_marketing/web/application/views/admin/layout.php(105): Kohana_View->__toString()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:47:28 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'a.is_archived' in 'where clause' [ SELECT DISTINCT c.*
						FROM categories c
						JOIN articles_categories ac ON c.id = ac.category_id
						JOIN articles a ON a.id = ac.article_id
						WHERE a.is_archived = 0
						ORDER BY c.ord ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:47:28 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', 'Model_Category', Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(90): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:49:00 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'a.is_archived' in 'where clause' [ SELECT DISTINCT c.*
						FROM categories c
						JOIN articles_categories ac ON c.id = ac.category_id
						JOIN articles a ON a.id = ac.article_id
						WHERE a.is_archived = 0
						ORDER BY c.ord ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:49:00 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', 'Model_Category', Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(90): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:50:20 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'a.is_archived' in 'where clause' [ SELECT DISTINCT c.*
						FROM categories c
						JOIN articles_categories ac ON c.id = ac.category_id
						JOIN articles a ON a.id = ac.article_id
						WHERE a.is_archived = 0
						ORDER BY c.ord ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:50:20 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', 'Model_Category', Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(90): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:51:21 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'a.is_archived' in 'where clause' [ SELECT DISTINCT c.*
						FROM categories c
						JOIN articles_categories ac ON c.id = ac.category_id
						JOIN articles a ON a.id = ac.article_id
						WHERE a.is_archived = 0
						ORDER BY c.ord ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:51:21 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', 'Model_Category', Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(90): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:52:34 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'a.is_archived' in 'where clause' [ SELECT DISTINCT c.*
						FROM categories c
						JOIN articles_categories ac ON c.id = ac.category_id
						JOIN articles a ON a.id = ac.article_id
						WHERE a.is_archived = 0
						ORDER BY c.ord ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:52:34 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', 'Model_Category', Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(90): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:53:05 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'a.is_archived' in 'where clause' [ SELECT DISTINCT c.*
						FROM categories c
						JOIN articles_categories ac ON c.id = ac.category_id
						JOIN articles a ON a.id = ac.article_id
						WHERE a.is_archived = 0
						ORDER BY c.ord ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:53:05 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', 'Model_Category', Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(90): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:54:55 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'a.is_archived' in 'where clause' [ SELECT DISTINCT c.*
						FROM categories c
						JOIN articles_categories ac ON c.id = ac.category_id
						JOIN articles a ON a.id = ac.article_id
						WHERE a.is_archived = 0
						ORDER BY c.ord ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:54:55 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', 'Model_Category', Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(90): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:55:31 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'a.is_archived' in 'where clause' [ SELECT DISTINCT c.*
						FROM categories c
						JOIN articles_categories ac ON c.id = ac.category_id
						JOIN articles a ON a.id = ac.article_id
						WHERE a.is_archived = 0
						ORDER BY c.ord ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:55:31 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', 'Model_Category', Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(90): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:55:33 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'a.is_archived' in 'where clause' [ SELECT DISTINCT c.*
						FROM categories c
						JOIN articles_categories ac ON c.id = ac.category_id
						JOIN articles a ON a.id = ac.article_id
						WHERE a.is_archived = 0
						ORDER BY c.ord ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:55:33 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', 'Model_Category', Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(90): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:55:41 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'a.is_archived' in 'where clause' [ SELECT DISTINCT c.*
						FROM categories c
						JOIN articles_categories ac ON c.id = ac.category_id
						JOIN articles a ON a.id = ac.article_id
						WHERE a.is_archived = 0
						ORDER BY c.ord ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:55:41 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', 'Model_Category', Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(90): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:55:48 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'a.is_archived' in 'where clause' [ SELECT DISTINCT c.*
						FROM categories c
						JOIN articles_categories ac ON c.id = ac.category_id
						JOIN articles a ON a.id = ac.article_id
						WHERE a.is_archived = 0
						ORDER BY c.ord ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:55:48 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', 'Model_Category', Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(90): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:55:52 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'a.is_archived' in 'where clause' [ SELECT DISTINCT c.*
						FROM categories c
						JOIN articles_categories ac ON c.id = ac.category_id
						JOIN articles a ON a.id = ac.article_id
						WHERE a.is_archived = 0
						ORDER BY c.ord ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:55:52 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', 'Model_Category', Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(90): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:55:54 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'a.is_archived' in 'where clause' [ SELECT DISTINCT c.*
						FROM categories c
						JOIN articles_categories ac ON c.id = ac.category_id
						JOIN articles a ON a.id = ac.article_id
						WHERE a.is_archived = 0
						ORDER BY c.ord ASC ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:55:54 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', 'Model_Category', Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(90): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:56:58 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_sticky' in 'order clause' [ SELECT COUNT(`article`.`id`) AS `records_found` FROM `articles` AS `article` WHERE `is_draft` = 0 AND `frontend_date`  ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:56:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(`a...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(1648): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(66): Kohana_ORM->count_all()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:57:24 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_sticky' in 'order clause' [ SELECT COUNT(`article`.`id`) AS `records_found` FROM `articles` AS `article` WHERE `is_draft` = 0 AND `frontend_date`  ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:57:24 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(`a...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(1648): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(66): Kohana_ORM->count_all()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#9 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 14:57:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tv_banners_positions_arr ~ APPPATH/views/public/index.php [ 46 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/index.php:46
2015-11-13 14:57:43 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 46, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(121): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/index.php:46
2015-11-13 14:58:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The is_press property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 14:58:21 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('is_press')
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Model/Article.php(309): Kohana_ORM->__get('is_press')
#2 /Users/kirill/workspace/value_marketing/web/application/views/public/_1_article_teaser.php(4): Model_Article->get_url()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(49): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#15 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(121): AVO_Controller->after()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#17 [internal function]: Kohana_Controller->execute()
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#21 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#22 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 14:58:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The is_press property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 14:58:21 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('is_press')
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Model/Article.php(309): Kohana_ORM->__get('is_press')
#2 /Users/kirill/workspace/value_marketing/web/application/views/public/_2_article_teaser.php(4): Model_Article->get_url()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(52): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#15 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(121): AVO_Controller->after()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#17 [internal function]: Kohana_Controller->execute()
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#21 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#22 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 14:58:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The is_press property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 14:58:21 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('is_press')
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Model/Article.php(309): Kohana_ORM->__get('is_press')
#2 /Users/kirill/workspace/value_marketing/web/application/views/public/_2_article_teaser.php(4): Model_Article->get_url()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(55): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#15 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(121): AVO_Controller->after()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#17 [internal function]: Kohana_Controller->execute()
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#21 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#22 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 14:58:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The is_press property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 14:58:21 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('is_press')
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Model/Article.php(309): Kohana_ORM->__get('is_press')
#2 /Users/kirill/workspace/value_marketing/web/application/views/public/_1_article_teaser.php(4): Model_Article->get_url()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(58): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#15 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(121): AVO_Controller->after()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#17 [internal function]: Kohana_Controller->execute()
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#21 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#22 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 14:58:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The is_press property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 14:58:21 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('is_press')
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Model/Article.php(309): Kohana_ORM->__get('is_press')
#2 /Users/kirill/workspace/value_marketing/web/application/views/public/_1_article_teaser.php(4): Model_Article->get_url()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(49): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#15 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(121): AVO_Controller->after()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#17 [internal function]: Kohana_Controller->execute()
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#21 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#22 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 14:58:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The is_press property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 14:58:22 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('is_press')
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Model/Article.php(309): Kohana_ORM->__get('is_press')
#2 /Users/kirill/workspace/value_marketing/web/application/views/public/_2_article_teaser.php(4): Model_Article->get_url()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(52): Kohana_View->__toString()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#15 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(121): AVO_Controller->after()
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#17 [internal function]: Kohana_Controller->execute()
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#21 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#22 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:01:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The category property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:01:29 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('category')
#1 /Users/kirill/workspace/value_marketing/web/application/views/public/_1_article_teaser.php(10): Kohana_ORM->__get('category')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(49): Kohana_View->__toString()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(121): AVO_Controller->after()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:01:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The category property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:01:29 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('category')
#1 /Users/kirill/workspace/value_marketing/web/application/views/public/_2_article_teaser.php(9): Kohana_ORM->__get('category')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(52): Kohana_View->__toString()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(121): AVO_Controller->after()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:01:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The category property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:01:29 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('category')
#1 /Users/kirill/workspace/value_marketing/web/application/views/public/_2_article_teaser.php(9): Kohana_ORM->__get('category')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(55): Kohana_View->__toString()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(121): AVO_Controller->after()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:01:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The category property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:01:29 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('category')
#1 /Users/kirill/workspace/value_marketing/web/application/views/public/_1_article_teaser.php(10): Kohana_ORM->__get('category')
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
#14 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(121): AVO_Controller->after()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:01:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The category property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:01:29 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('category')
#1 /Users/kirill/workspace/value_marketing/web/application/views/public/_1_article_teaser.php(10): Kohana_ORM->__get('category')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(49): Kohana_View->__toString()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(121): AVO_Controller->after()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:01:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The category property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:01:29 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('category')
#1 /Users/kirill/workspace/value_marketing/web/application/views/public/_2_article_teaser.php(9): Kohana_ORM->__get('category')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/value_marketing/web/application/views/public/index.php(52): Kohana_View->__toString()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#14 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(121): AVO_Controller->after()
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#18 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#21 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:17:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:17:44 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:17:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:17:46 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:17:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:17:46 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:17:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:17:46 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:17:47 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:17:47 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:17:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:17:56 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:18:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:18:44 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:18:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:18:44 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:18:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:18:44 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:18:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:18:44 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:18:45 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:18:45 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:18:45 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:18:45 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:19:04 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_press' in 'where clause' [ SELECT COUNT(*) FROM articles WHERE (293 IS NULL OR id  293) AND is_press = 0 AND url_title = '' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 15:19:04 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(217): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): Backend_Cases_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#5 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#12 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 15:19:08 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_press' in 'where clause' [ SELECT COUNT(*) FROM articles WHERE (293 IS NULL OR id  293) AND is_press = 0 AND url_title = '' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 15:19:08 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(217): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): Backend_Cases_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#5 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#12 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 15:27:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:01 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:36 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:36 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:37 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:37 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:27:49 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_press' in 'where clause' [ SELECT COUNT(*) FROM articles WHERE (296 IS NULL OR id  296) AND is_press = 0 AND url_title = '' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 15:27:49 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(217): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): Backend_Cases_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#5 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#12 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 15:31:16 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:16 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:16 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:16 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:16 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:16 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:17 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:17 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:17 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:17 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:17 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:17 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:17 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:17 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:18 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:18 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:19 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:19 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:19 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:19 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:19 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:19 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:20 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:31:20 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:32:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:32:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:32:35 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:32:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:32:37 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:32:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:37:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:37:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:37:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:37:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:37:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:37:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:38:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:38:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:38:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:38:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:39:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:39:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:42:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:42:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:43:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:43:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:44:06 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:44:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:44:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:44:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:45:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:45:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:45:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:45:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:45:21 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:45:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:45:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:45:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:45:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:45:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:45:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:45:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:46:03 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_press' in 'where clause' [ SELECT COUNT(*) FROM articles WHERE (298 IS NULL OR id  298) AND is_press = 0 AND url_title = '' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 15:46:03 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Cases/Form.php(217): Kohana_Database_Query->execute()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): Backend_Cases_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#5 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Cases))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#12 {main} in /Users/kirill/workspace/value_marketing/web/modules/database/classes/Kohana/Database/Query.php:251
2015-11-13 15:46:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:46:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:46:53 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:46:53 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:46:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:46:54 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:46:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:46:55 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:46:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:46:55 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 15:48:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 160 ] in file:line
2015-11-13 15:48:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:49:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method AVO_Controls_List::url_title() ~ APPPATH/classes/Backend/Articles/Grid.php [ 160 ] in file:line
2015-11-13 15:49:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:49:37 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 160 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Grid.php:160
2015-11-13 15:49:37 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Grid.php(160): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/kirill/w...', 160, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(358): Backend_Articles_Grid->on_calc()
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Grid.php(532): AVO_Data_Grid->handle_action(NULL, true)
#3 /Users/kirill/workspace/value_marketing/web/application/views/admin/articles/index.php(3): AVO_Data_Grid->render_object('direct')
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
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#16 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#19 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Grid.php:160
2015-11-13 15:49:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 160 ] in file:line
2015-11-13 15:49:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:50:01 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 160 ] in file:line
2015-11-13 15:50:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:50:11 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 160 ] in file:line
2015-11-13 15:50:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:51:44 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:51:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:52:02 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:52:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:53:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:53:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 15:56:59 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 15:56:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:01:10 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 16:01:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:02:13 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 16:02:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:02:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 16:02:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:02:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 152 ] in file:line
2015-11-13 16:02:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:03:06 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 152 ] in file:line
2015-11-13 16:03:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:03:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 152 ] in file:line
2015-11-13 16:03:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:03:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 152 ] in file:line
2015-11-13 16:03:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:03:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 152 ] in file:line
2015-11-13 16:03:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:03:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 152 ] in file:line
2015-11-13 16:03:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:03:39 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 152 ] in file:line
2015-11-13 16:03:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:04:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 16:04:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:04:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:04:29 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:04:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:04:32 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:04:40 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 16:04:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:05:10 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ APPPATH/classes/Backend/Articles/Grid.php [ 158 ] in file:line
2015-11-13 16:05:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:07:31 --- EMERGENCY: Kohana_Exception [ 0 ]: The seo_title property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:07:31 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('seo_title')
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(705): Kohana_ORM->__get('seo_title')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_article()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:07:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The seo_title property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:07:36 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('seo_title')
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(705): Kohana_ORM->__get('seo_title')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_article()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:08:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: all_articles ~ APPPATH/classes/Controller/Public.php [ 722 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:722
2015-11-13 16:08:02 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(722): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 722, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_article()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:722
2015-11-13 16:08:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: url_titles_array ~ APPPATH/classes/Controller/Public.php [ 721 ] in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:721
2015-11-13 16:08:34 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(721): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 721, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_article()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php:721
2015-11-13 16:08:45 --- EMERGENCY: Kohana_Exception [ 0 ]: The seo_title property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:08:45 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('seo_title')
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(735): Kohana_ORM->__get('seo_title')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_article()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:09:16 --- EMERGENCY: Kohana_Exception [ 0 ]: The seo_description property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:09:16 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('seo_description')
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(728): Kohana_ORM->__get('seo_description')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_article()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:09:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The seo_description property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:09:26 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('seo_description')
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(728): Kohana_ORM->__get('seo_description')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_article()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:09:35 --- EMERGENCY: Kohana_Exception [ 0 ]: The seo_description property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:09:35 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('seo_description')
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(728): Kohana_ORM->__get('seo_description')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_article()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:09:47 --- EMERGENCY: Kohana_Exception [ 0 ]: The are_comments_disabled property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:09:47 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('are_comments_di...')
#1 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Public.php(740): Kohana_ORM->__get('are_comments_di...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Public->action_article()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#8 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:10:11 --- EMERGENCY: Kohana_Exception [ 0 ]: The subtitle property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:10:11 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('subtitle')
#1 /Users/kirill/workspace/value_marketing/web/application/views/public/article.php(65): Kohana_ORM->__get('subtitle')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(163): Kohana_View->__toString()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(121): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:05 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:05 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:06 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:06 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:06 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:06 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:10 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:10 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:11 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:11 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:11 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:11 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:11 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:11 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:18 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:18 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:29 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:30 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:30 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:31 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:31 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:31 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:31 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:42 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:43 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:43 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:11:44 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:12:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:12:28 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:12:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:12:28 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:12:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:12:28 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:12:48 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:12:48 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:12:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:12:49 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:14:12 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:14:12 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:17:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:17:01 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:40 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:40 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:41 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:41 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:42 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:42 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:42 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:42 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:46 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:46 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:48 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:48 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:22:49 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:26:45 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:26:45 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:31:12 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:31:12 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:31:18 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:31:18 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:31:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:31:24 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:32:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:32:00 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:32:59 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:32:59 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:33:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:33:30 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:26 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:31 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:31 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:57 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:57 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:57 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:57 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:34:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:37:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:37:09 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:38:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:38:22 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:39:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:39:23 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:39:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:39:36 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:39:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:39:37 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:39:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:39:38 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:42:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:42:49 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:42:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:42:49 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:42:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:42:49 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:42:50 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:42:50 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:42:50 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:42:50 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:53 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:53 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:54 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:54 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:54 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:54 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:55 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:56 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:57 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:57 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:44:58 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:46:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:46:00 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:46:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:46:01 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:49:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:49:23 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:51:39 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:51:39 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:51:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:51:43 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:53:02 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'CATEGORY_PORTRAIT' ~ APPPATH/classes/Backend/Articles/Form.php [ 159 ] in file:line
2015-11-13 16:53:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 16:57:58 --- EMERGENCY: ErrorException [ 2 ]: constant(): Couldn't find constant Article::FORM_PREVIEW_W ~ MODPATH/avo/classes/Backend/Image/Upload/Field/Set.php [ 105 ] in file:line
2015-11-13 16:57:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'constant(): Cou...', '/Users/kirill/w...', 105, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Backend/Image/Upload/Field/Set.php(105): constant('Article::FORM_P...')
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Form.php(175): Backend_Image_Upload_Field_Set->__construct(Array)
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Grid.php(46): Backend_Articles_Form->__construct()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Articles.php(14): Backend_Articles_Grid->__construct()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Articles->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in file:line
2015-11-13 16:58:33 --- EMERGENCY: ErrorException [ 2 ]: constant(): Couldn't find constant _Article::FORM_PREVIEW_W ~ MODPATH/avo/classes/Backend/Image/Upload/Field/Set.php [ 105 ] in file:line
2015-11-13 16:58:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'constant(): Cou...', '/Users/kirill/w...', 105, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Backend/Image/Upload/Field/Set.php(105): constant('_Article::FORM_...')
#2 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Form.php(175): Backend_Image_Upload_Field_Set->__construct(Array)
#3 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Grid.php(46): Backend_Articles_Form->__construct()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Articles.php(14): Backend_Articles_Grid->__construct()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Articles->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in file:line
2015-11-13 16:59:59 --- EMERGENCY: Kohana_Exception [ 0 ]: The video_url property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 16:59:59 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('video_url')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(299): Kohana_ORM->__get('video_url')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('get_data')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#4 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in /Users/kirill/workspace/value_marketing/web/modules/orm/classes/Kohana/ORM.php:603
2015-11-13 17:02:03 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ MODPATH/avo/classes/AVO/Data/Form.php [ 481 ] in file:line
2015-11-13 17:02:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 17:02:04 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ MODPATH/avo/classes/AVO/Data/Form.php [ 481 ] in file:line
2015-11-13 17:02:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-13 17:02:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function value() on a non-object ~ MODPATH/avo/classes/AVO/Data/Form.php [ 481 ] in file:line
2015-11-13 17:02:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line