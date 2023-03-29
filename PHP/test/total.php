<?php 
    //배열의 길이를 반환하는 my len()함수
//     $arr_base = array(1,2,3,4,5);
// function mylen($arr_base){
//     $num = 0;
//     foreach ($arr_base as $val) {
//         $num ++;
//     }
//     return $num;
// }
    // echo mylen($arr_base);
    
    //별찍기 함수
    // function main_star($num){
    //     for($i=1;$i <= $num; $i++){
    //         star($i);
    //     }
    // }

    // function star($num){
    //     for($j=1;$j<=$num;$j++){
    //         echo "*";
    //     }
    //         echo "\n";
    // }

    // function star_ex($num){
    //     for($i=1;$i <= $num; $i++){
    //         star($num);
    //     }
    // }
    
    // echo main_star(5);

    //배열 길이,내용 출력
    // $arr = array(5,10,7,3,1);
    // foreach ($arr as $key => $val) {
        //     echo $key." > ".$val."\n";
        // }
        
        // for($i=0;$i < count($arr);$i++){
            //     echo $i." > ".$arr[$i]."\n";
            // }
            
            
            // $temp = $arr[0];
            // $arr[0] = $arr[1];
            // $arr[1] = $temp;
            
    // $arr = array(5,10,7,3,1);

    // for($i=0; $i < count($arr); $i++){
    //    for($j=0; $j < $i; $j++){
    //         if($arr[$i] < $arr[$j]){
    //              $temp = $arr[$i];
    //              $arr[$i] = $arr[$j];
    //              $arr[$j] = $temp;
    //         }
    //    }
    // }
    // print_r($arr);

    //배열 안에 최솟값,최댓값을 출력
    //함수명은 "my_min","my_max"
    
    // function my_min($arr){
        //     for($i=0; $i < count($arr)-1; $i++){
            //         if($arr[$i] < $arr[$i+1]){
                //             $temp = $arr[$i];
                //         }else{
                    //             $temp = $arr[$i+1];
                    //         }
                    //     }
                    //     return $temp;
                    // }
                    // echo my_min($arr);
                    
                    
$arr = array(50,0,5,7,3,1,5,10,20,177,169,350,300);

function my_max($arr){
    for ($i=0; $i < count($arr)-1; $i++) { 
        if($arr[$i] < $arr[$i+1]){
            $max = $arr[$i+1];
            for($j=0;$j<$i;$j++){
                if($max < $arr[$j]){
                    $max = $arr[$j];
                }
            }
        }
    }
    return $max;
}
// echo my_max($arr);
                    

// $max = $arr[0];
// for ($i=1; $i < count($arr); $i++) { 
//     if($max < $arr[$i]){
//         $max = $arr[$i];
//     }
// }
// echo $max;

//로또
$num = array(); //변수에 배열형식저장
for($i=0;$i<6;$i++) {  // 6번 루프시켜서 로또번호 6개 생성
    $num[$i] = rand(1,45); //랜덤으로 로또번호 1개생성해서 첫번째 배열부터 순서대로 저장
    for($j=0;$j<$i;$j++){ 
        if($num[$i] == $num[$j]){ //중복체크
            $i--; //중복되면은 -1만큼 되돌려서 다시 108줄부터 시작
        }
    }
}
for ($i=0;$i<6;$i++) // for문을 통해 배열 반복 출력
{
    echo $num[$i]."\n";
}

?>