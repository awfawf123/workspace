<?php 
    print ("안녕하세요....?\n");

    echo "안녕하세요 에코\n";

    $test_num = 'qqqq';

    echo $test_num; echo "\n";
    // 네이밍 기법
    // 1.카멜 기법: 단어의 첫글자는 대문자 나머지는 소문자
    //     예)$TestNum
    // 2.스네이크 기법: 단어와 단어 사이를 _로 이어주고 전부 소문자로 작성하는 기법
    //     예)$test_num

    echo "탕수육8000\n자장면6000\n짬뽕6000\n";

    $menu = array('탕수육','자장면','짬뽕');
    $price = array('8,000','6,000','6,000');
    
     for($i=0;$i<3;$i++){
        echo $menu[$i]; echo " ";
         echo $price[$i]; echo "\n";
     };
?>