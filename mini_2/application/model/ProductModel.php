<?php

namespace application\model;

class ProductModel extends Model{
    public function getList(){
        $sql = " select * from list_info ";
        
        $prepare = [];
       
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        } catch (Exception $e) {
            echo "UserModel->getUser Error : ".$e->getMessage();
            exit();
        }
        return $result;
    }
}