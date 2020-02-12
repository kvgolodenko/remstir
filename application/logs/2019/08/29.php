<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-08-29 06:18:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g-recaptcha-response ~ APPPATH/classes/Controller/Public.php [ 119 ] in /var/www/apollon/data/www/application/classes/Controller/Public.php:119
2019-08-29 06:18:39 --- DEBUG: #0 /var/www/apollon/data/www/application/classes/Controller/Public.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/apollo...', 119, Array)
#1 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#7 {main} in /var/www/apollon/data/www/application/classes/Controller/Public.php:119
2019-08-29 13:34:28 --- INFO: Admin ki has been logged in from IP 193.178.229.143 in /var/www/apollon/data/www/modules/avo/classes/AVO/Data/Form.php:246
2019-08-29 16:20:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g-recaptcha-response ~ APPPATH/classes/Controller/Public.php [ 119 ] in /var/www/apollon/data/www/application/classes/Controller/Public.php:119
2019-08-29 16:20:34 --- DEBUG: #0 /var/www/apollon/data/www/application/classes/Controller/Public.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/apollo...', 119, Array)
#1 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(84): Controller_Public->action_subscribe()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#7 {main} in /var/www/apollon/data/www/application/classes/Controller/Public.php:119
2019-08-29 22:38:02 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:38:02 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:39:46 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): JIT compilation failed: no more memory ~ APPPATH/classes/Mobiledetect.php [ 1037 ] in file:line
2019-08-29 22:39:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): J...', '/Users/kirill/w...', 1037, Array)
#1 /Users/kirill/workspace/apollon/application/classes/Mobiledetect.php(1037): preg_match('/Samsung|SGH-I3...', 'Mozilla/5.0 (Ma...')
#2 /Users/kirill/workspace/apollon/application/classes/Mobiledetect.php(906): Mobiledetect->match('Samsung|SGH-I33...', NULL)
#3 /Users/kirill/workspace/apollon/application/classes/Mobiledetect.php(965): Mobiledetect->matchDetectionRulesAgainstUA()
#4 /Users/kirill/workspace/apollon/application/classes/Controller/Abstract/Public.php(25): Mobiledetect->isMobile()
#5 /Users/kirill/workspace/apollon/application/classes/Controller/Public.php(13): Controller_Abstract_Public->before()
#6 /Users/kirill/workspace/apollon/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#9 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/kirill/workspace/apollon/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#12 {main} in file:line
2019-08-29 22:40:31 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Users/kirill/workspace/apollon/modules/database/classes/Kohana/Database/PDO.php:242
2019-08-29 22:40:31 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /Users/kirill/workspace/apollon/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('facebook_applic...')
#2 [internal function]: Kohana_Database->quote('facebook_applic...')
#3 /Users/kirill/workspace/apollon/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /Users/kirill/workspace/apollon/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO_MySQL))
#5 /Users/kirill/workspace/apollon/modules/avo/classes/Model/Variable.php(37): Kohana_Database_Query->execute()
#6 /Users/kirill/workspace/apollon/application/classes/Controller/Abstract/Public.php(31): Model_Variable::value_by_name('facebook_applic...', true)
#7 /Users/kirill/workspace/apollon/application/classes/Controller/Public.php(13): Controller_Abstract_Public->before()
#8 /Users/kirill/workspace/apollon/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#11 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kirill/workspace/apollon/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#14 {main} in /Users/kirill/workspace/apollon/modules/database/classes/Kohana/Database/PDO.php:242
2019-08-29 22:42:27 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:42:27 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:54:58 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:54:58 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:54:58 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:54:58 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:55:12 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:55:12 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:55:14 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:55:14 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:55:16 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:55:16 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:55:20 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:55:20 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:55:28 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:55:28 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:55:33 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:55:33 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:55:33 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:55:33 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:57:18 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:57:18 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:57:19 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:57:19 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:57:20 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:57:20 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:58:27 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:58:27 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:58:44 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:58:44 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:59:04 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:59:04 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:59:05 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:59:05 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:59:17 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:59:17 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:59:17 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:59:17 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:59:18 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:59:18 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(115): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:59:49 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 22:59:49 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(113): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 23:00:38 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): JIT compilation failed: no more memory ~ APPPATH/classes/Mobiledetect.php [ 1037 ] in file:line
2019-08-29 23:00:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): J...', '/Users/kirill/w...', 1037, Array)
#1 /Users/kirill/workspace/apollon/application/classes/Mobiledetect.php(1037): preg_match('/Samsung|SGH-I3...', 'Mozilla/5.0 (Ma...')
#2 /Users/kirill/workspace/apollon/application/classes/Mobiledetect.php(906): Mobiledetect->match('Samsung|SGH-I33...', NULL)
#3 /Users/kirill/workspace/apollon/application/classes/Mobiledetect.php(965): Mobiledetect->matchDetectionRulesAgainstUA()
#4 /Users/kirill/workspace/apollon/application/classes/Controller/Abstract/Public.php(25): Mobiledetect->isMobile()
#5 /Users/kirill/workspace/apollon/application/classes/Controller/Public.php(13): Controller_Abstract_Public->before()
#6 /Users/kirill/workspace/apollon/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#9 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/kirill/workspace/apollon/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(129): Kohana_Request->execute()
#12 {main} in file:line
2019-08-29 23:00:57 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Users/kirill/workspace/apollon/modules/database/classes/Kohana/Database/PDO.php:242
2019-08-29 23:00:57 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /Users/kirill/workspace/apollon/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('facebook_applic...')
#2 [internal function]: Kohana_Database->quote('facebook_applic...')
#3 /Users/kirill/workspace/apollon/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /Users/kirill/workspace/apollon/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO_MySQL))
#5 /Users/kirill/workspace/apollon/modules/avo/classes/Model/Variable.php(37): Kohana_Database_Query->execute()
#6 /Users/kirill/workspace/apollon/application/classes/Controller/Abstract/Public.php(31): Model_Variable::value_by_name('facebook_applic...', true)
#7 /Users/kirill/workspace/apollon/application/classes/Controller/Public.php(13): Controller_Abstract_Public->before()
#8 /Users/kirill/workspace/apollon/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#11 /Users/kirill/workspace/apollon/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kirill/workspace/apollon/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(129): Kohana_Request->execute()
#14 {main} in /Users/kirill/workspace/apollon/modules/database/classes/Kohana/Database/PDO.php:242
2019-08-29 23:01:48 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 23:01:48 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(113): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 23:01:51 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 23:01:51 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(113): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 23:02:03 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 23:02:03 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(113): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 23:05:34 --- EMERGENCY: ErrorException [ 8192 ]: __autoload() is deprecated, use spl_autoload_register() instead ~ MODPATH/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.autoload.php [ 17 ] in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9
2019-08-29 23:05:34 --- DEBUG: #0 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): Kohana_Core::error_handler(8192, '__autoload() is...', '/Users/kirill/w...', 17, Array)
#1 /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php(9): require_once()
#2 /Users/kirill/workspace/apollon/modules/htmlpurifier/init.php(3): require_once('/Users/kirill/w...')
#3 /Users/kirill/workspace/apollon/system/classes/Kohana/Core.php(602): require_once('/Users/kirill/w...')
#4 /Users/kirill/workspace/apollon/application/bootstrap.php(114): Kohana_Core::modules(Array)
#5 /Users/kirill/workspace/apollon/apollon.sumy.ua/index.php(113): require('/Users/kirill/w...')
#6 {main} in /Users/kirill/workspace/apollon/modules/htmlpurifier/htmlpurifier-4.5.0/library/HTMLPurifier.auto.php:9