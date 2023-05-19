<?php

namespace application\model;

class ProductModel extends Model{
    public function getList($flg = true){
        $sql = " select * from list_info order by li_no desc ";
        
        if($flg){
            $sql .=" limit 3 ";
        }
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
    public function insertList($arrInfo){
        $sql = " INSERT INTO list_info(
            li_name
            ,li_end_date
            ,li_cont
            ,li_price
            ,li_category
            ,li_imgfile
            )
            VALUES(
                :li_name
                ,:li_end_date
                ,:li_cont
                ,:li_price
                ,:li_category
                ,:li_imgfile
            )";
        $prepare = [
            ":li_name" => $arrInfo["li_name"]
            ,":li_end_date" => $arrInfo["li_end_date"]
            ,":li_cont" => $arrInfo["li_cont"]
            ,":li_price" => $arrInfo["li_price"]
            ,":li_category" => $arrInfo["li_category"]
            ,":li_imgfile" => $arrInfo["li_imgfile"]
        ];

        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare);
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }
}