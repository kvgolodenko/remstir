<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-07-02 00:55:38 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Result_Cached::__construct() must be of the type array, boolean given, called in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php on line 246 and defined ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 13 ] in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php:13
2019-07-02 00:55:38 --- DEBUG: #0 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php(13): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/apollo...', 13, Array)
#1 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php(246): Kohana_Database_Result_Cached->__construct(false, 'SELECT kind, ch...', false, Array)
#2 /var/www/apollon/data/www/modules/avo/classes/Model/Variable.php(37): Kohana_Database_Query->execute()
#3 /var/www/apollon/data/www/application/classes/Controller/Public.php(20): Model_Variable::value_by_name('contact_address', true)
#4 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#7 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#10 {main} in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Result/Cached.php:13
2019-07-02 09:04:10 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1030 Got error 28 from storage engine [ SHOW FULL COLUMNS FROM `menuitems` ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/apollon/data/www/modules/avo/classes/Database/PDO/MySQL.php:20
2019-07-02 09:04:10 --- DEBUG: #0 /var/www/apollon/data/www/modules/avo/classes/Database/PDO/MySQL.php(20): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/apollon/data/www/modules/orm/classes/Kohana/ORM.php(1668): Database_PDO_MySQL->list_columns('menuitems')
#2 /var/www/apollon/data/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/apollon/data/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/apollon/data/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/apollon/data/www/modules/avo/classes/ORM.php(22): Kohana_ORM->__construct(NULL)
#6 /var/www/apollon/data/www/modules/avo/classes/ORM.php(118): ORM->__construct(NULL)
#7 /var/www/apollon/data/www/application/classes/Controller/Public.php(15): ORM::factory()
#8 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#11 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/apollon/data/www/application/classes/HTTP/Exception/404.php(8): Kohana_Request->execute()
#14 /var/www/apollon/data/www/system/classes/Kohana/Request.php(976): HTTP_Exception_404->get_response()
#15 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#16 {main} in /var/www/apollon/data/www/modules/avo/classes/Database/PDO/MySQL.php:20
2019-07-02 09:12:32 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1030 Got error 28 fr