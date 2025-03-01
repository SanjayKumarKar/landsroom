<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['pre_system'][] = array(
                                'class'    => 'InitHook',
                                'function' => 'loadCustomCommonFunctions',
                                'filename' => 'InitHook.php',
                                'filepath' => 'hooks',
                                'params'   => array()
                                );

$hook['pre_controller'][] = array(
                                'class'    => 'InitHook',
                                'function' => 'initPreController',
                                'filename' => 'InitHook.php',
                                'filepath' => 'hooks',
                                'params'   => array()
                                );

$hook['post_controller_constructor'][] = array(
                                'class'    => 'InitHook',
                                'function' => 'initPostController',
                                'filename' => 'InitHook.php',
                                'filepath' => 'hooks',
                                'params'   => array()
                                );


