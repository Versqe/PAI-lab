<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\CreditCalcForm;
use app\transfer\CreditCalcResult;

class CreditCalcCtrl {

    private $form;
    private $result;

    public function __construct() {
        $this->form = new CreditCalcForm();
        $this->result = new CreditCalcResult();
    }

    public function getParams() {
        $this->form->kwota = ParamUtils::getFromRequest('kwota');
        $this->form->lata = ParamUtils::getFromRequest('lata');
        $this->form->oprocentowanie = ParamUtils::getFromRequest('oprocentowanie');
    }

    public function validate() {
        if (!(isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->oprocentowanie))) {
            return false;
        }

        if ($this->form->kwota == "") Utils::addErrorMessage('Nie podano kwoty kredytu');
        if ($this->form->lata == "") Utils::addErrorMessage('Nie podano okresu spłaty');
        if ($this->form->oprocentowanie == "") Utils::addErrorMessage('Nie podano oprocentowania');

        if (!App::getMessages()->isError()) {
            if (!is_numeric($this->form->kwota)) Utils::addErrorMessage('Kwota nie jest liczbą');
            if (!is_numeric($this->form->lata)) Utils::addErrorMessage('Lata nie są liczbą');
            if (!is_numeric($this->form->oprocentowanie)) Utils::addErrorMessage('Oprocentowanie nie jest liczbą');
        }

        if (!App::getMessages()->isError()) {
            if ($this->form->kwota <= 0) Utils::addErrorMessage('Kwota kredytu musi być większa od zera');
            if ($this->form->lata <= 0) Utils::addErrorMessage('Okres kredytowania musi być dłuższy niż 0 lat');
            if ($this->form->oprocentowanie < 0) Utils::addErrorMessage('Oprocentowanie nie może być ujemne');

            if ($this->form->lata < 5 && !RoleUtils::inRole('admin')) {
                Utils::addErrorMessage('Tylko wyższy pracownik (admin) może obliczać kredyt na okres poniżej 5 lat!');
            }
        }

        return !App::getMessages()->isError();
    }

    public function action_calcCompute() {
        $this->getParams();
        
        if ($this->validate()) {
            $kwota = floatval($this->form->kwota);
            $lata = intval($this->form->lata);
            $oprocentowanie = floatval($this->form->oprocentowanie);

            $miesiace = $lata * 12;

            if ($oprocentowanie > 0) {
                $q = 1 + ($oprocentowanie / 100 / 12);
                $rata = $kwota * pow($q, $miesiace) * ($q - 1) / (pow($q, $miesiace) - 1);
                $this->result->result = $rata;
            } else {
                $this->result->result = $kwota / $miesiace;
            }
        }
        $this->generateView();
    }

    public function action_calcShow() {
        $this->generateView();
    }

    public function generateView() {
        App::getSmarty()->assign('conf', App::getConf());
        App::getSmarty()->assign('msgs', App::getMessages());
        App::getSmarty()->assign('page_title', 'Kalkulator Kredytowy');
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('res', $this->result);
        App::getSmarty()->display('credit_calc_view.html');
    }
}