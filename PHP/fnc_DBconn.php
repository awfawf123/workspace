<?php
//------------------------------
//함수명 : my_db_conn
//기능 : DB Connect
//파라미터 : PDO &$param_conn
//리턴 : X
//------------------------------
function my_db_conn(&$param_conn){
$db_host = "localhost";//ip
$db_user = "root";
$db_password = "root506";
$db_name = "employees";
$db_charset = "utf8mb4";
$db_dns = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
$db_option = array(PDO::ATTR_EMULATE_PREPARES => false //db의 Prepared Statement 기능을 사용하도록 설정
                    ,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // PDO Exception을 Throws하도록 설정
                    ,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC //연상배열로 가져옴
                    );

//PDO class로 DB연동
$param_conn = new PDO($db_dns,$db_user,$db_password,$db_option);
}//end function my_db_conn();

// $obj_conn =null; //PDO Class null로초기화
// // DB Connect
// my_db_conn($obj_conn);

// $sql =" SELECT *
//         FROM employees
//         LIMIT :limit_start ";


// $arr_prepare = array(":limit_start" => 5);
// $stmt = $obj_conn -> prepare($sql);
// $stmt -> execute($arr_prepare);
// $result = $stmt->fetchAll();
// var_dump($result);

function arr_pre_add($cont){
    $obj_conn =null; //PDO Class null로초기화
    my_db_conn($obj_conn); //DB연결

    $sql =" SELECT *
            FROM employees
            LIMIT :limit_start ";

    $arr_prepare = array(":limit_start" => "$cont");
    $stmt = $obj_conn -> prepare($sql);
    $stmt -> execute($arr_prepare);
    $result = $stmt->fetchAll();
    var_dump($result);
}//end function arr_pre_add();

arr_pre_add(5);


$obj_conn = null; //DB Connection 파기