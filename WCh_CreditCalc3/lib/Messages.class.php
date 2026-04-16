<?php
class Messages {
    private $errors = array();
    private $infos = array();

    public function addError($message) {
        $this->errors[] = $message;
    }

    public function addInfo($message) {
        $this->infos[] = $message;
    }

    public function isError() {
        return count($this->errors) > 0;
    }

    public function isInfo() {
        return count($this->infos) > 0;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function getInfos() {
        return $this->infos;
    }
}