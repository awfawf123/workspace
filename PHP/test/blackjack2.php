<?php
class blackJack{
    private $card;
    private $player;
    private $dealer;

    public function __construct(){
        $this->card = array();
        $this->player = array();
        $this->dealer = array();
        $this->set_card();
        $this->player_card();
        $this->dealer_card();
    }
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
    }// end function set_card()

    private function player_card(){
        $this->player = array_rand($this->card,2);
        for($i=0;$i<=count($this->card);$i++){ //나눠준 카드 2장 키값 기준으로 카드에서 삭제
            if($this->player[0] === $i){
                    $player_str1 = $this->card[$i]; //나눠준 카드 1장 value값 str1에 저장
                    unset($this->card[$i]);
                }elseif ($this->player[1] === $i ) {
                $player_str2 = $this->card[$i]; //나눠준 카드 1장 value값 str2에 저장
                array_splice($this->card,$i,1);
            }    
        }
    }// end function player_card();

    private function dealer_card(){
        $this->dealer = array_rand($this->card,2);
        for($i=0;$i<=count($this->card);$i++){ //나눠준 카드 2장 키값 기준으로 카드에서 삭제
            if($this->dealer[0] === $i){
                    $dealer_str1 = $this->card[$i]; //나눠준 카드 1장 value값 str1에 저장
                    unset($this->card[$i]);
                }elseif ($this->dealer[1] === $i ) {
                    $dealer_str2 = $this->card[$i]; //나눠준 카드 1장 value값 str2에 저장
                    array_splice($this->card,$i,1);
            }    
        }
    }// end function player_card();
}//end class
$obj_blackjack = new blackJack();
var_dump($obj_blackjack);
