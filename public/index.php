<?php
/**
 * 项目入口文件
 * User: tangchunlinit@gmail.com
 * Date: 2018/9/26
 * Time: 10:45 PM
 */
define('APP_PATH', realpath('../'));
define('APP', APP_PATH . '/app');
define('BOOT', APP_PATH . '/bootstrap');
define('CORE', APP_PATH . '/core');
define('MODULE', 'app');

define('DEBUG', true);

if (DEBUG) {
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}

include_once CORE . '/common/helper.php';
include_once BOOT . '/app.php';

spl_autoload_register('\bootstrap\app::load');

\bootstrap\app::run();
