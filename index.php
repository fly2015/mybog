<?php
require_once './configs/GlobalConfigs.php';
include THEME_ROOT . '/inc/header.php';
?>

<?php

if (filter_input(INPUT_GET, 'controller') != null && filter_input(INPUT_GET, 'action') != null) {
    $controller = filter_input(INPUT_GET, 'controller');
    $action = filter_input(INPUT_GET, 'action');
} else {
    $controller = 'home';
    $action = 'home';
}



require_once DOCUMENT_ROOT . '/models/common/DBAccessor.php';
require_once DOCUMENT_ROOT . '/controllers/' . $controller . '/' . ucfirst($controller) . 'Controller.php';

$file = ucfirst($controller) . 'controller';
$controller = new $file;
$controller->invoke($action);
//include THEME_ROOT . '/home.php';
 

?>

<?php

include THEME_ROOT . '/inc/footer.php';

