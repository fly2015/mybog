<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$controller = filter_input(INPUT_POST, 'controller');
$action = filter_input(INPUT_POST, 'action');

if($controller != null && $action != null){
    if($controller == 'article' && $action = 'slug'){
        require_once   '../../models/common/Common.php';
        $str = filter_input(INPUT_POST, 'name');
        $common = new Common();
        $slug = $common->create_slug($str);
        
        echo $slug;
        exit;
    }
}