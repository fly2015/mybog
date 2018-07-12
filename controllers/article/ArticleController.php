<?php

require_once DOCUMENT_ROOT . '/models/article/ArticleDAO.php';
require_once DOCUMENT_ROOT . '/models/article/ArticleDTO.php';
require_once DOCUMENT_ROOT . '/models/category/CategoryDAO.php';
require_once DOCUMENT_ROOT . '/models/common/Common.php';
require_once DOCUMENT_ROOT . '/models/common/Upload.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleController
 *
 * @author qu_hien
 */
class ArticleController {

    //put your code here
    public function invoke($action) {
        switch ($action) {
            case 'list':
                $this->view();
                break;
            case 'add':
                $this->add();
                break;
            case 'fetch-youtube':
                $this->fetchYoutube();
                break;
            case 'detail':
                $this->detail();
                break;
            default:
                break;
        }
    }

    public function view() {
        $dao = new ArticleDAO();
        $items = $dao->getAll($page);

//        print_r('<pre>');
//        print_r($items);
//        print_r('</pre>');

        include DOCUMENT_ROOT . '/admin/views/article/list.php';
    }

    public function add() {
        if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {

            $category_id = filter_input(INPUT_POST, 'category_id');
            $user_id = $_SESSION['user_id'];
            $name = filter_input(INPUT_POST, 'name');

            $common = new Common();
            $slug = $common->create_slug($name);

            $image_source = $_FILES['image'];
            $image = '';
            if ($image_source['name'] != '') {
                $upload = new Upload($image_source);
                $upload->setUploadDir(UPLOAD_DIR);
                $image = $upload->upload();
            }


            $summary = filter_input(INPUT_POST, 'summary');
            $content = filter_input(INPUT_POST, 'content');
            $status = filter_input(INPUT_POST, 'status');

            $item = new ArticleDTO();
            $item->setCategory_id($category_id);
            $item->setUser_id($user_id);
            $item->setName($name);
            $item->setSlug($slug);
            $item->setImage($image);
            $item->setSummary($summary);
            $item->setContent($content);
            $item->setStatus($status);

            if ($item->getInfos() != null) {
                $_SESSION['errors'] = $item->getInfos();
                header('Location: index.php?controller=article&action=add');
            } else {
                $dao = new ArticleDAO();
                $dao->create($item);
                header('Location: index.php?controller=article&action=list');
            }
        } else {
            $dao = new CategoryDAO();
            $categories = $dao->getAll();

            include DOCUMENT_ROOT . '/admin/views/article/add.php';
        }
    }
    
    public function fetchYoutube() {
        $video_url = filter_input(INPUT_POST, 'url');
        $video_infos = getVideoInfo($video_url);
    }

   

    public function detail() {
        $slug = filter_input(INPUT_GET, 'slug');
        if ($slug == null) {
            include THEME_ROOT . '404.php';
        } else {
            $dao = new ArticleDAO();
            $item = $dao->getBySlug($slug);
            if ($item == null) {
                include THEME_ROOT . '404.php';
            } else {
                include_once THEME_ROOT . '/article.php';
            }
        }
    }
    
    
    public function getVideoInfo($video_url) {
        
    }

}
