<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-10-19 16:07:02 --- INFO: Admin ki has been logged in from IP 193.178.229.143 in /var/www/apollon/data/www/modules/avo/classes/AVO/Data/Form.php:246
2017-10-19 16:14:55 --- INFO: Admin ki has been logged in from IP 93.79.100.67 in /var/www/apollon/data/www/modules/avo/classes/AVO/Data/Form.php:246
2017-10-19 16:36:32 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ UPDATE prices SET ord = ord + 1 WHERE ord >  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php:251
2017-10-19 16:36:32 --- DEBUG: #0 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE prices S...', false, Array)
#1 /var/www/apollon/data/www/modules/avo/classes/AVO/Data/Source/DB.php(306): Kohana_Database_Query->execute()
#2 /var/www/apollon/data/www/modules/avo/classes/AVO/Data/Grid.php(450): AVO_Data_Source_DB->move(Object(AVO_Controls_List), NULL, 'after', '5')
#3 /var/www/apollon/data/www/modules/avo/classes/AVO/Data/Grid.php(186): AVO_Data_Grid->on_move(Object(AVO_Controls_List), NULL, 'after', '5')
#4 /var/www/apollon/data/www/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Grid->handle_action('move')
#5 /var/www/apollon/data/www/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#6 /var/www/apollon/data/www/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#7 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Prices))
#10 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#13 {main} in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php:251
2017-10-19 16:36:39 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ UPDATE prices SET ord = ord + 1 WHERE ord >  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php:251
2017-10-19 16:36:39 --- DEBUG: #0 /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE prices S...', false, Array)
#1 /var/www/apollon/data/www/modules/avo/classes/AVO/Data/Source/DB.php(306): Kohana_Database_Query->execute()
#2 /var/www/apollon/data/www/modules/avo/classes/AVO/Data/Grid.php(450): AVO_Data_Source_DB->move(Object(AVO_Controls_List), NULL, 'after', '5')
#3 /var/www/apollon/data/www/modules/avo/classes/AVO/Data/Grid.php(186): AVO_Data_Grid->on_move(Object(AVO_Controls_List), NULL, 'after', '5')
#4 /var/www/apollon/data/www/modules/avo/classes/AVO/Controller.php(281): AVO_Data_Grid->handle_action('move')
#5 /var/www/apollon/data/www/modules/avo/classes/AVO/Controller.php(150): AVO_Controller->dispatch_ajax_controller_request()
#6 /var/www/apollon/data/www/application/classes/Controller/Admin/Abstract.php(46): AVO_Controller->after()
#7 /var/www/apollon/data/www/system/classes/Kohana/Controller.php(87): Controller_Admin_Abstract->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/apollon/data/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Prices))
#10 /var/www/apollon/data/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/apollon/data/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/apollon/data/www/apollon.sumy.ua/index.php(131): Kohana_Request->execute()
#13 {main} in /var/www/apollon/data/www/modules/database/classes/Kohana/Database/Query.php:251