<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-01-20 08:35:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g-recaptcha-response ~ APPPATH/classes/Controller/Public.php [ 116 ] in /var/www/apollon/data/www/application/classes/Controller/Public.php:116
2018-01-20 08:35:06 --- DEBUG: #0 /var/www/apollon/data/www/application/classes/Controller/Public.php(116): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/apollo...', 116, Array)
#1 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#7 {main} in /var/www/apollon/data/www/application/classes/Controller/Public.php:116
2018-01-20 10:29:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g-recaptcha-response ~ APPPATH/classes/Controller/Public.php [ 116 ] in /var/www/apollon/data/www/application/classes/Controller/Public.php:116
2018-01-20 10:29:15 --- DEBUG: #0 /var/www/apollon/data/www/application/classes/Controller/Public.php(116): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/apollo...', 116, Array)
#1 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#7 {main} in /var/www/apollon/data/www/application/classes/Controller/Public.php:116
2018-01-20 14:19:27 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Result_Cached::__construct() must be of the type array, boolean given, called in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php on line 246 and defined ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 13 ] in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php:13
2018-01-20 14:19:27 --- DEBUG: #0 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php(13): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/apollo...', 13, Array)
#1 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php(246): Kohana_Database_Result_Cached->__construct(false, 'SELECT `categor...', 'Model_Category', Array)
#2 /var/www/apollon/data/www/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#3 /var/www/apollon/data/www/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#4 /var/www/apollon/data/www/application/classes/Controller/Public.php(44): Kohana_ORM->find_all()
#5 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#8 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#11 {main} in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php:13
2018-01-20 18:42:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g-recaptcha-response ~ APPPATH/classes/Controller/Public.php [ 116 ] in /var/www/apollon/data/www/application/classes/Controller/Public.php:116
2018-01-20 18:42:26 --- DEBUG: #0 /var/www/apollon/data/www/application/classes/Controller/Public.php(116): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/apollo...', 116, Array)
#1 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#7 {main} in /var/www/apollon/data/www/application/classes/Controller/Public.php:116
2018-01-20 18:44:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g-recaptcha-response ~ APPPATH/classes/Controller/Public.php [ 116 ] in /var/www/apollon/data/www/application/classes/Controller/Public.php:116
2018-01-20 18:44:10 --- DEBUG: #0 /var/www/apollon/data/www/application/classes/Controller/Public.php(116): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/apollo...', 116, Array)
#1 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#7 {main} in /var/www/apollon/data/www/application/classes/Controller/Public.php:116
2018-01-20 19:40:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g-recaptcha-response ~ APPPATH/classes/Controller/Public.php [ 116 ] in /var/www/apollon/data/www/application/classes/Controller/Public.php:116
2018-01-20 19:40:30 --- DEBUG: #0 /var/www/apollon/data/www/application/classes/Controller/Public.php(116): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/apollo...', 116, Array)
#1 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#7 {main} in /var/www/apollon/data/www/application/classes/Controller/Public.php:116
2018-01-20 19:40:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g-recaptcha-response ~ APPPATH/classes/Controller/Public.php [ 116 ] in /var/www/apollon/data/www/application/classes/Controller/Public.php:116
2018-01-20 19:40:51 --- DEBUG: #0 /var/www/apollon/data/www/application/classes/Controller/Public.php(116): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/apollo...', 116, Array)
#1 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#7 {main} in /var/www/apollon/data/www/application/classes/Controller/Public.php:116
2018-01-20 19:41:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g-recaptcha-response ~ APPPATH/classes/Controller/Public.php [ 116 ] in /var/www/apollon/data/www/application/classes/Controller/Public.php:116
2018-01-20 19:41:18 --- DEBUG: #0 /var/www/apollon/data/www/application/classes/Controller/Public.php(116): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/apollo...', 116, Array)
#1 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#7 {main} in /var/www/apollon/data/www/application/classes/Controller/Public.php:116