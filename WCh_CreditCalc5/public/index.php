<?php
require_once dirname(__FILE__).'/../config.php';

global $conf;

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (!class_exists('core\App', false)) {
    require_once $conf->root_path.'/init.php';
} else {
    \core\App::getRouter()->go();
}