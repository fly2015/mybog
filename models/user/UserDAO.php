<?php
require_once DOCUMENT_ROOT . '/models/user/UserDTO.php';
class UserDAO {

    function getAll() {
        return items;
    }

    function getById($id) {
        return item;
    }

    function create($item) {
        
    }

    function update($id) {
        
    }

    function delete($id) {
        
    }

    public function login($username, $password) {
        $con = DBAccessor::DBconnection();
        $query = "SELECT * FROM USERS WHERE USERNAME = ? AND PASSWORD = ? AND STATUS = 1";
        $stmt = $con->prepare($query);
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        
        $result = $stmt->get_result();
        $user = new UserDTO();
        while ($row = mysqli_fetch_assoc($result)) {
            $user->setId($row['id']);
            $user->setUsername($row['username']);
            $user->setPassword($row['password']);
            $user->setRole($row['role']);
        }


        $stmt->close();
        DBAccessor::closeConnect($con);
        return $user;
    }

}

?>