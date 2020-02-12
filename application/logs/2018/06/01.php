<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-06-01 12:48:11 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Result_Cached::__construct() must be of the type array, boolean given, called in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php on line 246 and defined ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 13 ] in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php:13
2018-06-01 12:48:11 --- DEBUG: #0 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php(13): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/apollo...', 13, Array)
#1 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php(246): Kohana_Database_Result_Cached->__construct(false, 'SELECT kind, ch...', false, Array)
#2 /var/www/apollon/data/www/modules/avo/classes/Model/Variable.php(37): Kohana_Database_Query->execute()
#3 /var/www/apollon/data/www/application/classes/Controller/Public.php(21): Model_Variable::value_by_name('contact_phone', true)
#4 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#7 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#10 {main} in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php:13
2018-06-01 12:48:11 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Result_Cached::__construct() must be of the type array, boolean given, called in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php on line 246 and defined ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 13 ] in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php:13
2018-06-01 12:48:11 --- DEBUG: #0 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php(13): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/apollo...', 13, Array)
#1 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php(246): Kohana_Database_Result_Cached->__construct(false, 'SELECT kind, ch...', false, Array)
#2 /var/www/apollon/data/www/modules/avo/classes/Model/Variable.php(37): Kohana_Database_Query->execute()
#3 /var/www/apollon/data/www/application/classes/Controller/Public.php(21): Model_Variable::value_by_name('contact_phone', true)
#4 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#7 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#10 {main} in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php:13