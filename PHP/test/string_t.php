<?php 
    // $str_b = "Happy";
    // echo mb_substr($str_a,0,12);
    // echo $str_b;
    // echo mb_substr($str_a,-1),"\n";
    
    
    
    
    //함수명 : my_str_replace, 리턴값 : String $result_str;
    // function my_str_replace($result_str){
    //     $str_a = "I am always Hello.";
    //     $str_expl = explode("Hello",$str_a);
    //     $result_str = implode("$result_str",$str_expl);
    //     echo $result_str;
    //     return $result_str;
    // }
    // my_str_replace("Happy");

    //수정
    $str_a = "I am always Hello.";
    function my_str_replace($param_1,$param_2,$param_3){
        $arr_expl = explode($param_2,$param_1);
        $result_str = implode($param_3,$arr_expl);
        return $result_str;
    }
    echo my_str_replace($str_a,"Hello","Apple");
    //replace
    echo str_replace("Hello","Happy",$str_a);


?>