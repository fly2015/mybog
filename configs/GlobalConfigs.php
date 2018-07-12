<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define("SITE_NAME", "/myblog");
define("THEME_NAME", "myblog");
define("THEME_FOLDER", "/views/themes/");
define("UPLOAD_FOLDER", "/uploads/");

define("DOCUMENT_ROOT", filter_input(INPUT_SERVER, 'DOCUMENT_ROOT', FILTER_SANITIZE_STRING) .  SITE_NAME);
define("UPLOAD_DIR", DOCUMENT_ROOT  . UPLOAD_FOLDER);
define("FILE_SIZE_UPLOAD", 1024);
define("LOGIN_FAIL_MESSAGE", 'Username or password is wrong !');

$HTTP_HOST = filter_input(INPUT_SERVER, 'HTTP_HOST');
$HTTPS = filter_input(INPUT_SERVER, 'HTTPS');
if($HTTPS != null){
   $HTTP_ROOT =  $HTTPS . '://' . $HTTP_HOST;
}  else {
    $HTTP_ROOT =  'http' . '://' . $HTTP_HOST;
}

define("SITE_URL", $HTTP_ROOT . SITE_NAME);
define("IMAGE_URL", SITE_URL . UPLOAD_FOLDER);
define("THEME_URL", SITE_URL . THEME_FOLDER . THEME_NAME);
define("THEME_ROOT", DOCUMENT_ROOT . THEME_FOLDER . THEME_NAME);



define("ITEM_PER_PAGE", 4);
define("PAGE_DEFAULT", 1);