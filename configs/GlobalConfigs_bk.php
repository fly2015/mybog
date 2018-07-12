<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define("DOCUMENT_ROOT", filter_input(INPUT_SERVER, 'DOCUMENT_ROOT', FILTER_SANITIZE_STRING) . '/myblog');
define("UPLOAD_DIR", filter_input(INPUT_SERVER, 'DOCUMENT_ROOT', FILTER_SANITIZE_STRING) . '/myblog' . '/uploads/');
define("FILE_SIZE_UPALOAD", 1024);
define("LOGIN_FAIL_MESSAGE", 'Username or password is wrong !');
//$HTTP_ROOT = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
$HTTP_HOST = filter_input(INPUT_SERVER, 'HTTP_HOST');
$HTTPS = filter_input(INPUT_SERVER, 'HTTPS');
if($HTTPS != null){
   $HTTP_ROOT =  $HTTPS . '://' . $HTTP_HOST;
}  else {
    $HTTP_ROOT =  'http' . '://' . $HTTP_HOST;
}
define("THEME_NAME", "myblog");
define("IMAGE_URL", $HTTP_ROOT .'/myblog' . '/uploads/');
define("THEME_URL", $HTTP_ROOT . '/myblog/views/themes/'. THEME_NAME);
define("THEME_PATH", DOCUMENT_ROOT . '/views/themes/' . THEME_NAME);
define("SITE_URL", $HTTP_ROOT . '/myblog');

/*
 * For pagination
 */
define("ITEM_PER_PAGE", 1);
define("PAGE_DEFAULT", 1);

