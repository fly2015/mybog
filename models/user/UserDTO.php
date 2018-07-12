<?php
require_once DOCUMENT_ROOT . '/models/common/MessageInfomation.php';
/**
 * @qu_hien
 */
class UserDTO extends MessageInfomation {

    private $id;
    private $username;
    private $password;
    private $name;
    private $email;
    private $phone;
    private $role;
    private $type;
    private $create_time;
    private $status;

    function __construct() {
        # code...
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

        public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getRole() {
        return $this->role;
    }

    public function getType() {
        return $this->type;
    }

    public function getCreate_time() {
        return $this->create_time;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setCreate_time($create_time) {
        $this->create_time = $create_time;
    }

    public function setStatus($status) {
        $this->status = $status;
    }


}
?>