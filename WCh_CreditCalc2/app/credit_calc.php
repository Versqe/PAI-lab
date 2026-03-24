<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$form['oprocentowanie'] = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;	
}

function validate(&$form, &$infos, &$msgs, &$hide_intro){
	if ( ! (isset($form['kwota']) && isset($form['lata']) && isset($form['oprocentowanie']) )) return false;	
	
	$hide_intro = true;
	$infos [] = 'Przekazano parametry.';

	if ( $form['kwota'] == "") $msgs [] = 'Nie podano kwoty kredytu.';
	if ( $form['lata'] == "") $msgs [] = 'Nie podano liczby lat.';
	if ( $form['oprocentowanie'] == "") $msgs [] = 'Nie podano oprocentowania.';
	
	if ( count($msgs)==0 ) {
		if (! is_numeric( $form['kwota'] )) $msgs [] = 'Kwota kredytu musi być liczbą.';
		if (! is_numeric( $form['lata'] )) $msgs [] = 'Liczba lat musi być liczbą.';
		if (! is_numeric( $form['oprocentowanie'] )) $msgs [] = 'Oprocentowanie musi być liczbą.';
	}

    if ( count($msgs)==0 ) {
        if ($form['kwota'] <= 0) $msgs[] = "Kwota kredytu musi być większa od zera.";
        if ($form['lata'] <= 0) $msgs[] = "Liczba lat musi być większa od zera.";
        if ($form['oprocentowanie'] <= 0) $msgs[] = "Oprocentowanie musi być większe od zera.";
    }
	
	if (count($msgs)>0) return false;
	else return true;
}
	
function process(&$form, &$infos, &$msgs, &$result){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
	$kwota = floatval($form['kwota']);
	$lata = intval($form['lata']);
	$oprocentowanie = floatval($form['oprocentowanie']);
	
    $miesiace = $lata * 12;
    $kwota_odsetek = $lata * ($oprocentowanie / 100) * $kwota;
    $kwota_calkowita = $kwota + $kwota_odsetek;
    
    $result = $kwota_calkowita / $miesiace;
}

$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;
	
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$result);
}

$smarty = new Smarty\Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator Kredytowy');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('hide_intro',$hide_intro);

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/credit_calc_view.html');
?>