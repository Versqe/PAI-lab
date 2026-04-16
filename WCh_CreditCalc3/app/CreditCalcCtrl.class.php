<?php
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CreditCalcForm.class.php';
require_once $conf->root_path.'/app/CreditCalcResult.class.php';

class CreditCalcCtrl {
	private $msgs;
	private $form;
	private $result;

	public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CreditCalcForm();
		$this->result = new CreditCalcResult();
	}
	
	public function getParams(){
		$this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$this->form->lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
		$this->form->oprocentowanie = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
	}
	
	public function validate() {
		if (! (isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->oprocentowanie))) return false;
		
		if ($this->form->kwota == "") $this->msgs->addError('Nie podano kwoty kredytu.');
		if ($this->form->lata == "") $this->msgs->addError('Nie podano liczby lat.');
		if ($this->form->oprocentowanie == "") $this->msgs->addError('Nie podano oprocentowania.');
		
		if (! $this->msgs->isError()) {
			if (! is_numeric ( $this->form->kwota )) $this->msgs->addError('Kwota musi być liczbą.');
			if (! is_numeric ( $this->form->lata )) $this->msgs->addError('Lata muszą być liczbą.');
			if (! is_numeric ( $this->form->oprocentowanie )) $this->msgs->addError('Oprocentowanie musi być liczbą.');
		}
		return ! $this->msgs->isError();
	}
	
	public function process(){
		$this->getParams();
		if ($this->validate()) {
			$kwota = floatval($this->form->kwota);
			$lata = intval($this->form->lata);
			$oprocentowanie = floatval($this->form->oprocentowanie);
			
			$miesiace = $lata * 12;
			$odsetki = $lata * ($oprocentowanie / 100) * $kwota;
			$this->result->result = ($kwota + $odsetki) / $miesiace;
		}
		$this->generateView();
	}
	
	public function generateView(){
		global $conf;
		$smarty = new Smarty\Smarty();
		$smarty->assign('conf',$conf);
		$smarty->assign('page_title','Kalkulator Kredytowy');
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		$smarty->display($conf->root_path.'/app/credit_calc_view.html');
	}
}