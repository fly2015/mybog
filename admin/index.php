<?php include './header.php'; ?>

<?php

require_once '../configs/GlobalConfigs.php';
//Get controller
if (filter_input(INPUT_GET, 'controller') != null) {
    $controller = filter_input(INPUT_GET, 'controller');
} else {
    $controller = "category";
}

//Get action
if (filter_input(INPUT_GET, 'action') != null) {
    $action = filter_input(INPUT_GET, 'action');
} else {
    $action = 'view';
}

require_once DOCUMENT_ROOT . '/models/common/DBAccessor.php';
require_once DOCUMENT_ROOT . '/controllers/common/BaseController.php';
require_once DOCUMENT_ROOT . '/controllers/' . $controller . '/' . $controller . 'Controller.php';

$file = $controller . 'controller';
$controller = new $file;
$controller->invoke($action);

?>

<?php include './footer.php'; 
