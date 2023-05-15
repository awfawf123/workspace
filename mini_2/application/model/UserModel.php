<?php

namespace application\model;

class UserModel extends Model{
    public function getUser($arrUserInfo){
        $sql = "select * from user_info where u_id = :id and u_pw = :pw";
        $prepare = [
            ":id" => $arrUserInfo["id"]
            ,":pw" => $arrUserInfo["pw"]
        ];

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        } catch (Exception $e) {
            echo "UserModel->getUser Error : ".$e->getMessage();
            exit();
        }finally{
            $this->closeConn();
        }
        return $result;
    }

    public function insertUser($arrUserInfo){
        $sql = " INSERT INTO user_info(
            u_id
            ,u_pw
            ,u_birth
            ,u_gender
            ,u_email
            ,u_num
            )
            VALUES(
                :id
                ,:pw
                ,:birth
                ,:gender
                ,:email
                ,:num
            )";
        $prepare = [
            ":id" => $arrUserInfo["id"]
            ,":pw" => $arrUserInfo["pw"]
            ,":birth" => $arrUserInfo["birth"]
            ,":gender" => $arrUserInfo["gender"]
            ,":email" => $arrUserInfo["email"]
            ,":num" => $arrUserInfo["num"]
        ];

        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare);
            $this->conn->commit();
        } catch (Exception $e) {
            $this->conn->rollback();
            echo "UserModel->getUser Error : ".$e->getMessage();
            exit();
        }finally{
            $this->closeConn();
        }
        return $result;
    }
   
}