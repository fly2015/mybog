<?php

require_once DOCUMENT_ROOT . '/models/user/UserDAO.php';

/**
 * Description of UserController
 *
 * @author qu_hien
 */
class UserController extends BaseController {

    public function invoke($action) {
        switch ($action) {
            case "login":
                $this->login();
                break;
            case "logout":    
                $this->logout();
                break;

            default:
                break;
        }
    }

    public function view() {
        
    }

    public function add() {
        
    }

    public function login() {
        if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
            if (filter_input(INPUT_POST, 'username') != null && filter_input(INPUT_POST, 'password') != null) {
                $dao = new UserDAO();
                $user = $dao->login(filter_input(INPUT_POST, 'username'), filter_input(INPUT_POST, 'password'));
                if($user != null){
                    $_SESSION['login_fail_message'] = LOGIN_FAIL_MESSAGE;
                }
                $_SESSION['username'] = $user->getUsername();
                $_SESSION['role'] = $user->getRole();
                $_SESSION['user_id'] = $user->getId();
                header('Location: index.php');
                exit();
            }
        }else {
            include  DOCUMENT_ROOT . '/admin/views/user/login.php';
        }
    }
    
    public function logout() {
        unset($_SESSION['username']);
        session_destroy();
        
        header('Location: index.php?controller=user&action=login');
        exit;
    }

}
