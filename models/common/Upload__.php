<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Upload
 *
 * @author qu_hien
 */
class Upload {

    private $file = [];
    private $name;
    private $size;
    private $source;
    private $target_path;
    private $prefix;

    public function __construct() {
        
    }
    public function getFile() {
        return $this->file;
    }

    public function setFile($file) {
        $this->file = $file;
    }

    public function getName() {
        return $this->name;
    }

    public function getSize() {
        return $this->size;
    }

    public function getSource() {
        return $this->source;
    }

    public function getTarget_path() {
        return $this->target_path;
    }

    public function getPrefix() {
        return $this->prefix;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function setSource($source) {
        $this->source = $source;
    }

    public function setTarget_path($target_path) {
        $this->target_path = $target_path;
    }

    public function setPrefix($prefix) {
        $this->prefix = $prefix;
    }

    public function upLoad() {
        $name_upload = $this->getPrefix() . $this->getName();
        copy($this->getSource(), $this->getTarget_path() . $name_upload);

        return $name_upload;
    }

}
