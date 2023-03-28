<?php 
    //성적 범위
    $score = 101;
    $grade = "";
    $txt = '당신의 점수는'.$score.'점';
    
if($score >= 0 && $score <= 100){
    if( $score == 100){
        $grade = "A+";
    }else if(90 <= $score && $score < 100){
        $grade = "A";
    }else if(80 <= $score && $score < 90){
        $grade ="B";
    }else if(70 <= $score && $score < 80){
        $grade ="C";
    }else if(60 <= $score && $score < 70){
        $grade ="D";
    }else if (0 <= $score && $score < 60){
        $grade = "F";
    }else{
        $txt = "잘못된 값을 입력했습니다.";
    }
    echo $txt.$grade;
}else{
    echo "이외";
}
?>