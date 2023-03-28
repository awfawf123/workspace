<?php
    $score = 40;
    $grade ="";
    $txt = '당신의 점수는'.$score.'점';
    if($score >= 0 && $score <= 100){
        switch ($score) {
            case 100:
                $grade = "A+";
                break;
            case 90:
                $grade = "A";
                break;
            case 80:
                $grade = "B";
                break;
            case 70:
                $grade = "C";
                break;
            case 60:
                $grade = "D";
                break;
            default:
                $grade = "F";
                break;
            }
        echo $txt.$grade;
    }else{
        echo "잘못된값입력";
    }

?>