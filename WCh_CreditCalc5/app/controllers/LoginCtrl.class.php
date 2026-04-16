<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {
    private $form;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function getParams() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
    }

    public function validate() {
        // Jeśli to pierwsze wejście (brak parametrów), nie waliduj
        if (!isset($this->form->login) && !isset($this->form->pass)) {
            return false;
        }

        if (empty($this->form->login)) Utils::addErrorMessage('Nie podano loginu');
        if (empty($this->form->pass)) Utils::addErrorMessage('Nie podano hasła');

        if (App::getMessages()->isError()) return false;

        if ($this->form->login == "admin" && $this->form->pass == "admin") {
            RoleUtils::addRole('admin');
        } else if ($this->form->login == "user" && $this->form->pass == "user") {
            RoleUtils::addRole('user');
        } else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        }

        return !App::getMessages()->isError();
    }

    public function action_login() {
        $this->getParams();
        
        if ($this->validate()) {
            App::getRouter()->redirectTo("calcShow");
        } else {
            $this->generateView();
        }
    }

    public function action_logout() {
        session_destroy();
        App::getRouter()->redirectTo('login');
    }

    public function generateView() {
        App::getSmarty()->assign('conf', App::getConf());
        App::getSmarty()->assign('msgs', App::getMessages());
        App::getSmarty()->assign('page_title', 'Logowanie');
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('login_view.html');
    }
}