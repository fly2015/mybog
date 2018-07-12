<?php

require_once DOCUMENT_ROOT . '/models/category/CategoryDTO.php';
require_once DOCUMENT_ROOT . '/models/common/Common.php';
require_once DOCUMENT_ROOT . '/models/common/iBase.php';

class ArticleDAO implements iBase {

    public function delete($id) {
        
    }

    public function getAll() {
        $con = DBAccessor::DBconnection();
        $query = 'SELECT * FROM ARTICLES AS A INNER JOIN CATEGORIES AS C ON A.CATEGORY_ID = C.ID WHERE A.STATUS = 1';
        $result = mysqli_query($con, $query);
        // $results = mysqli::query($con, $query);

        $items = [];
        $rows = mysqli_fetch_all($result);

        foreach ($rows as $key => $value) {
            $item = new ArticleDTO();
            $row = $rows[$key];
            //var_dump($row);exit;
            $item->setId($row[0]);
            $item->setCategory_id($row[1]);
            $item->setUser_id($row[2]);
            $item->setName($row[3]);
            $item->setSlug($row[4]);
            $item->setImage($row[5]);
            $item->setSummary($row[6]);
            $item->setContent($row[7]);
            $item->setCreate_time($row[8]);
            $item->setModify_time($row[9]);
            $item->setStatus($row[10]);
            $item->setCategory_name($row[12]);
            $item->setType($row[14]);

            $items[] = $item;
        }


        DBAccessor::closeConnect($con);
        return $items;
    }

    public function getById($id) {
        
    }

    public function getBySlug($slug) {
        $con = DBAccessor::DBconnection();
        $query = "SELECT A.ID, A.NAME, A.SLUG, A.IMAGE, A.CONTENT, A.CREATE_TIME, A.CATEGORY_ID, A.USER_ID, C.NAME AS CATEGORY_NAME, U.ID AS USER_ID , U.USERNAME, U.NAME AS FULLNAME "
                . "FROM ARTICLES AS A "
                . "INNER JOIN CATEGORIES AS C ON A.CATEGORY_ID = C.ID "
                . "INNER JOIN USERS AS U ON A.USER_ID = U.ID  WHERE A.STATUS = 1 AND A.SLUG = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param('s', $slug);

        $stmt->execute();

        //$row = mysqli_fetch_assoc($stmt->get_result());

        $stmt->bind_result($id, $name, $slug, $image, $content, $create_time, $category_id, $user_id, $category_name, $user_id, $username, $fullname);
        $stmt->fetch();

        $item = new ArticleDTO();
        $item->setId($id);
        $item->setName($name);
        $item->setSlug($slug);
        $item->setImage($image);
        $item->setContent($content);
        $item->setCreate_time($create_time);
        
        // Save category's information
        $item->setCategory_id($category_id);
        $item->setCategory_name($category_name);
        
        // Save user's information
        $user = new UserDTO();
        $user->setId($user_id);
        $user->setUsername($username);
        $user->setName($fullname);
        $item->setUser($user);


//        print_r("<pre>");
//        print_r($item->getUser()->getName());
//        print_r("</pre>");

        return $item;
    }

    public function update() {
        
    }

    public function create(ArticleDTO $item) {
        $con = DBAccessor::DBconnection();

        $query = 'INSERT INTO ARTICLES(CATEGORY_ID, USER_ID, NAME, SLUG, IMAGE,SUMMARY, CONTENT, STATUS) VALUES (?,?,?,?,?,?,?,?)';

        $stmt = $con->prepare($query);
        $stmt->bind_param("iisssssi", $item->getCategory_id(), $item->getUser_id(), $item->getName(), $item->getSlug(), $item->getImage(), $item->getSummary(), $item->getContent(), $item->getStatus());

        $stmt->execute();

        $result = $stmt->affected_rows;

        $stmt->close();
        DBAccessor::closeConnect($con);

        return $result;
    }

    public function getByName($name) {
        
    }

    public function getByNumberPage($page) {
        $common = new Common();
        $total_items = $common->getNumberItems('ARTICLES');

        // Get total of items.
        $con = DBAccessor::DBconnection();
        // Get total of number page
        $total_pages = ceil($total_items / ITEM_PER_PAGE);
        // identify starting item
        $start_item = ($page * ITEM_PER_PAGE) - ITEM_PER_PAGE;
        $query = 'SELECT * FROM ARTICLES AS A INNER JOIN CATEGORIES AS C ON A.CATEGORY_ID = C.ID '
                . 'WHERE (A.STATUS = 1 AND C.STATUS = 1) LIMIT ?, ' . ITEM_PER_PAGE . '';

        $stmt = $con->prepare($query);
        $stmt->bind_param("i", $start_item);
        $stmt->execute();
        $result = $stmt->get_result();

        $items = [];
        $rows = mysqli_fetch_all($result);

        foreach ($rows as $key => $value) {
            $item = new ArticleDTO();
            $row = $rows[$key];
            //var_dump($row);exit;
            $item->setId($row[0]);
            $item->setCategory_id($row[1]);
            $item->setUser_id($row[2]);
            $item->setName($row[3]);
            $item->setSlug($row[4]);
            $item->setImage($row[5]);
            $item->setSummary($row[6]);
            $item->setContent($row[7]);
            $item->setCreate_time($row[8]);
            $item->setModify_time($row[9]);
            $item->setStatus($row[10]);
            $item->setCategory_name($row[12]);
            $item->setType($row[14]);

            $items[] = $item;
        }


        $stmt->close();
        DBAccessor::closeConnect($con);

        $infos['$total_pages'] = $total_pages;
        // $infos['$page'] = $page;

        $results['info'] = $infos;
        $results['item'] = $items;

        return $results;
    }

}

?>