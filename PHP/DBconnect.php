<?php 
//DB연결
$dbc = mysqli_connect("localhost","root","root506","employees",3306);

//쿼리 요청
// $result_query = mysqli_query($dbc,"SELECT emp_no,first_name FROM employees limit 10");
// var_dump($result_query);
// $result_row = mysqli_fetch_assoc($result_query);
// var_dump($result_row);
// $result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);

$i1 = "F";
$i2 = 10010;
$i3 = 5;
$result =null;
//Prepared statement : 
$stmt = $dbc->stmt_init(); // statement를 셋팅
$stmt-> prepare("SELECT emp_no,first_name FROM employees where gender = ? and emp_no <= ? limit ?"); //DB 질의 할 쿼리를 작성
$stmt-> bind_param("sii",$i1,$i2,$i3); // ? = i:int s:string Prepare 셋팅
$stmt-> execute(); //DB에 쿼리 질의 실행
// $stmt->bind_result($col1,$col2); //질의 결과를 각 아규먼트에 저장하기 위한 셋팅

//질의 결과를 우리가 지정한 변수에 담아 사용하는 방법
// $stmt->fetch(); // bind_result에서 셋팅한 아규먼트에 값 저장(한번 실행 될때마다 한 레코드씩 저장)
// var_dump($col1,$col2);
// while($stmt->fetch()){
//     echo $col1.$col2."\n";
// }


$result = $stmt->get_result(); // 질의 결과를 저장
//패치를 루프로 돌려서 모든 질의 결과를 가져오는 방법
while($row = $result->fetch_assoc()){
    // echo $col1.$col2."\n";
    // var_dump($row);
    echo $row["first_name"];
}

// foreach ($result_query as $key => $val) {
//     print_r($val);
// }

// while ($temp_row = mysqli_fetch_row($result_query)) {
//     var_dump($temp_row);
// }

// while ($temp_row = mysqli_fetch_assoc($result_query)) {
//     var_dump($temp_row["first_name"]);
// }

mysqli_close($dbc);
?>