<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-20 14:30:32 --- INFO: Admin ki has been logged in from IP ::1 in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:246
2016-05-20 15:42:50 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/PDO.php:242
2016-05-20 15:42:50 --- DEBUG: #0 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('facebook_applic...')
#2 [internal function]: Kohana_Database->quote('facebook_applic...')
#3 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO_MySQL))
#5 /Users/kirill/workspace/apollon/web/modules/avo/classes/Model/Variable.php(37): Kohana_Database_Query->execute()
#6 /Users/kirill/workspace/apollon/web/application/classes/Controller/Abstract/Public.php(31): Model_Variable::value_by_name('facebook_applic...', true)
#7 /Users/kirill/workspace/apollon/web/application/classes/Controller/Public.php(12): Controller_Abstract_Public->before()
#8 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Controller.php(69): Controller_Public->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#11 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kirill/workspace/apollon/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kirill/workspace/apollon/web/htdocs/index.php(129): Kohana_Request->execute()
#14 {main} in /Users/kirill/workspace/apollon/web/modules/database/classes/Kohana/Database/PDO.php:242