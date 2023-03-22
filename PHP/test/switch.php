<?php
    $score = 40;
    $grade ="";
    $txt = '당신의 점수는'.$score.'점';

    switch ($score) {
        case $score == 100:
            $grade = "A+";
            break;
        case $score == 90:
            $grade = "A";
            break;
        case $score == 80:
            $grade = "B";
            break;
        case $score == 70:
            $grade = "C";
            break;
        case $score == 60:
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
        }
        

?>