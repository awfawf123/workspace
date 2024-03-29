<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
//2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
//4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~9는 그 숫자대로 점수
// 4-2. K·Q·J,10은 10점 52장 13 13 13 13
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산
//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 드로우 //스페이드>크로버>다이아>하트 순
//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
//순서 -> 1.플레이어 2장,딜러2장 뽑아서 저장
//        2.플레이어 2장합,딜러2장합이 21점을 초과하는지 비교(21점일시 결과출력, 21점초과시 패배)
//        4.카드 1장 더 뽑으면 다시 비교
//        3.합산해서 딜러만 17점 이하일시 카드 한장 더 뽑기,이상일시 카드 안뽑음
$card_num = array();
for($j=0;$j<4;$j++){
    for ($i=1; $i < 14; $i++) { 
        if($i === 1){
            $card_num[$j][$i] = 'a';
        }else if($i === 11){
            $card_num[$j][$i] ='K';
        }else if($i === 12){
            $card_num[$j][$i] ='J';
        }
        else if($i === 13){
            $card_num[$j][$i] ='Q';
        }else{
            $card_num[$j][$i] = $i;
        }
        // echo $card_num[$i];
    }
    // echo "\n";
}
$arr = array_merge(...$card_num); // 다차원 배열 1차원으로 병합
//K,J,Q,a에 숫자 부여
for($i=0;$i<count($arr);$i++){
    if($arr[$i] === 'K' || $arr[$i] === 'J' || $arr[$i] === 'Q'){
        $arr[$i] = 10;
    }elseif($arr[$i] === 'a'){
        $arr[$i] = 1;
    }
}
var_dump($arr);

shuffle($arr); //카드 섞음
$player = array();//플레이어 저장공간
$dealer = array();//딜러 저장공간


// if (strpos($arr,'K,J,Q')) { 
    
//     } else {
//     //그외
//     }
// print_r($arr);
unset($arr[$player[0]]);
unset($arr[$player[1]]);

$player = array_rand($arr,2);//player 카드 2장 나눠줌
// print_r($player);
for($i=0;$i<=count($arr);$i++)
{ //나눠준 카드 2장 키값 기준으로 카드에서 삭제
    if($player[0] === $i)
    {
        // array_splice($arr,$i,1);
        $player_str1 = $arr[$i]; //나눠준 카드 1장 value값 str1에 저장
        unset($arr[$i]);
    }
    elseif ($player[1] === $i ) 
    {
        $player_str2 = $arr[$i]; //나눠준 카드 1장 value값 str2에 저장
        array_splice($arr,$i,1);
    }    
}

// echo "player 2장 :".$player_str1.",".$player_str2."\n";
$dealer = array_rand($arr,2);//dealer 카드 2장 나눠줌
for($j=0;$j<=count($arr);$j++){ //나눠준 카드 2장 키값 기준으로 카드에서 삭제
    if($dealer[0] === $j){
            // array_splice($arr,$j,1);
            $dealer_str1 = $arr[$j]; //나눠준 카드 1장 value값 str1에 저장
            unset($arr[$j]);
    }elseif ($dealer[1] === $j ) {
        $dealer_str2 = $arr[$j]; //나눠준 카드 1장 value값 str2에 저장
        array_splice($arr,$j,1);
    }    
}

// echo "dealer 2장 :".$dealer_str1.",".$dealer_str2."\n";



// if($player_str1 === 'K' || $player_str1 === 'Q' ||$player_str1 ==='J')
// {
//     $player_str1 = 10;
// }
// if($player_str2 === 'K' || $player_str2 === 'Q' ||$player_str2 ==='J')
// {
//     $player_str2 = 10;
// }
// if($dealer_str1 === 'K' || $dealer_str1 === 'Q' ||$dealer_str1 ==='J')
// {
//     $dealer_str1 = 10;
// }
// if($dealer_str2 === 'K' || $dealer_str2 === 'Q' ||$dealer_str2 ==='J')
// {
//     $dealer_str2 = 10;
// } if($player_str1 === 'a' ){
//     $player_str1 = 1;
// } if($player_str2 === 'a' ){
//     $player_str2 = 1;
// } if($dealer_str1 === 'a' ){
//     $dealer_str1 = 1;
// } if($dealer_str2 === 'a'){
//     $dealer_str2 = 1;
// }

echo "player 2장 :".$player_str1.",".$player_str2."\n";
echo "dealer 2장 :".$dealer_str1.",".$dealer_str2."\n";

$player_sum = $player_str1 + $player_str2;
$dealer_sum = $dealer_str1 + $dealer_str2;

if($player_sum < 12 && $player_str1 === 1){
    $player_sum +=10;
}elseif($player_sum < 12 && $player_str2 === 1){
    $player_sum +=10;
}elseif($dealer_sum < 12 && $dealer_str1 === 1){
    $dealer_sum +=10;
}elseif($dealer_sum < 12 && $dealer_str2 === 1){
    $dealer_sum += 10;
}


if($player_sum <= 21 && $player_sum > $dealer_sum){
    echo "player score : ".$player_sum."\n"."dealer score : ".$dealer_sum."\n"."플레이어 승리";
}elseif($dealer_sum <= 21 && $player_sum < $dealer_sum){
    echo "player score : ".$player_sum."\n"."dealer score : ".$dealer_sum."\n"."딜러 승리";
}elseif($player_sum == $dealer_sum){
    echo "player score : ".$player_sum."\n"."dealer score : ".$dealer_sum."\n"."무승부";
}
// print_r($arr);













// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);     
// 	if($input === 0) {//0입력시 종료
// 		break;
// 	}
//     //카드 더받기
//     if($input === 1){

//     }
//     //카드 비교
//     if($input ===2){

//     }
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";