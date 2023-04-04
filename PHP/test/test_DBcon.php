<?php
//우리가 작성한 DB Connect 함수(my_db_conn)을 이용해서 아래 데이터를 출력
include_once("../fnc_DBconn.php");

//1.전체 월급의 평균
$sql =" SELECT AVG(salary)
        FROM salaries ";

$obj_conn =null; //PDO Class null로초기화
// DB Connect
my_db_conn($obj_conn);
//query 메소드
$stmt = $obj_conn -> query($sql);
$result = $stmt->fetchAll();
var_dump($result);

//prepare 메소드
// $stmt = $obj_conn -> prepare($sql);
// $stmt->execute();
// $result = $stmt->fetchAll();
// var_dump($result);


//2. 새로운 사원 정보를 employees 테이블에 등록
// $sql =" INSERT INTO employees(
//         emp_no
//         ,birth_date
//         ,first_name
//         ,last_name
//         ,gender
//         ,hire_date
//         ,sup_no
//         )
//         Values(
//             :emp_no
//             ,:birth_date
//             ,:first_name
//             ,:last_name
//             ,:gender
//             ,:hire_date
//             ,:sup_no
//             ) ";
// $arr_prepare = array(":emp_no"=> 500001
//                         ,":birth_date" => "2023-01-01"
//                         ,":first_name" => "JaeHun"
//                         ,":last_name" => "Oh"
//                         ,":gender" =>"M"
//                         ,":hire_date" => "2023-01-01"
//                         ,":sup_no" => 1
//                         );
// $stmt = $obj_conn -> prepare($sql);
// $result = $stmt -> execute($arr_prepare);
// $obj_conn->commit();
// var_dump($result);

//3. 2에서 등록한 사원의 이름을 "길동",성은"홍"으로 변경
// $sql =" UPDATE employees
//         SET first_name=:first_name,
//             last_name=:last_name 
//         WHERE emp_no =:emp_no";

// $arr_prepare = array(":first_name"=>"길동"
//                         ,":last_name" => "홍"
//                         ,":emp_no" =>500001
// );

// $stmt = $obj_conn -> prepare($sql);
// $result = $stmt -> execute($arr_prepare);
// $obj_conn->commit();
// var_dump($result);

//4.2에서 등록한 사원을 삭제
// $sql = " DELETE FROM employees
//         WHERE emp_no=:emp_no";
// $arr_prepare = array(":emp_no"=>500001);

// $stmt = $obj_conn -> prepare($sql);
// $result = $stmt -> execute($arr_prepare);
// $obj_conn->commit();
// var_dump($result);


$obj_conn = null; //db파기