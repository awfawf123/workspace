<?php 
    //파일명 : gugudan.txt
    //2단
    //2 * 1 = 2
    //2 * 2 = 4
    $f_gugu = fopen("../sam/gugudan.txt","a");

    
    // for($j=2;$j<10;$j++){
    //     $two = $j."단입니다.\n";
    //     fputs($f_gugu,$two);
    //     for($i=1;$i<10;$i++){
    //             $result = $j."*".$i." = ".$j*$i."\n";
    //             fputs($f_gugu,$result);
    //         }
    // }
    // $a = array();
    // $num=2;
    // $dan = $num."단\n";
    //     for($i=1;$i<10;$i++){
    //             $result = $num."*".$i." = ".$num*$i."\n";
    //             $a[$i] = $result;
    //         }
    // $str_impl = implode("",$a);
    // fputs($f_gugu,$dan.$str_impl);

    // fclose($f_gugu);


    $f_ood = fopen("../sam/food.txt");
    $print_food = "";
    foreach ($f_ood as $val) {
        if($val === "국밥"){
            $print_food .= $val."스테이크\n";
        }else{
            $print_food .= $val;
        }
    }
    print $print_food;

    $f_food2 = fopen("../sam/food.txt","w");
    fputs($f_food2,$print_food);
    fclose($f_ood);

?>