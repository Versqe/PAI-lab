<?php
use core\App;

App::getRouter()->setDefaultRoute('calcShow');
App::getRouter()->addRoute('calcShow',    'CreditCalcCtrl');
App::getRouter()->addRoute('calcCompute', 'CreditCalcCtrl');