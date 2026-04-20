<?php
require_once dirname(__FILE__).'/core/Config.class.php';

$conf = new core\Config();

$conf->root_path = dirname(__FILE__);
$conf->server_name = 'localhost';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/WCh_CreditCalc6';
$conf->app_url = $conf->server_url.$conf->app_root;

$conf->action_script = '/public/index.php';

$conf->action_param = 'action';
$conf->action_root = $conf->app_url.'/public/index.php?action=';
$conf->action_url = $conf->app_url.'/public/index.php?action=';

$conf->db_type = 'mysql';
$conf->db_server = 'localhost';
$conf->db_name = 'kalkulator';
$conf->db_user = 'root';
$conf->db_pass = '';
$conf->db_charset = 'utf8';
$conf->db_port = '3306';
$conf->db_option = [ \PDO::ATTR_CASE => \PDO::CASE_NATURAL, \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION ];