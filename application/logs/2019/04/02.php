<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-04-02 08:41:07 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Result_Cached::__construct() must be of the type array, boolean given, called in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php on line 246 and defined ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 13 ] in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php:13
2019-04-02 08:41:07 --- DEBUG: #0 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php(13): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/apollo...', 13, Array)
#1 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php(246): Kohana_Database_Result_Cached->__construct(false, 'SELECT kind, ch...', false, Array)
#2 /var/www/apollon/data/www/modules/avo/classes/Model/Variable.php(37): Kohana_Database_Query->execute()
#3 /var/www/apollon/data/www/application/classes/Controller/Abstract/Public.php(31): Model_Variable::value_by_name('facebook_applic...', true)
#4 /var/www/apollon/data/www/application/classes/Controller/Public.php(13): Controller_Abstract_Public->before()
#5 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#8 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/apollon/data/www/application/classes/HTTP/Exception/404.php(8): Kohana_Request->execute()
#11 /var/www/apollon/data/www/system/classes/Kohana/Request.php(976): HTTP_Exception_404->get_response()
#12 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#13 {main} in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php:13
2019-04-02 08:41:07 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Result_Cached::__construct() must be of the type array, boolean given, called in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php on line 246 and defined ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 13 ] in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php:13
2019-04-02 08:41:07 --- DEBUG: #0 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php(13): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/apollo...', 13, Array)
#1 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php(246): Kohana_Database_Result_Cached->__construct(false, 'SELECT kind, ch...', false, Array)
#2 /var/www/apollon/data/www/modules/avo/classes/Model/Variable.php(37): Kohana_Database_Query->execute()
#3 /var/www/apollon/data/www/application/classes/Controller/Abstract/Public.php(31): Model_Variable::value_by_name('facebook_applic...', true)
#4 /var/www/apollon/data/www/application/classes/Controller/Public.php(13): Controller_Abstract_Public->before()
#5 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#8 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/apollon/data/www/application/classes/HTTP/Exception/404.php(8): Kohana_Request->execute()
#11 /var/www/apollon/data/www/system/classes/Kohana/Request.php(976): HTTP_Exception_404->get_response()
#12 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#13 {main} in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php:13