<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-12 12:21:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\v_login.php [ 2 ] in G:\OpenServer\domains\localhost\kohana\application\views\v_login.php:2
2014-10-12 12:21:00 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\views\v_login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\OpenServer\d...', 2, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('G:\OpenServer\d...')
#2 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('G:\OpenServer\d...', Array)
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 G:\OpenServer\domains\localhost\kohana\application\views\v_base.php(86): Kohana_View->__toString()
#5 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('G:\OpenServer\d...')
#6 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('G:\OpenServer\d...', Array)
#7 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in G:\OpenServer\domains\localhost\kohana\application\views\v_login.php:2
2014-10-12 13:17:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_reg ~ APPPATH\views\v_base.php [ 57 ] in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:57
2014-10-12 13:17:29 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\views\v_base.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\OpenServer\d...', 57, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('G:\OpenServer\d...')
#2 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('G:\OpenServer\d...', Array)
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:57
2014-10-12 13:17:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_left ~ APPPATH\views\v_base.php [ 57 ] in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:57
2014-10-12 13:17:58 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\views\v_base.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\OpenServer\d...', 57, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('G:\OpenServer\d...')
#2 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('G:\OpenServer\d...', Array)
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:57
2014-10-12 13:18:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_left ~ APPPATH\views\v_base.php [ 57 ] in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:57
2014-10-12 13:18:14 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\views\v_base.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\OpenServer\d...', 57, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('G:\OpenServer\d...')
#2 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('G:\OpenServer\d...', Array)
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:57
2014-10-12 13:19:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_left ~ APPPATH\views\v_base.php [ 57 ] in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:57
2014-10-12 13:19:58 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\views\v_base.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\OpenServer\d...', 57, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('G:\OpenServer\d...')
#2 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('G:\OpenServer\d...', Array)
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:57
2014-10-12 13:21:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Auth.php [ 39 ] in G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php:39
2014-10-12 13:21:27 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\OpenServer\d...', 39, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php:39
2014-10-12 13:21:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Auth.php [ 39 ] in G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php:39
2014-10-12 13:21:50 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\OpenServer\d...', 39, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php:39
2014-10-12 13:21:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Auth.php [ 39 ] in G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php:39
2014-10-12 13:21:56 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\OpenServer\d...', 39, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php:39
2014-10-12 13:36:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function anchor() ~ APPPATH\classes\Controller\Base.php [ 35 ] in file:line
2014-10-12 13:36:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-12 13:38:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: reg ~ APPPATH\views\v_base.php [ 57 ] in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:57
2014-10-12 13:38:42 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\views\v_base.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\OpenServer\d...', 57, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('G:\OpenServer\d...')
#2 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('G:\OpenServer\d...', Array)
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:57
2014-10-12 13:38:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: reg ~ APPPATH\views\v_base.php [ 57 ] in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:57
2014-10-12 13:38:56 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\views\v_base.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\OpenServer\d...', 57, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('G:\OpenServer\d...')
#2 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('G:\OpenServer\d...', Array)
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:57
2014-10-12 16:12:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: reg ~ APPPATH\views\v_base.php [ 57 ] in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:57
2014-10-12 16:12:00 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\views\v_base.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\OpenServer\d...', 57, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('G:\OpenServer\d...')
#2 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('G:\OpenServer\d...', Array)
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:57
2014-10-12 16:17:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH\classes\Controller\Auth.php [ 50 ] in file:line
2014-10-12 16:17:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-12 16:20:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH\classes\Controller\Auth.php [ 50 ] in file:line
2014-10-12 16:20:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-12 16:21:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH\classes\Controller\Auth.php [ 48 ] in file:line
2014-10-12 16:21:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-12 16:36:28 --- CRITICAL: Database_Exception [ 1146 ]: Table 'anton.userses' doesn't exist [ SHOW FULL COLUMNS FROM `userses` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in G:\OpenServer\domains\localhost\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-10-12 16:36:28 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 G:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('userses')
#2 G:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 G:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 G:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 G:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php(51): Kohana_ORM::factory('users')
#7 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Auth->action_cabinet()
#8 [internal function]: Kohana_Controller->execute()
#9 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#10 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in G:\OpenServer\domains\localhost\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-10-12 17:02:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id_user_position ~ APPPATH\classes\Controller\Auth.php [ 52 ] in G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php:52
2014-10-12 17:02:07 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php(52): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\OpenServer\d...', 52, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Auth->action_cabinet()
#2 [internal function]: Kohana_Controller->execute()
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php:52
2014-10-12 17:02:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\v_base.php [ 61 ] in file:line
2014-10-12 17:02:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-12 17:02:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id_user_position ~ APPPATH\views\v_base.php [ 58 ] in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:58
2014-10-12 17:02:48 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\views\v_base.php(58): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\OpenServer\d...', 58, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('G:\OpenServer\d...')
#2 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('G:\OpenServer\d...', Array)
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:58
2014-10-12 17:11:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id_user_position ~ APPPATH\views\v_base.php [ 58 ] in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:58
2014-10-12 17:11:19 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\views\v_base.php(58): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\OpenServer\d...', 58, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('G:\OpenServer\d...')
#2 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('G:\OpenServer\d...', Array)
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:58
2014-10-12 17:20:15 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::where(), called in G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php on line 52 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1849 ] in G:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php:1849
2014-10-12 17:20:15 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php(1849): Kohana_Core::error_handler(2, 'Missing argumen...', 'G:\OpenServer\d...', 1849, Array)
#1 G:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php(52): Kohana_ORM->where()
#2 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Auth->action_cabinet()
#3 [internal function]: Kohana_Controller->execute()
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in G:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php:1849
2014-10-12 17:23:57 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH\views\v_users.php [ 2 ] in G:\OpenServer\domains\localhost\kohana\application\views\v_users.php:2
2014-10-12 17:23:57 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\views\v_users.php(2): Kohana_Core::error_handler(8, 'Undefined prope...', 'G:\OpenServer\d...', 2, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('G:\OpenServer\d...')
#2 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('G:\OpenServer\d...', Array)
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 G:\OpenServer\domains\localhost\kohana\application\views\v_base.php(93): Kohana_View->__toString()
#5 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('G:\OpenServer\d...')
#6 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('G:\OpenServer\d...', Array)
#7 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in G:\OpenServer\domains\localhost\kohana\application\views\v_users.php:2
2014-10-12 18:27:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\v_base.php [ 58 ] in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:58
2014-10-12 18:27:52 --- DEBUG: #0 G:\OpenServer\domains\localhost\kohana\application\views\v_base.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\OpenServer\d...', 58, Array)
#1 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('G:\OpenServer\d...')
#2 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('G:\OpenServer\d...', Array)
#3 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 G:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 G:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in G:\OpenServer\domains\localhost\kohana\application\views\v_base.php:58