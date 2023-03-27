<?php 
    // $week = array('sun','mon');
    // echo $week[0];

    $mon = "Mon";
    $sun = "Sun";
    $tue = "Tue";
    $wed = "Wed";

    // $week = array($mon,$sun,$tue,$wed);
    // echo $week[0];
    // $week = array("Sun","Mon","Tue","Wed");
    // Mon, Wed, Sun, Tue
    // $week2 = array($week[1],$week[3],$week[0],$week[2]);
    // echo $week2[0],$week2[1],$week2[2],$week2[3];

    //멀티타입
    $arr_mult_type = array("aaa", 1, 3.14, 'a');
    // echo $arr_mult_type[1];

    //연상 배열
    $arr_aso = array("key1" => "val1",
                     "key2" => "val2",
                     3 => "val3");
    // echo $arr_aso[3];
    // var_dump($arr_aso);

    // 다차원 배열
    $arr_temp = array(
                    array(1,2,3,4)
                    ,array(5,6,7,8)
                    ,array(
                        array(9,10,11)
                        )
                    );
    // echo $arr_temp[0][0];
    // var_dump($arr_temp);

    $arr_temp3 = $arr_temp[2];
    // $arr_temp3_c = array(
    //                    array(9,10,11)
    //                 )

    //배열의 원소 삭제 : unset()
    $arr_week = array("Sun","Mon","delete","Tue","Wed");
    unset($arr_week[2]);
    print_r($arr_week);
?>