<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-25 10:43:54 --- INFO: Admin ki has been logged in from IP ::1 in /Users/kirill/workspace/apollon/web/modules/avo/classes/AVO/Data/Form.php:246
2016-07-25 13:00:50 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:00:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:01:10 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:01:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:29:30 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:29:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:29:31 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:29:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:29:58 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:29:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:44:16 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:44:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:44:16 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:44:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:44:29 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:44:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:44:30 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:44:52 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:44:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:45:46 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:45:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:45:47 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:45:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:46:26 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:46:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:46:40 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:46:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:50:51 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:50:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 13:51:11 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 13:51:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:13:46 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:13:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:13:47 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:13:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/htdocs/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:48:59 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:48:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:49:01 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:49:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:51:04 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:51:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:51:05 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:51:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:51:06 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:51:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:51:06 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:51:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:51:07 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:51:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:51:26 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:51:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:51:49 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:51:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:52:28 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:52:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:55:59 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:55:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:00 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:01 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:01 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:01 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:02 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:03 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:04 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:04 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:04 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:04 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:05 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:05 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:05 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:05 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:05 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:05 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:06 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:06 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:56:06 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:56:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:57:11 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:57:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 14:57:20 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 14:57:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:01:02 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:01:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:03:26 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:03:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:03:27 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:03:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:05:00 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:05:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:05:21 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:05:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:05:23 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:05:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:06:01 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:06:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:06:17 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:06:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:09:02 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:09:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:09:22 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:09:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:18 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:21 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:22 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:22 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:22 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:23 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:23 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:24 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:24 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:24 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:24 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:24 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:25 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:25 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:25 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:25 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:25 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:11:25 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:11:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:12:08 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:12:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:12:09 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:12:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:12:10 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:12:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:12:56 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:12:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:13:29 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:13:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:13:32 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:13:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:13:36 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:13:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:13:36 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:13:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:13:39 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:13:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:13:40 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:13:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:17:00 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:17:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:23:13 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:23:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:23:31 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:23:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:23:32 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:23:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:23:32 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:23:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:23:32 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:23:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:23:52 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:23:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:23:53 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:23:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:23:53 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:23:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:23:54 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:23:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:25:16 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:25:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:32:47 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:32:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:32:48 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:32:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:36:50 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:36:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:36:52 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:36:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:39:07 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:39:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:46:23 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:46:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:47:21 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:47:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:47:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'version' (T_STRING) ~ DOCROOT/img/instagram13.svg [ 1 ] in file:line
2016-07-25 15:47:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-25 15:48:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'version' (T_STRING) ~ DOCROOT/img/instagram13.svg [ 1 ] in file:line
2016-07-25 15:48:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-25 15:49:05 --- INFO: Admin ki has been logged in from IP 93.79.100.67 in /var/www/apollon/data/www/apollon.sumy.ua/modules/avo/classes/AVO/Data/Form.php:246
2016-07-25 15:49:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'version' (T_STRING) ~ DOCROOT/img/instagram13.svg [ 1 ] in file:line
2016-07-25 15:49:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-25 15:49:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'version' (T_STRING) ~ DOCROOT/img/instagram13.svg [ 1 ] in file:line
2016-07-25 15:49:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-25 15:49:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'version' (T_STRING) ~ DOCROOT/img/instagram13.svg [ 1 ] in file:line
2016-07-25 15:49:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-25 15:49:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'version' (T_STRING) ~ DOCROOT/img/instagram13.svg [ 1 ] in file:line
2016-07-25 15:49:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-25 15:49:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'version' (T_STRING) ~ DOCROOT/img/instagram13.svg [ 1 ] in file:line
2016-07-25 15:49:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-25 15:49:53 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:49:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:50:52 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:50:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:54:23 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:54:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:54:53 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:54:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:55:14 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:55:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:55:55 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:55:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:55:58 --- EMERGENCY: ErrorException [ 2 ]: is_writable(): open_basedir restriction in effect. File(/tmp) is not within the allowed path(s): (/var/www/apollon/data:.) ~ MODPATH/swiftmailer/Swift-4.1.1/lib/preferences.php [ 15 ] in file:line
2016-07-25 15:55:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_writable(): ...', '/var/www/apollo...', 15, Array)
#1 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/preferences.php(15): is_writable('/tmp')
#2 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_init.php(27): require('/var/www/apollo...')
#3 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/Swift-4.1.1/lib/swift_required.php(27): require('/var/www/apollo...')
#4 /var/www/apollon/data/www/apollon.sumy.ua/modules/swiftmailer/init.php(3): require('/var/www/apollo...')
#5 /var/www/apollon/data/www/apollon.sumy.ua/system/classes/Kohana/Core.php(602): require_once('/var/www/apollo...')
#6 /var/www/apollon/data/www/apollon.sumy.ua/application/bootstrap.php(131): Kohana_Core::modules(Array)
#7 /var/www/apollon/data/www/apollon.sumy.ua/index.php(113): require('/var/www/apollo...')
#8 {main} in file:line
2016-07-25 15:58:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'version' (T_STRING) ~ DOCROOT/img/instagram13.svg [ 1 ] in file:line
2016-07-25 15:58:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-25 15:59:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'version' (T_STRING) ~ DOCROOT/img/vk5.svg [ 1 ] in file:line
2016-07-25 15:59:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-25 16:00:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'version' (T_STRING) ~ DOCROOT/img/calendar.svg [ 1 ] in file:line
2016-07-25 16:00:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-25 16:07:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'version' (T_STRING) ~ DOCROOT/img/payment.svg [ 1 ] in file:line
2016-07-25 16:07:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-25 16:26:08 --- INFO: Admin ki has been logged in from IP 93.79.24.3 in /var/www/apollon/data/www/apollon.sumy.ua/modules/avo/classes/AVO/Data/Form.php:246