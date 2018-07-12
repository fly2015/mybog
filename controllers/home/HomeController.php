<?php

require_once DOCUMENT_ROOT . '/models/article/ArticleDAO.php';
require_once DOCUMENT_ROOT . '/models/article/ArticleDTO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeController
 *
 * @author qu_hien
 */
class HomeController {

    //put your code here
    public function invoke($action) {
        switch ($action) {
            case 'home':
                $this->home();
                break;
            default:
                break;
        }
    }

    public function home() {
        // Get page number
        $page = filter_input(INPUT_GET, 'page');

        if ($page == null) {
            $page = PAGE_DEFAULT;
        }
        // Get items base on pagination
        $dao = new ArticleDAO();
        $results = $dao->getByNumberPage($page);

        // display base on new results
        include_once THEME_ROOT . '/home.php';
    }

}
