<?php 
//사번이 10005 이하 사원의 사번, 이름(성 이름), 성별, 생일
$dbc = mysqli_connect("localhost","root","root506","employees",3306);
$result_query = mysqli_query($dbc,
            "SELECT emp_no,concat(first_name,' ',last_name),gender,birth_date
             FROM employees
             where emp_no <= 9999;");

$row_check = mysqli_num_rows($result_query);
if($row_check > 0){
    while ($temp_row = mysqli_fetch_row($result_query)) {
        echo implode(" ",$temp_row),"\n";
    }
}else{
    echo"데이터 없음";
}

// $flg_cnt = false;
// while ($temp_row = mysqli_fetch_row($result_query)) {
//     echo implode(" ",$temp_row),"\n";
//     $flg_cnt = true;
// }
// if(!$flg_cnt){
//     echo"데이터 없음";
// }



mysqli_close($dbc);
?>