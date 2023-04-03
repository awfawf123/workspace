<?php
include_once("./fnc_DBconn.php");


$obj_conn =null; //PDO Class null로초기화
// DB Connect
my_db_conn($obj_conn);

$sql =" SELECT *
        FROM employees
        LIMIT :limit_start ";

$arr_prepare = array(":limit_start" => 5);
$stmt = $obj_conn -> prepare($sql);
$stmt -> execute($arr_prepare);
$result = $stmt->fetchAll();
var_dump($result);


$obj_conn = null; //DB Connection 파기