<?php

namespace application\model;

class UserModel extends Model{
    public function getUser($arrUserInfo, $pwFlg = true){
        $sql = " select * from user_info where u_id = :id ";
        if($pwFlg){
            $sql .=" and u_pw = :pw ";
        }
        $prepare = [
            ":id" => $arrUserInfo["id"]
        ];

        if($pwFlg){
            // $prepare[":pw"] = base64_encode($arrUserInfo["pw"]);
            $prepare[":pw"] = $arrUserInfo["pw"];
        }
       
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
    public function emailChk($arrUserInfo){
        $sql = " select * from user_info where u_email = :email ";

        $prepare = [
            ":email" => $arrUserInfo["email"]
        ];
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        } catch (Exception $e) {
            echo "UserModel->getEmail Error : ".$e->getMessage();
            exit();
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
            ,u_name
            )
            VALUES(
                :id
                ,:pw
                ,:birth
                ,:gender
                ,:email
                ,:num
                ,:u_name
            )";
        $prepare = [
            ":id" => $arrUserInfo["id"]
            ,":pw" => $arrUserInfo["pw"]
            ,":birth" => $arrUserInfo["birth"]
            ,":gender" => $arrUserInfo["gender"]
            ,":email" => $arrUserInfo["email"]
            ,":num" => $arrUserInfo["num"]
            ,":u_name" => $arrUserInfo["u_name"]
        ];

        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare);
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }
    public function updateUser($arrUserInfo){
        if($arrUserInfo["pw"] !== ""){
            $pw = " ,u_pw = :pw ";
        }
        
        $sql = " UPDATE user_info SET "
                ." u_id = :id "
                .$pw
                ." ,u_birth = :birth "
                ." ,u_gender = :gender "
                ." ,u_email = :email "
                ." ,u_num = :num "
                ." ,u_name = :u_name "
                ." WHERE u_no = :u_no ";
                
        $prepare = [
            ":id" => $arrUserInfo["id"]
            ,":birth" => $arrUserInfo["birth"]
            ,":gender" => $arrUserInfo["gender"]
            ,":email" => $arrUserInfo["email"]
            ,":num" => $arrUserInfo["num"]
            ,":u_name" => $arrUserInfo["u_name"]
            ,":u_no" => $arrUserInfo["u_no"]
        ];
        if($arrUserInfo["pw"] !== ""){
            $prepare[":pw"] = $arrUserInfo["pw"];
        }
        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare);
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }
   
}