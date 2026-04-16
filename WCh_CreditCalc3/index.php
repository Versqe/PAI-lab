<?php
require_once dirname(__FILE__).'/config.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'calcView';

switch ($action) {
    case 'calcCompute':
        require_once $conf->root_path.'/app/CreditCalcCtrl.class.php';
        $ctrl = new CreditCalcCtrl();
        $ctrl->process();
        break;
    case 'calcView':
    default:
        require_once $conf->root_path.'/app/CreditCalcCtrl.class.php';
        $ctrl = new CreditCalcCtrl();
        $ctrl->generateView();
        break;
}