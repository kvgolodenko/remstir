<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-05 09:29:59 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-05 09:29:59 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Form.php(356): AVO_Search_ZendSearch->delete('Model_Article', 210)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Articles_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(128): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-05 09:55:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: case_teasers ~ APPPATH/views/public/work_in_vm.php [ 18 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/work_in_vm.php:18
2015-11-05 09:55:11 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/work_in_vm.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 18, Array)
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
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(128): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/work_in_vm.php:18
2015-11-05 15:47:04 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-05 15:47:04 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Form.php(356): AVO_Search_ZendSearch->delete('Model_Article', 210)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Articles_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(128): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-05 15:47:19 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-05 15:47:19 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Form.php(356): AVO_Search_ZendSearch->delete('Model_Article', 210)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Articles_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(128): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-05 15:48:28 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-05 15:48:28 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Form.php(356): AVO_Search_ZendSearch->delete('Model_Article', 210)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Articles_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(128): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-05 15:49:40 --- EMERGENCY: ZendSearch\Lucene\Exception\RuntimeException [ 0 ]:  ~ MODPATH/zend/library/ZendSearch/Lucene/Storage/File/Filesystem.php [ 55 ] in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-05 15:49:40 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php(174): ZendSearch\Lucene\Storage\File\Filesystem->__construct('/Users/kirill/w...', 'w+b')
#1 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/LockManager.php(118): ZendSearch\Lucene\Storage\Directory\Filesystem->createFile('read.lock.file')
#2 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Index.php(380): ZendSearch\Lucene\LockManager::obtainReadLock(Object(ZendSearch\Lucene\Storage\Directory\Filesystem))
#3 /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Lucene.php(67): ZendSearch\Lucene\Index->__construct('/Users/kirill/w...', false)
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(78): ZendSearch\Lucene\Lucene::open('/Users/kirill/w...')
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Search/ZendSearch.php(90): AVO_Search_ZendSearch->get_index('Model_Article')
#6 /Users/kirill/workspace/value_marketing/web/application/classes/Backend/Articles/Form.php(356): AVO_Search_ZendSearch->delete('Model_Article', 210)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): Backend_Articles_Form->after_save(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(128): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/zend/library/ZendSearch/Lucene/Storage/Directory/Filesystem.php:174
2015-11-05 16:56:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/public/work_in_vm.php [ 21 ] in file:line
2015-11-05 16:56:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line