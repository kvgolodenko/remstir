<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-12-16 08:15:49 --- INFO: Admin sh has been logged in from IP ::1 in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php:246
2015-12-16 08:23:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: job_header ~ APPPATH/views/public/work_in_vm.php [ 17 ] in /Users/kirill/workspace/value_marketing/web/application/views/public/work_in_vm.php:17
2015-12-16 08:23:35 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/application/views/public/work_in_vm.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(162): Kohana_View->__toString()
#5 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#9 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(122): AVO_Controller->after()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#16 {main} in /Users/kirill/workspace/value_marketing/web/application/views/public/work_in_vm.php:17
2015-12-16 11:24:38 --- EMERGENCY: ErrorException [ 2 ]: rename(/Users/kirill/workspace/value_marketing/web/htdocs/assets/tmp/56710dfb009814-94405527_19original.jpeg,/Users/kirill/workspace/value_marketing/web/htdocs/assets/job_image/1/cb9abb7ab8501d43dfd19f6f73a8b181/original.jpeg): No such file or directory ~ MODPATH/avo/classes/Model/Generic/Image.php [ 250 ] in file:line
2015-12-16 11:24:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rename(/Users/k...', '/Users/kirill/w...', 250, Array)
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Model/Generic/Image.php(250): rename('/Users/kirill/w...', '/Users/kirill/w...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Backend/Image/Upload/Field.php(227): Model_Generic_Image::move_images('/Users/kirill/w...', '/Users/kirill/w...', 'jpeg')
#3 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(542): Backend_Image_Upload_Field->after_save(Object(AVO_Data_Form_Action_Result))
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(208): AVO_Data_Form->after_save(Object(AVO_Data_Form_Action_Result))
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#6 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#7 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Workinvm))
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#14 {main} in file:line
2015-12-16 11:37:42 --- EMERGENCY: Kohana_Exception [ 0 ]: Using of undefined property is_upload_mandatory ~ MODPATH/avo/classes/AVO/Abstract/Parametrized/Class.php [ 13 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php:28
2015-12-16 11:37:42 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php(28): AVO_Abstract_Parametrized_Class->_report_undefined_property('is_upload_manda...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php(40): AVO_Abstract_Parametrized_Class->get('is_upload_manda...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Backend/Image/Upload/Field/Set.php(301): AVO_Abstract_Parametrized_Class->__get('is_upload_manda...')
#3 [internal function]: Backend_Image_Upload_Field_Set->on_validate_title(Object(AVO_Field), Object(AVO_Controls_List))
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Validator/Custom.php(16): call_user_func(Array, Object(AVO_Field), Object(AVO_Controls_List))
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controls/List.php(205): AVO_Validator_Custom->validate(Object(AVO_Field), Object(AVO_Controls_List))
#6 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(521): AVO_Controls_List->validate(NULL)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): AVO_Data_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Workinvm))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php:28
2015-12-16 11:38:52 --- EMERGENCY: Kohana_Exception [ 0 ]: Using of undefined property is_upload_mandatory ~ MODPATH/avo/classes/AVO/Abstract/Parametrized/Class.php [ 13 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php:28
2015-12-16 11:38:52 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php(28): AVO_Abstract_Parametrized_Class->_report_undefined_property('is_upload_manda...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php(40): AVO_Abstract_Parametrized_Class->get('is_upload_manda...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Backend/Image/Upload/Field/Set.php(301): AVO_Abstract_Parametrized_Class->__get('is_upload_manda...')
#3 [internal function]: Backend_Image_Upload_Field_Set->on_validate_title(Object(AVO_Field), Object(AVO_Controls_List))
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Validator/Custom.php(16): call_user_func(Array, Object(AVO_Field), Object(AVO_Controls_List))
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controls/List.php(205): AVO_Validator_Custom->validate(Object(AVO_Field), Object(AVO_Controls_List))
#6 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(521): AVO_Controls_List->validate(NULL)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): AVO_Data_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Workinvm))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php:28
2015-12-16 11:39:52 --- EMERGENCY: Kohana_Exception [ 0 ]: Using of undefined property is_upload_mandatory ~ MODPATH/avo/classes/AVO/Abstract/Parametrized/Class.php [ 13 ] in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php:28
2015-12-16 11:39:52 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php(28): AVO_Abstract_Parametrized_Class->_report_undefined_property('is_upload_manda...')
#1 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php(40): AVO_Abstract_Parametrized_Class->get('is_upload_manda...')
#2 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/Backend/Image/Upload/Field/Set.php(301): AVO_Abstract_Parametrized_Class->__get('is_upload_manda...')
#3 [internal function]: Backend_Image_Upload_Field_Set->on_validate_title(Object(AVO_Field), Object(AVO_Controls_List))
#4 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Validator/Custom.php(16): call_user_func(Array, Object(AVO_Field), Object(AVO_Controls_List))
#5 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controls/List.php(205): AVO_Validator_Custom->validate(Object(AVO_Field), Object(AVO_Controls_List))
#6 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(521): AVO_Controls_List->validate(NULL)
#7 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Data/Form.php(176): AVO_Data_Form->on_validate(Object(AVO_Data_Form_Action_Result))
#8 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('save')
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Workinvm))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Abstract/Parametrized/Class.php:28
2015-12-16 11:43:21 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'SUBMENU_APPFORM' ~ APPPATH/classes/Controller/Admin/Workinvm.php [ 22 ] in file:line
2015-12-16 11:43:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-16 11:43:30 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'SUBMENU_APPFORM' ~ APPPATH/classes/Controller/Admin/Workinvm.php [ 22 ] in file:line
2015-12-16 11:43:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-16 11:43:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Workinvm_Appform_Form' not found ~ APPPATH/classes/Controller/Admin/Workinvm.php [ 51 ] in file:line
2015-12-16 11:43:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-16 11:43:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Workinvm_Appform_Form' not found ~ APPPATH/classes/Controller/Admin/Workinvm.php [ 51 ] in file:line
2015-12-16 11:43:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-16 11:46:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Job_Info_Image' not found ~ APPPATH/classes/Controller/Public.php [ 32 ] in file:line
2015-12-16 11:46:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-16 11:47:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Job_Info_Image' not found ~ APPPATH/classes/Controller/Public.php [ 32 ] in file:line
2015-12-16 11:47:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-16 11:47:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Job_Info_Image' not found ~ APPPATH/classes/Controller/Public.php [ 32 ] in file:line
2015-12-16 11:47:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-16 14:24:59 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_HTML::attributes() must be of the type array, string given, called in /Users/kirill/workspace/value_marketing/web/application/views/public/blog_article.php on line 46 and defined ~ SYSPATH/classes/Kohana/HTML.php [ 293 ] in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/HTML.php:293
2015-12-16 14:24:59 --- DEBUG: #0 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/HTML.php(293): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/kirill/w...', 293, Array)
#1 /Users/kirill/workspace/value_marketing/web/application/views/public/blog_article.php(46): Kohana_HTML::attributes('<p>Some additio...')
#2 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#3 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#4 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/kirill/workspace/value_marketing/web/application/views/public/layout.php(162): Kohana_View->__toString()
#6 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(61): include('/Users/kirill/w...')
#7 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kirill/w...', Array)
#8 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Users/kirill/workspace/value_marketing/web/modules/avo/classes/AVO/Controller.php(151): Kohana_Controller_Template->after()
#10 /Users/kirill/workspace/value_marketing/web/application/classes/Controller/Abstract/Public.php(122): AVO_Controller->after()
#11 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Controller.php(87): Controller_Abstract_Public->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#14 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/kirill/workspace/value_marketing/web/htdocs/index.php(129): Kohana_Request->execute()
#17 {main} in /Users/kirill/workspace/value_marketing/web/system/classes/Kohana/HTML.php:293