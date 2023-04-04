<?php
include_once("./fnc_DBconn.php");
//에러처리를 하기위한 문법
//try-catch문
try {
    //실행하고 싶은 코드
    $obj_conn = null;
    my_db_conn($obj_conn);
    $sql = " SELECT * FROM employee WHERE emp_no = 10001";
    $stmt = $obj_conn->query($sql);
    $result = $stmt->fetchAll();

    if(count($result) ===0){
        //throw Exception : 에러를 강제로 일으키는 구문
        throw new Exception("E99");
    }

    var_dump($result);
} catch ( Exception $e) {
    //에러시 실행
    if($e->getMessage() ==="E99"){
        echo " data 0";
    }else{
        echo $e->getMessage();
    }

    echo "Error\n";
    echo $e->getMessage();
}
finally{
    //무조건 실행
    $obj_conn=null;
}
echo"종료";