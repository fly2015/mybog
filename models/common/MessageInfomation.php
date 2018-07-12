<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseClass
 *
 * @author qu_hien
 */
class MessageInfomation {

    private $message;
    private $infos = [];

    public function __construct() {
        
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function setInfos($message) {
        $this->infos [] = $message;
    }

    public function getInfos() {
        return $this->infos;
    }

    public function Validator($field_value, $field_name, $type) {
        $result = FALSE;
        switch ($type) {
            case 'required':
                $result = $this->requiredField($field_value, $field_name);

                break;

            default:
                break;
        }

        return $result;
    }

    function requiredField($field_value, $field_name) {
        $result = TRUE;
        if ($field_value == null) {
            $this->setInfos($field_name . ' must be enter !');
            $result = FALSE;
        }

        return $result;
    }

}
