<?php 
    //1.산술연산자
    echo 1+1;
    echo "\n", 1-1;
    echo "\n", 2*3;
    echo "\n", 3/3;
    echo "\n", 9%3;
    echo "\n",10 - 5 * 8;

    //2. 증가/감소 연산자
    $num1 = 1;
    $num2 = 1;
    echo "\n",$num1++;
    echo "\n",$num1;

    //3.산술 대입 연산자
    $num = 1;
    $num = $num+1; //2
    $num += 1; //3
    $num -= 1; //2
    $num *= 2; //4
    $num /= 2; //2
    echo "\n",$num,"\n";

    //산술 대입 연산자 이용해서 계산
    $tng_num = 10;
    echo "tng_num = ",$tng_num ,"\n";
    $tng_num += 10;
    echo "tng_num = ",$tng_num ,"\n";
    $tng_num /= 5;
    echo "tng_num = ",$tng_num ,"\n";
    $tng_num -= 4;
    echo "tng_num = ",$tng_num ,"\n";
    $tng_num %= 7;
    echo "tng_num = ",$tng_num ,"\n";
    $tng_num *= 3;
    echo "tng_num = ",$tng_num ,"\n";

    //산술 연산자 이용해서 계산
    $tng_num = 10;
    echo "\n", $tng_num + 10;
    echo "\n", $tng_num / 5;
    echo "\n", $tng_num - 4;
    echo "\n", $tng_num % 7;
    echo "\n", $tng_num * 3;

    //4. 비교 연산자
    // var_dump(1 > 2);
    // var_dump(1 < 2);
    // var_dump(1 >= 2);
    // var_dump(1 <= 2);
    // var_dump(1 == '1');
    // var_dump(1 === '1');
    // var_dump(1 != 1);
    // var_dump(1 !== '1');

    //5.논리 연산자
    // and 연산자
    // var_dump(1 == 1 && 2 == 2);
    // or 연산자
    // var_dump(1 == 1 || 2 == 1);
    // not
    //var_dump(!(1 == 1));
?>