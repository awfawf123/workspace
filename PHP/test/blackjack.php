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
//        3.비교해서 17점 이하일시 카드 한장 더 뽑기,이상일시 카드 안뽑음
//        4.카드 1장 더 뽑으면 다시 비교
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
$player=array();//플레이어 저장공간
$dealer = array();//딜러 저장공간
$player = array_rand($card_num,2); //플레이어 카드 랜덤으로 2장 저장
$dealer = array_rand($card_num,2); //딜러 카드 랜덤으로 2장 저장
$player_sum = 0;

foreach ($player as $key => $val) {
    foreach ($card_num as $k => $value) {
        if($val = $value){
            array_splice($card_num,1,1);
        }
    }
    $player_sum += $val;
    echo $key.":".$val."\n";
}
print_r($card_num);
echo $player_sum."\n";

$dealer_sum =0;
foreach ($dealer as $key => $val) {
    $dealer_sum += $val;
    echo $key.":".$val."\n";
}
echo $dealer_sum;






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