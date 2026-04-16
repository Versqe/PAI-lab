<?php
use core\App;

App::getRouter()->setLoginRoute('login');
App::getRouter()->setDefaultRoute('calcShow');

App::getRouter()->addRoute('login', 'LoginCtrl');
App::getRouter()->addRoute('logout', 'LoginCtrl');
App::getRouter()->addRoute('calcShow', 'CreditCalcCtrl', ['user', 'admin']);
App::getRouter()->addRoute('calcCompute', 'CreditCalcCtrl', ['user', 'admin']);