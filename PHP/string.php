<?php
    //문자열 합치기
    // $str_1 = "aaa";
    // $str_2 = "bbb";
    // $str_sum = $str_1.$str_2;

    // // echo $str_sum;

    // //대소문자 변환
    // $str_en = "abcD efgh";
    // echo strtolower($str_en)."\n";
    // echo strtoupper($str_en)."\n";
    // echo ucfirst($str_en)."\n";
    // echo ucwords($str_en)."\n";

    // //URL관련 함수
    // $url = "https://www.google.com/search?q=google&oq=google&aqs=chrome.0.0i131i355i433i512j46i131i199i433i465i512j0i131i433i512l8.2332j0j15&sourceid=chrome&ie=UTF-8";
    // $arr_url = parse_url($url);
    // // var_dump($arr_url);

    // parse_str($arr_url["query"], $arr_parse);
    // var_dump($arr_parse);

    //역순의 문자열
    // $str_abcd = "abcd";
    // echo strrev($str_abcd);

    //문자열 자르기
    // $str_1 = "가나다라마";
    // echo mb_substr($str_1,3,2);
    // echo mb_substr($str_1,-2);

    // $str_tng = "안녕하세요. PHP입니다.";
    // echo mb_substr($str_tng,7,7),"\n";
    // echo mb_substr($str_tng,-7),"\n";;
    // echo mb_substr($str_tng,7),"\n";;
    // //"세요. P"
    // echo mb_substr($str_tng,3,5),"\n";
    // echo mb_substr($str_tng,-11,5),"\n";

    //문자열 빈공간 지우기
    // $str_trim = "        abcd     ";
    // echo trim($str_trim);
    // echo "aaa";
    // echo rtrim($str_trim),"\n";
    // echo ltrim($str_trim);

    //문자열의 길이
    // $str_len = "가나다라";
    // echo mb_strlen($str_len);

    //문자열 포맷에 따라 출력
    // define("WELCOME","안녕하세요. %s님");
    // printf(WELCOME,"PHP");

    //기본 포맷 : ERROR(숫자) :XXX ERROR가 발생했습니다.
    // 에러 번호 : 에러종류
        //1 :시스템
        //2 :로그인
        //3 : 접속
    // define("ERROR","ERROR(%d):%s ERROR가 발생했습니다.");
    // printf(ERROR,1,"시스템");
    // printf(ERROR,2,"로그인");
    // printf(ERROR,3,"접속");

    //문자열을 분리하는 함수
    // $str_sscanf = "가나다라 50 abcd";
    // sscanf($str_sscanf, "%s %d %s",$str_ko,$int_d,$str_en);
    // echo $str_ko,"\n",$int_d,"\n",$str_en;

    //문자열 반복
    // echo str_repeat("*",2);

    //문자열을 특정문자열로 분리
    // $str_expl = "홍길동, 27세, 남자, 의적, 조선";
    // $arr_expl = explode( ",", $str_expl);
    // print_r($arr_expl);

    //배열을 특정문자열로 합침
    // $str_impl = implode(",",$arr_expl);
    // echo $str_impl;
?>