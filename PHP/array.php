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
    // print_r($arr_week);

    //중복되지 않는 원소를 반환
    $arr_diff_1 = array("a","b","c");
    $arr_diff_2 = array("a","b","d");
    $arr_diff = array_diff($arr_diff_1, $arr_diff_2);
    // print_r($arr_diff);
    
    //배열의 정렬 asort(), arsort(), ksort(), krsort()
    $arr_asort = array("b","a","d","c");
    asort($arr_asort);
    // print_r($arr_asort);

    $arr_arsort = array("b","a","d","c");
    arsort($arr_arsort);
    // print_r($arr_arsort);

    $arr_ksort = array("key1" => "val1",
                     "key3" => "val3",
                     "key2" => "val2"
                    );
    ksort($arr_ksort);
    // print_r($arr_ksort);

    $arr_krsort = array("key1" => "val1",
                     "key3" => "val3",
                     "key2" => "val2",
                     "key4" => "val4"
                    );
    krsort($arr_krsort);
    // print_r($arr_krsort);

    // array의 사이즈를 반환하는 함수
    // echo count($arr_krsort);

    //foreach
    $arr1 = array("a" => "1",
                     "b" => "2",
                     "c" => "3",
                     "d" => "4"
                 );

    // foreach($arr1 as $key => $val){
    //     echo $key.$val."\n";
    // }
    foreach( $arr1 as $val){
        echo $val;
    }
?>