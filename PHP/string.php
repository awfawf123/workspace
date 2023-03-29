<?php
    //문자열 합치기
    $str_1 = "aaa";
    $str_2 = "bbb";
    $str_sum = $str_1.$str_2;

    // echo $str_sum;

    //대소문자 변환
    $str_en = "abcD efgh";
    echo strtolower($str_en)."\n";
    echo strtoupper($str_en)."\n";
    echo ucfirst($str_en)."\n";
    echo ucwords($str_en)."\n";

    //URL관련 함수
    $url = "https://www.google.com/search?q=google&oq=google&aqs=chrome.0.0i131i355i433i512j46i131i199i433i465i512j0i131i433i512l8.2332j0j15&sourceid=chrome&ie=UTF-8";
    $arr_url = parse_url($url);
    // var_dump($arr_url);

    parse_str($arr_url["query"], $arr_parse);
    var_dump($arr_parse);
?>