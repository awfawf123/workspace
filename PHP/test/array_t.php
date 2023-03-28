<?php 
    //음식 종류 5개 이상을 배열로
    $food = array("자장면","짬뽕","탕수육","팔보채","잡채밥");
    // echo $food[0];
    //무작위로 값 출력
    $random = rand(0,4);
    // echo $food[$random];

    //키는 요리명, 값은 주재료 하나로 이루어진 배열
    $arr_asso_cook = array("볶음밥" =>"밥"
                           ,"된장찌개" =>"된장"
                           ,"김치찌개" =>"김치"
                           ,"라면" => "면");
    // echo $arr_asso_cook["라면"];
    //키:김치 원소 삭제
    $arr_asso_del = array("볶음밥" =>"밥"
                            ,"된장찌개" => "된장"
                            ,"김치" => "김치"
                            ,"라면" => "면");
    unset($arr_asso_del["김치"]);
    // print_r($arr_asso_del);

    $arr_asso_for = array("볶음밥" =>"밥"
                            ,"된장찌개" => "된장"
                            ,"삭제" => "값값"
                            ,"김치" => "김치"
                            ,"라면" => "면"
                        );
    // foreach문을 이용해서 키가 "삭제"인 요소를 제거
    // if문 사용, unset("삭제") X, 키가 "삭제"이외는 "키 : 값" 포맷으로 출력
    foreach ($arr_asso_for as $key => $val) {
        if($key === "삭제"){
            // echo $key;
            unset($arr_asso_for[$key]);
            // unset($arr_asso_for["삭제"]);
        }else{
            echo $key." : ".$val."\n";
        }
    }
    //  var_dump($arr_asso_for);
?>