<?php 
    //배열의 길이를 반환하는 my len()함수
    $arr_base = array(1,2,3,4,5);
function mylen($arr_base){
    $num = 0;
    foreach ($arr_base as $val) {
        $num ++;
    }
    return $num;
}
    // echo mylen($arr_base);
    
    //별찍기 함수
    function star($a){
        for($i=5;$i>=$a;$i--){
            echo "*";
        }
            echo "\n";
        }
    function star1($b){
        for($i=1; $i <= $b; $i++){
            star($i);
            }
        }
        //준값 갯수에 따라
    function star2($b){
        for($i=1; $i <= $b; $i++){
            star($b);
            }
        }
    echo star1(5);
    
?>