<?php
// while + if 조합
// $i=0;
// while($i <=4){
//     if($i ===1){
//         echo "1";
//     }else if($i ===4){
//         echo "4";
//     }
//     ++$i;
// }
//foreach + if 조합
// $arr_ass = ["a"=>1,"b"=>2,"c"=>3];
// foreach ($arr_ass as $key => $val) {
//     if($key === "c"||$val ===2){
//         echo "if";
//     }
// }
//이중 루프
// for ($i=2; $i <= 9; $i++) { 
//     echo "$i 단\n";
// }
//1~100 숫자 중에 짝수의합
// $sum=0;
// for($i=1; $i<101; $i++){
//     if($i % 2 === 0){
//         $sum += $i;
//     }
// }
// echo $sum;

// $arr_test = array(1
//       ,2
//       ,array("info_a"=>3
//                     ,"info_b"=>4
//                     ,"info_arr"=>array("f_1"=>5
//                                        ,"f_2"=>7
//                                         )
//                     )
// );
// echo $arr_test[2]["info_arr"]["f_1"];

//함수명 : fnc_sum
//기능 :파라미터를 더한 값을 리턴
//파라미터 : INT $param_a, INT $param_b
//리턴값 : INT $sum;
// function fnc_sum($param_a,$param_b){
//     $sum = $param_a + $param_b;
//     return $sum;
// }
// echo fnc_sum(5,4);

// function fnc_sum(...$param_numbers){
//     return array_sum($param_numbers);
// }
// echo fnc_sum(1,2,3,4);

function fnc_global(){
    global $global_i;
    static $static_i = 0;
    $global_i=0;
}
// $global_i =5;
// fnc_global();
// echo $global_i;

// function fnc_static(){
//     static $static_i = 0;
//     echo $static_i;
//     $static_i++;
// }
// fnc_static();
// fnc_static();

// function fnc_reference(&$param_str){
//     $param_str = "fnc_reference";
// }
// $str ="aaa";
// echo fnc_reference($str);
// echo $str;



// function fnc_star($num){
//     for ($i=0; $i<=$num; $i++) {
//         for ($j=0; $j<=$i; $j++) { 
//             echo "*";
//         }
//         echo "\n"; 
//     }
// }
// fnc_star(1);

function star($num){
    for($j=1;$j<=$num;$j++){
        echo "*";
    }
        echo "\n";
}
star(1);
star(2);
star(3);
star(4);
star(5);