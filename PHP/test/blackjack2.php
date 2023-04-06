<?php
class blackJack{
    private $card;
    private $player;
    private $dealer;
    private $player_card1;
    private $player_card2;
    private $dealer_card1;
    private $dealer_card2;
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
        $this->player_sum = $this->player_card1 + $this->player_card2;
    }
    //딜러 2장의 합계
    public function dealer_sum(){
        $this->dealer_sum = $this->dealer_card1 + $this->dealer_card2;
    }
    //플레이어합과 딜러합 비교
    private function compare_sum(){
        if($this->player_sum < 12 && $this->player_card1 === 1){
            $this->player_sum += 10;
        }
    }
}//end class
$obj_blackjack = new blackJack();
var_dump($obj_blackjack);
