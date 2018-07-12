<?php
require_once DOCUMENT_ROOT . '/models/category/CategoryDTO.php';
require_once DOCUMENT_ROOT . '/models/common/iBase.php';
class CategoryDAO implements iBase {
    function getAll() {
        $con = DBAccessor::DBconnection();
        $query = "SELECT * FROM CATEGORIES";
        //$stmt = $con->prepare($query);
        $result = mysqli_query($con, $query);
       // $stmt->execute();
       // $result = $stmt->get_result();
        $items = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $item = new CategoryDTO();

            $item->setId($row['id']);
            $item->setName($row['name']);
            $item->setType($row['type']);
            $item->setPosition($row['position']);
            $item->setStatus($row['status']);

            $items[] = $item;
        }

        //$stmt->close();
        DBAccessor::closeConnect($con);
        return $items;
    }

    function getById($id) {
        $con = DBAccessor::DBconnection();
        $query = "SELECT * FROM CATEGORIES WHERE ID = ?";

        $stmt = $con->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();

        while ($row = mysqli_fetch_assoc($result)) {
            $item = new CategoryDTO();
            
            $item->setId($row['id']);
            $item->setName($row['name']);
            $item->setType($row['type']);
            $item->setPosition($row['position']);
            $item->setStatus($row['status']);

            $items [] = $item;
        }

        $stmt->close();
        DBAccessor::closeConnect();

        return $items;
    }

    function create(CategoryDTO $item) {
        $con = DBAccessor::DBconnection();
        $query = "INSERT INTO CATEGORIES(NAME,TYPE,POSITION, STATUS) VALUES (?,?,?,?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ssss", $item->getName(), $item->getType(), $item->getPosition(), $item->getStatus());
        $stmt->execute();
        
        $result = $stmt->affected_rows;
        
        $stmt->close();
        DBAccessor::closeConnect($con);
        
        return $result;
    }

    function update(CategoryDTO $item) {
        $con = DBAccessor::DBconnection();
        $query = "UPDATE CATEGORIES SET NAME=?, TYPE=?, POSITION=?, STATUS=? WHERE ID=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ssssi", $item->getName, $item->getType(), $item->getPosition(), $item->getStatus(), $item->getId());
        $stmt->execute();

        $stmt->close();
        DBAccessor::closeConnect($con);
    }

    function delete($id) {
        $con = DBAccessor::DBconnection();
        $query = "DELETE CATEGORIES WHERE ID=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $stmt->close();
        DBAccessor::closeConnect();
    }

    public function getByName($name) {
        
    }

    public function getBySlug($slug) {
        
    }

    public function getByNumberPage($page) {
        
    }

}
