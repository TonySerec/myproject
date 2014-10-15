<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-10 09:12:47 --- CRITICAL: ErrorException [ 1 ]: Class name must be a valid object or a string ~ APPPATH\views\v_reg.php [ 1 ] in file:line
2014-10-10 09:12:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 09:35:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Auth.php [ 8 ] in file:line
2014-10-10 09:35:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 09:39:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Auth.php [ 8 ] in file:line
2014-10-10 09:39:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 09:41:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Auth.php [ 8 ] in file:line
2014-10-10 09:41:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 09:41:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Auth.php [ 8 ] in file:line
2014-10-10 09:41:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 09:43:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Auth.php [ 8 ] in file:line
2014-10-10 09:43:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 09:46:40 --- CRITICAL: Kohana_Exception [ 0 ]: The firstname property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-10-10 09:46:40 --- DEBUG: #0 C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('firstname', 'Anton')
#1 C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php(804): Kohana_ORM->__set('firstname', 'Anton')
#2 C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->values(Array, Array)
#3 C:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php(21): Model_Auth_User->create_user(Array, Array)
#4 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-10-10 09:48:23 --- CRITICAL: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-10-10 09:48:23 --- DEBUG: #0 C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('password_confir...', '123123')
#1 C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php(804): Kohana_ORM->__set('password_confir...', '123123')
#2 C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->values(Array, Array)
#3 C:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php(19): Model_Auth_User->create_user(Array, Array)
#4 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-10-10 09:53:21 --- CRITICAL: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-10-10 09:53:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('password_confir...', NULL)
#1 C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php(804): Kohana_ORM->__set('password_confir...', NULL)
#2 C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->values(Array, Array)
#3 C:\OpenServer\domains\localhost\kohana\application\classes\Controller\Auth.php(19): Model_Auth_User->create_user(Array, Array)
#4 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-10-10 10:30:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\v_login.php [ 4 ] in C:\OpenServer\domains\localhost\kohana\application\views\v_login.php:4
2014-10-10 10:30:17 --- DEBUG: #0 C:\OpenServer\domains\localhost\kohana\application\views\v_login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\kohana\application\views\v_base.php(86): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\kohana\application\views\v_login.php:4
2014-10-10 10:35:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\v_login.php [ 4 ] in C:\OpenServer\domains\localhost\kohana\application\views\v_login.php:4
2014-10-10 10:35:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\kohana\application\views\v_login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\kohana\application\views\v_base.php(86): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\kohana\application\views\v_login.php:4
2014-10-10 10:36:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\v_login.php [ 4 ] in C:\OpenServer\domains\localhost\kohana\application\views\v_login.php:4
2014-10-10 10:36:16 --- DEBUG: #0 C:\OpenServer\domains\localhost\kohana\application\views\v_login.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\kohana\application\views\v_base.php(86): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\kohana\application\views\v_login.php:4
2014-10-10 10:37:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\v_login.php [ 4 ] in C:\OpenServer\domains\localhost\kohana\application\views\v_login.php:4
2014-10-10 10:37:01 --- DEBUG: #0 C:\OpenServer\domains\localhost\kohana\application\views\v_login.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\kohana\application\views\v_base.php(86): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\kohana\application\views\v_login.php:4