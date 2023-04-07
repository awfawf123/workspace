<?php
class blackJack{
    private $card;
    private $player;
    private $dealer;
    private $player_card1;
    private $player_card2;
    private $player_card3;
    private $dealer_card1;
    private $dealer_card2;
    private $dealer_card3;
    private $player_sum;
    private $dealer_sum;

    public function __construct(){
        $this->card = array();
        $this->player = array();
        $this->dealer = array();
        $this->set_card();
        $this->player_card();
        $this->dealer_card();
        $this->player_sum();
        $this->dealer_sum();
        $this->compare_card();
    }
    //카드 52장 설정
    private function set_card(){
        for($j=0;$j<4;$j++){
            for ($i=1; $i < 14; $i++) { 
                if($i === 1){
                    $this->card[$j][$i] = 'a';
                }else if($i === 11){
                    $this->card[$j][$i] ='K';
                }else if($i === 12){
                    $this->card[$j][$i] ='J';
                }
                else if($i === 13){
                    $this->card[$j][$i] ='Q';
                }else{
                    $this->card[$j][$i] = $i;
                }
            }
        }
        $this->card = array_merge(...$this->card); // 다차원 배열 1차원으로 병합
        shuffle($this->card); //카드 섞음

        for($i=0;$i<count($this->card);$i++){
            if($this->card[$i] === "K" || $this->card[$i] === "J" || $this->card[$i] === "Q"){
                $this->card[$i] = 10;
            }elseif($this->card[$i] === "a"){
                $this->card[$i] = 1;
            }
        }

    }// end function set_card()

   
    //플레이어 카드 2장
    private function player_card(){
        $this->player = array_rand($this->card,2);
        $this->player_card1 = $this->card[$this->player[0]];
        $this->player_card2= $this->card[$this->player[1]];
        unset($this->card[$this->player[0]]);//뽑은 player 카드 52장카드에서 2장 삭제
        unset($this->card[$this->player[1]]);
    }// end function player_card();

    //딜러 카드 2장
    private function dealer_card(){
        $this->dealer = array_rand($this->card,2);
        $this->dealer_card1 = $this->card[$this->dealer[0]];
        $this->dealer_card2 = $this->card[$this->dealer[1]];
        unset($this->card[$this->dealer[0]]);//뽑은 dealer 카드 50장카드에서 2장 삭제
        unset($this->card[$this->dealer[1]]);
    }// end function dealer_card();

    //플레이어 2장의 합계
    public function player_sum(){
       
        if(is_null($this->player_card3) == false){
            $this->player_sum += $this->player_card3;
        }else{
            $this->player_sum = $this->player_card1 + $this->player_card2;
        }
    }
    //딜러 2장의 합계
    public function dealer_sum(){
        if(is_null($this->dealer_card3) == false){
            $this->dealer_sum += $this->dealer_card3;
        }else{
            $this->dealer_sum = $this->dealer_card1 + $this->dealer_card2;
        }
    }
    //a 11점 조건
    private function a_add_score(){
        if($this->player_sum < 12 && $this->player_card1 === 1){
            $this->player_sum += 10;
        }elseif($this->player_sum < 12 && $this->player_card2 === 1){
            $this->player_sum +=10;
        }elseif($this->dealer_card1 < 12 && $this->dealer_card1 === 1){
            $this->dealer_sum +=10;
        }elseif($this->dealer_card2 < 12 && $this->dealer_card2 === 1){
            $this->dealer_sum += 10;
        }
    }// end function a_add_score();

    //카드 비교
    public function compare_card(){
        if(is_null($this->dealer_card3) == false){
            echo "플레이어 카드 : ".$this->player_card1.",".$this->player_card2.",".$this->player_card3."\n";
            echo "딜러 카드 : ".$this->dealer_card1.",".$this->dealer_card2.",".$this->dealer_card3."\n";
        }else{
            echo "플레이어 카드 : ".$this->player_card1.",".$this->player_card2."\n";
            echo "딜러 카드 : ".$this->dealer_card1.",".$this->dealer_card2."\n";
        }
    } // end function compare_sum()

    //카드 한장 더 받기
    private function card_add(){
        $this->player[] = array_rand($this->card,1);//player 카드 1장 추가
        $this->player_card3 = $this->card[$this->player[2]];
        unset($this->card[$this->player[2]]); //추가 한 카드 삭제
        $this->dealer[] = array_rand($this->card,1);//dealer 카드 1장 추가
        $this->dealer_card3 = $this->card[$this->dealer[2]];
        unset($this->card[$this->dealer[2]]); //추가 한 카드 삭제
    }
    //결과 출력
    private function result_game(){
        if($this->player_sum <= 21 && $this->player_sum > $this->dealer_sum){
            echo "player score : ".$this->player_sum."\n"."dealer score : ".$this->dealer_sum."\n"."플레이어 승리";
        }elseif($this->dealer_sum <= 21 && $this->player_sum < $this->dealer_sum){
            echo "player score : ".$this->player_sum."\n"."dealer score : ".$this->dealer_sum."\n"."딜러 승리";
        }elseif($this->player_sum == $this->dealer_sum){
            echo "player score : ".$this->player_sum."\n"."dealer score : ".$this->dealer_sum."\n"."무승부";
        }
    }
    public function game_start(){
    while(true) {
        echo '시작';
        print "\n";
        fscanf(STDIN, "%d\n", $input); 

        
        if($input === 0) { //0입력시 종료
            break;
        }
        //카드 더받기
        elseif($input === 1){
            $this->card_add();
            $this->compare_card();
            $this->player_sum();
            $this->dealer_sum();
            $this->a_add_score();
            if($this->player_sum > 21){
                echo"플레이어 패배,딜러 승리";
                break;
            }elseif($this->dealer_sum > 21){
                echo"플레이어 승리,딜러 패배";
                break;
            }
        }
        //카드 비교
        elseif($input === 2){
            $this->compare_card();
            $this->result_game();
            break;
        }
        else{
            echo "잘못 입력";
        }
        // echo $input;
        print "\n";
    }
    echo "끝!\n";
    }
}//end class
$obj_blackjack = new blackJack();
$obj_blackjack->game_start();