<?php 
    //두 매개변수의 차를 구하는 함수
    function fnc_minus($int_a, $int_b){
        $minus = $int_a - $int_b;
        return $minus;
    }
    $result_minus = fnc_minus(5,3);
    // echo $result_minus."\n";

    //두 매개변수를 나눈 함수
    function fnc_div($int_c,$int_d){
        $div = $int_c / $int_d;
        return $div;
    }
    $result_div = fnc_div(6,3);
    // echo $result_div."\n";

    //두 매개 변수를 곱하는 함수
    function fnc_multi($int_e,$int_f){
        $multi = $int_e * $int_f;
        return $multi;
    }
    $result_multi = fnc_multi(6,3);
    // echo $result_multi."\n";
    
    // 빼기, 곱하기, 나누기를 가변 파라미터 함수
    function fnc_args_minus(){
        $args = func_get_args();
        foreach ($args as $val) {
            if($args[0] == $val){
                $num = $val;
            }else{
                $num -= $val;
            }
        }
        return $num;
    }
    //   echo fnc_args_minus(10,2,5);
    function fnc_args_div(){
        $args = func_get_args();
        foreach ($args as $val) {
            if($args[0] == $val){
                $num = $val;
            }else{
                $num /= $val;
            }
        }
        return $num;
    }
    // echo fnc_args_div(10,2,5);
    function fnc_args_multi(){
        $args = func_get_args();
        foreach ($args as $val) {
            if($args[0] == $val){
                $num = $val;
            }else{
                $num *= $val;
            }
        }
        return $num;
    }
    // echo fnc_args_multi(10,2,5);
?>