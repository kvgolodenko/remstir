<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-07-21 13:04:23 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Result_Cached::__construct() must be of the type array, boolean given, called in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php on line 246 and defined ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 13 ] in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php:13
2017-07-21 13:04:23 --- DEBUG: #0 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php(13): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/apollo...', 13, Array)
#1 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php(246): Kohana_Database_Result_Cached->__construct(false, 'SELECT `categor...', 'Model_Category', Array)
#2 /var/www/apollon/data/www/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#3 /var/www/apollon/data/www/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#4 /var/www/apollon/data/www/application/classes/Controller/Public.php(45): Kohana_ORM->find_all()
#5 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#8 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#11 {main} in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php:13