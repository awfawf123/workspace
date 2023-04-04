<?php

include_once("../fnc_DBconn.php");

try {
    $obj_conn = null;
    my_db_conn($obj_conn);

    $sql1 = " SELECT * FROM department ";
    $sql2 = " SELECT * FROM dept_manager ";
    $stmt1 = $obj_conn->query($sql1);
    $stmt2 = $obj_conn->query($sql2);
    $result1 = $stmt1->fetchAll();
    $result2 = $stmt2->fetchAll();
    echo "정상";

} catch ( Exception $e) {
    echo $e->getMessage();
    echo "\n비정상";
}
finally{
    $obj_conn = null;
}



