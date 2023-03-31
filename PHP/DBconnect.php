<?php 
//DB연결
$dbc = mysqli_connect("localhost","root","root506","employees",3306);

//쿼리 요청
$result_query = mysqli_query($dbc,"SELECT emp_no,first_name FROM employees limit 10;");
// var_dump($result_query);
$result_row = mysqli_fetch_assoc($result_query);
var_dump($result_row);
$result_row = mysqli_fetch_row($result_query);
var_dump($result_row);


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