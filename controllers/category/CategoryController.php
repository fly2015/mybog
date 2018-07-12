<?php
require_once DOCUMENT_ROOT . '/models/category/CategoryDAO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryController
 *
 * @author qu_hien
 */
class CategoryController extends BaseController{

    //put your code here
    public function invoke($action) {
        switch ($action) {
            case 'view':
                $this->view();
                break;
            case 'add':
                $this->add();
                break;
            default :
                break;
        }
    }

    public function view() {
        $dao = new CategoryDAO();
        $items = $dao->getAll();
        include DOCUMENT_ROOT . '/admin/views/category/list.php';
    }

    public function add() {
        if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST'){
             
             
        }else{
            include DOCUMENT_ROOT . '/admin/views/category/add.php';
        }
     
    }

}
