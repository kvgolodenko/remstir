<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-18 10:22:49 --- EMERGENCY: ErrorException [ 2 ]: constant(): Couldn't find constant Model_Blog_Article::FORM_PREVIEW_W ~ MODPATH/avo/classes/Backend/Image/Upload/Field/Set.php [ 105 ] in file:line
2016-02-18 10:22:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'constant(): Cou...', '/Users/kirill/w...', 105, Array)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/Backend/Image/Upload/Field/Set.php(105): constant('Model_Blog_Arti...')
#2 /Users/kirill/workspace/apollon/web/application/classes/Backend/Blog/Form.php(111): Backend_Image_Upload_Field_Set->__construct(Array)
#3 /Users/kirill/workspace/apollon/web/application/classes/Backend/Blog/Grid.php(47): Backend_Blog_Form->__construct()
#4 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Blog.php(22): Backend_Blog_Grid->__construct()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Blog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blog))
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in file:line
2016-02-18 10:22:56 --- EMERGENCY: ErrorException [ 2 ]: constant(): Couldn't find constant Model_Blog_Article::FORM_PREVIEW_W ~ MODPATH/avo/classes/Backend/Image/Upload/Field/Set.php [ 105 ] in file:line
2016-02-18 10:22:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'constant(): Cou...', '/Users/kirill/w...', 105, Array)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/Backend/Image/Upload/Field/Set.php(105): constant('Model_Blog_Arti...')
#2 /Users/kirill/workspace/apollon/web/application/classes/Backend/Blog/Form.php(111): Backend_Image_Upload_Field_Set->__construct(Array)
#3 /Users/kirill/workspace/apollon/web/application/classes/Backend/Blog/Grid.php(47): Backend_Blog_Form->__construct()
#4 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Blog.php(22): Backend_Blog_Grid->__construct()
#5 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Blog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blog))
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#11 {main} in file:line
2016-02-18 10:23:30 --- EMERGENCY: ErrorException [ 2 ]: constant(): Couldn't find constant Model_Blog_Image::FORM_PREVIEW_W ~ MODPATH/avo/classes/Backend/Image/Upload/Field/Set.php [ 105 ] in file:line
2016-02-18 10:23:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'constant(): Cou...', '/Users/kirill/w...', 105, Array)
#1 /Users/kirill/workspace/apollon/web/modules/avo/classes/Backend/Image/Upload/Field/Set.php(105): constant('Model_Blog_Imag...')
#2 /Users/kirill/workspace/apollon/web/application/classes/Backend/Blog/Images/Form.php(29): Backend_Image_Upload_Field_Set->__construct(Array)
#3 /Users/kirill/workspace/apollon/web/application/classes/Backend/Blog/Images/Grid.php(39): Backend_Blog_Images_Form->__construct()
#4 /Users/kirill/workspace/apollon/web/application/classes/Backend/Blog/Form.php(146): Backend_Blog_Images_Grid->__construct()
#5 /Users/kirill/workspace/apollon/web/application/classes/Backend/Blog/Grid.php(47): Backend_Blog_Form->__construct()
#6 /Users/kirill/workspace/apollon/web/application/classes/Controller/Admin/Blog.php(22): Backend_Blog_Grid->__construct()
#7 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(84): Controller_Admin_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blog))
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#13 {main} in file:line
2016-02-18 10:24:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Blog_Grid' not found ~ APPPATH/classes/Controller/Admin/Blog.php [ 22 ] in file:line
2016-02-18 10:24:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 10:24:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Blog_Grid' not found ~ APPPATH/classes/Controller/Admin/Blog.php [ 22 ] in file:line
2016-02-18 10:24:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 10:24:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_Blog_Grid' not found ~ APPPATH/classes/Controller/Admin/Blog.php [ 22 ] in file:line
2016-02-18 10:24:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 10:30:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Backend_News_Images_Grid' not found ~ APPPATH/classes/Backend/News/Form.php [ 146 ] in file:line
2016-02-18 10:30:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 10:33:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Backend/News/Form.php [ 170 ] in file:line
2016-02-18 10:33:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 10:34:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Backend/News/Form.php [ 170 ] in file:line
2016-02-18 10:34:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 10:34:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Backend/News/Form.php [ 170 ] in file:line
2016-02-18 10:34:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 10:34:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Backend/News/Form.php [ 170 ] in file:line
2016-02-18 10:34:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 10:34:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Backend/News/Form.php [ 170 ] in file:line
2016-02-18 10:34:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 10:34:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Backend/News/Form.php [ 172 ] in file:line
2016-02-18 10:34:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 16:32:56 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_SOCIAL' ~ APPPATH/classes/Controller/Admin/Contacts.php [ 19 ] in file:line
2016-02-18 16:32:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 16:33:25 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_SOCIAL' ~ APPPATH/classes/Controller/Admin/Contacts.php [ 21 ] in file:line
2016-02-18 16:33:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 16:33:28 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_SOCIAL' ~ APPPATH/classes/Controller/Admin/Contacts.php [ 21 ] in file:line
2016-02-18 16:33:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 16:33:44 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_SOCIAL' ~ APPPATH/classes/Controller/Admin/Contacts.php [ 21 ] in file:line
2016-02-18 16:33:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 16:34:16 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'MENU_SOCIAL' ~ APPPATH/classes/Controller/Admin/Contacts.php [ 21 ] in file:line
2016-02-18 16:34:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-18 22:57:09 --- INFO: Admin ki has been logged in from IP fe80::c62c:3ff:fe1f:495d in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:246