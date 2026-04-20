<?php
use core\App;
use core\Utils;

require_once $conf->root_path.'/core/ClassLoader.class.php';
$cloader = new core\ClassLoader($conf);
$cloader->addPath('/lib');

require_once $conf->root_path.'/core/App.class.php';

App::createAndInitialize($conf);
require_once $conf->root_path.'/routing.php';
App::getRouter()->go();