<?php

/**
 *  @ qu_hien
 */
require_once DOCUMENT_ROOT . '/models/common/MessageInfomation.php';
class CategoryDTO extends MessageInfomation {

    private $id;
    private $name;
    private $type;
    private $position;
    private $status;

    public function __construct() {
        
    }

    public function getMessage() {
        return parent::getMessage();
    }

    public function getSource() {
        return parent::getSource();
    }

    public function setMessage($message) {
        parent::setMessage($message);
    }

    public function setSource($source) {
        parent::setSource($source);
    }

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
   
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getType() {
        return $this->type;
    }

    public function getPosition() {
        return $this->position;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

}
