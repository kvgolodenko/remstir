<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2020-01-22 23:09:19 --- EMERGENCY: ErrorException [ 8 ]: tempnam(): file created in the system's temporary directory ~ MODPATH/avo/classes/qqFileUploader.php [ 19 ] in file:line
2020-01-22 23:09:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'tempnam(): file...', '/Users/kirill/w...', 19, Array)
#1 /Users/kirill/workspace/remstir/modules/avo/classes/qqFileUploader.php(19): tempnam('/var/www/apollo...', 'upload')
#2 /Users/kirill/workspace/remstir/modules/avo/classes/Backend/Image/Upload/Field.php(133): qqUploadedFileXhr->getTmpFileName()
#3 /Users/kirill/workspace/remstir/modules/avo/classes/Backend/Image/Upload/Field.php(49): Backend_Image_Upload_Field->action_handler(Object(AVO_Data_Form_Action_Result))
#4 /Users/kirill/workspace/remstir/modules/avo/classes/AVO/Data/Form.php(248): Backend_Image_Upload_Field->{closure}(Object(AVO_Data_Form_Action_Result))
#5 /Users/kirill/workspace/remstir/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Form->handle_action('upload_image')
#6 /Users/kirill/workspace/remstir/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#7 /Users/kirill/workspace/remstir/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#8 /Users/kirill/workspace/remstir/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kirill/workspace/remstir/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Startpage))
#11 /Users/kirill/workspace/remstir/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kirill/workspace/remstir/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kirill/workspace/remstir/public/index.php(129): Kohana_Request->execute()
#14 {main} in file:line