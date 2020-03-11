<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2020-02-24 19:54:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: data ~ APPPATH/classes/Controller/Public.php [ 355 ] in /Users/kirill/workspace/remstir/application/classes/Controller/Public.php:355
2020-02-24 19:54:28 --- DEBUG: #0 /Users/kirill/workspace/remstir/application/classes/Controller/Public.php(355): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kirill/w...', 355, Array)
#1 /Users/kirill/workspace/remstir/system/classes/Kohana/Controller.php(84): Controller_Public->action_sendSms()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/remstir/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/remstir/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/remstir/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/remstir/public/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/remstir/application/classes/Controller/Public.php:355
2020-02-24 19:55:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: data ~ APPPATH/classes/Controller/Public.php [ 355 ] in /Users/kirill/workspace/remstir/application/classes/Controller/Public.php:355
2020-02-24 19:55:13 --- DEBUG: #0 /Users/kirill/workspace/remstir/application/classes/Controller/Public.php(355): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/kirill/w...', 355, Array)
#1 /Users/kirill/workspace/remstir/system/classes/Kohana/Controller.php(84): Controller_Public->action_sendSms()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/remstir/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/remstir/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/remstir/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/remstir/public/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/remstir/application/classes/Controller/Public.php:355
2020-02-24 19:56:22 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Public.php [ 355 ] in /Users/kirill/workspace/remstir/application/classes/Controller/Public.php:355
2020-02-24 19:56:22 --- DEBUG: #0 /Users/kirill/workspace/remstir/application/classes/Controller/Public.php(355): Kohana_Core::error_handler(8, 'Array to string...', '/Users/kirill/w...', 355, Array)
#1 /Users/kirill/workspace/remstir/system/classes/Kohana/Controller.php(84): Controller_Public->action_sendSms()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/remstir/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/remstir/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/remstir/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/remstir/public/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/remstir/application/classes/Controller/Public.php:355
2020-02-24 20:18:49 --- EMERGENCY: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH/classes/Controller/Public.php [ 376 ] in /Users/kirill/workspace/remstir/application/classes/Controller/Public.php:376
2020-02-24 20:18:49 --- DEBUG: #0 /Users/kirill/workspace/remstir/application/classes/Controller/Public.php(376): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/kirill/w...', 376, Array)
#1 /Users/kirill/workspace/remstir/system/classes/Kohana/Controller.php(84): Controller_Public->action_sendSms()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kirill/workspace/remstir/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /Users/kirill/workspace/remstir/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kirill/workspace/remstir/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kirill/workspace/remstir/public/index.php(129): Kohana_Request->execute()
#7 {main} in /Users/kirill/workspace/remstir/application/classes/Controller/Public.php:376