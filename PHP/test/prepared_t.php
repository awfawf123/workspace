<?php
//아래 쿼리로 결과 출력
//SELECT emp_no, salary 
//FROM salaries 
//WHERE to_date = ? AND salary >= ?
//ORDER BY salary DESC
//LIMIT ?
//--------셋팅값--------------
//to_date : "9999-01-01"
//salary : 50000
//LIMIT : 5

$dbc = mysqli_connect("localhost","root","root506","employees",3306);

$s_date = "9999-01-01";
$i_sal = 50000;
$i_lim = 5;
$stmt = $dbc->stmt_init(); // statement를 셋팅, mysqli_stmt_prepare를 사용하기 위한 객체를 초기화하고 리턴해줍니다.
$stmt-> prepare("SELECT emp_no,salary
                 FROM salaries 
                 where to_date = ? and salary >= ?
                 ORDER BY salary DESC
                 limit ?"); //DB 질의 할 쿼리를 작성
$stmt-> bind_param("sii",$s_date,$i_sal,$i_lim); // ? = i:int s:string Prepare 셋팅
$stmt-> execute(); //쿼리 실행

$result = $stmt->get_result();
$row =$result->fetch_assoc();
var_dump($row);
// while ($row = $result->fetch_assoc()) {
//     echo "emp_no: ".$row["emp_no"]." salary: ".$row["salary"]."\n";
// }


mysqli_close($dbc);
// $dbc->close();