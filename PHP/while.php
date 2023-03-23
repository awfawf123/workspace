<?php 
    //1.while문
    
    // while($i < 9 && $j<9){
        //     echo $j. " * ". ++$i." = ". $j*$i. "\n";
        // }
        
        // while($i <10){
            //     $result = $j. " * ".$i." = ". $j*$i. "\n";
            //     echo $result;
            //     $i++;
            // }
            
    // $i = 1;
    // while($i < 9){ 
    //     $i++;
    //     echo $i."단입니다.\n";
    //     $j = 2;
    //     while($j < 10){
    //         echo $i."*".$j." = ". $j*$i."\n";
    //         $j++;
    //     }
    // }

    // 2.do-while문
    // $i=0;
    // do{
    //     echo $i ."do while";
    // }while($i === 1);

    // while( $i === 1){
    //     echo $i."while";
    // }
    // 3.for문
    for ($i=2; $i <= 9 ; $i++) {
        echo $i."단\n"; 
        for ($j=1; $j <= 9; $j++) { 
            echo $i."*".$j." = ".$i*$j."\n";
        }
    }
    
?>