<?php

/**
 * @qu_hien
 */
//require_once DOCUMENT_ROOT . '/models/common/MessageInfomation.php';
require_once DOCUMENT_ROOT . '/models/user/UserDTO.php';
class ArticleDTO extends MessageInfomation {

    private $id;
    private $category_id;
    private $category_name;
    private $type;
    private $user_id;
    private $name;
    private $slug;
    private $image;
    private $summary;
    private $content;
    private $create_time;
    private $modify_time;
    private $status;
    private $user;

    function __construct() {
        # code...
    }
    
    function setUser(UserDTO $user){
        $this->user = $user;
    }
    
    function getUser(){
        return $this->user;
    }

    public function getCategory_name() {
        return $this->category_name;
    }

    public function getType() {
        return $this->type;
    }

    public function setCategory_name($category_name) {
        $this->category_name = $category_name;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getId() {
        return $this->id;
    }

    public function getCategory_id() {
        return $this->category_id;
    }

    public function getUser_id() {
        return $this->user_id;
    }

    public function getName() {
        return $this->name;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function getImage() {
        return $this->image;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function getContent() {
        return $this->content;
    }

    public function getCreate_time() {
        return $this->create_time;
    }

    public function getModify_time() {
        return $this->modify_time;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCategory_id($category_id) {
        $this->category_id = $category_id;
    }

    public function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    public function setName($name) {
        $this->name = $name;
        $this->Validator($name, 'Name', 'required');
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }

    public function setImage($image) {
        $this->image = $image;
        $this->Validator($image, 'Image', 'required');
    }

    public function setSummary($summary) {
        $this->summary = $summary;
        $this->Validator($summary, 'Summary', 'required');
    }

    public function setContent($content) {
        $this->content = $content;
        $this->Validator($content, 'Content', 'required');
    }

    public function setCreate_time($create_time) {
        $this->create_time = $create_time;
    }

    public function setModify_time($modify_time) {
        $this->modify_time = $modify_time;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

}

?>