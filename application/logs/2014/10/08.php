<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-08 05:37:37 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'title' ~ APPPATH\views\v_base.php [ 4 ] in file:line
2014-10-08 05:37:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 05:40:17 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: HTML::$title ~ APPPATH\views\v_base.php [ 4 ] in file:line
2014-10-08 05:40:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 05:41:13 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: HTML::$title ~ APPPATH\views\v_base.php [ 4 ] in file:line
2014-10-08 05:41:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 05:58:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ';' ~ APPPATH\views\v_base.php [ 8 ] in file:line
2014-10-08 05:58:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 08:00:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ';' ~ APPPATH\views\v_base.php [ 8 ] in file:line
2014-10-08 08:00:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 08:00:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method HTML::styles() ~ APPPATH\views\v_base.php [ 7 ] in file:line
2014-10-08 08:00:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 08:05:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method HTML::styles() ~ APPPATH\views\v_base.php [ 7 ] in file:line
2014-10-08 08:05:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 08:06:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ';' ~ APPPATH\views\v_base.php [ 8 ] in file:line
2014-10-08 08:06:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 08:11:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ';' ~ APPPATH\views\v_base.php [ 8 ] in file:line
2014-10-08 08:11:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 08:11:44 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\views\v_base.php [ 7 ] in file:line
2014-10-08 08:11:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 08:18:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ';' ~ APPPATH\views\v_base.php [ 8 ] in file:line
2014-10-08 08:18:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 08:27:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\v_base.php [ 11 ] in file:line
2014-10-08 08:27:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 08:27:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\v_base.php [ 11 ] in file:line
2014-10-08 08:27:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 08:28:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ';' ~ APPPATH\views\v_base.php [ 11 ] in file:line
2014-10-08 08:28:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 08:28:23 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant s - assumed 's' ~ APPPATH\views\v_base.php [ 9 ] in C:\OpenServer\domains\localhost\kohana\application\views\v_base.php:9
2014-10-08 08:28:23 --- DEBUG: #0 C:\OpenServer\domains\localhost\kohana\application\views\v_base.php(9): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 9, Array)
#1 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\kohana\application\views\v_base.php:9
2014-10-08 08:28:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\v_base.php [ 11 ] in file:line
2014-10-08 08:28:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 08:28:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\v_base.php [ 11 ] in file:line
2014-10-08 08:28:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 08:28:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ';' ~ APPPATH\views\v_base.php [ 11 ] in file:line
2014-10-08 08:28:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 09:52:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\Kohana\Request.php [ 956 ] in C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php:956
2014-10-08 09:52:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(956): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 956, Array)
#1 C:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#2 {main} in C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php:956
2014-10-08 10:27:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ',' or ';' ~ APPPATH\classes\Model\tovar.php [ 3 ] in file:line
2014-10-08 10:27:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 10:28:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ',' or ';' ~ APPPATH\classes\Model\tovar.php [ 3 ] in file:line
2014-10-08 10:28:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 10:28:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ',' or ';' ~ APPPATH\classes\Model\tovar.php [ 3 ] in file:line
2014-10-08 10:28:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 10:29:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ',' or ';' ~ APPPATH\classes\Model\tovar.php [ 3 ] in file:line
2014-10-08 10:29:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-08 10:30:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ',' or ';' ~ APPPATH\classes\Model\tovar.php [ 3 ] in file:line
2014-10-08 10:30:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line