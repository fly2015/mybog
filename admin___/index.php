<?php
include './header.php';
?>
<div id="main-container">
    <?php
    require_once '../configs/GlobalConfigs.php';

    if (!isset($_SESSION['username'])) {
        $controller = 'user';
        $action = 'login';
    } else {
        if (filter_input(INPUT_GET, 'controller') != null && filter_input(INPUT_GET, 'action') != null) {
            $controller = filter_input(INPUT_GET, 'controller');
            $action = filter_input(INPUT_GET, 'action');
        } else {
            $controller = 'article';
            $action = 'add';
        }
    }

    require_once DOCUMENT_ROOT . '/models/common/DBAccessor.php';
    require_once DOCUMENT_ROOT . '/controllers/common/BaseController.php';

    require_once DOCUMENT_ROOT . '/controllers/' . $controller . '/' . $controller . 'Controller.php';

    $file = $controller . 'controller';
    $controller = new $file;
    $controller->invoke($action);
    ?>

    <?php
    include './footer.php';
    