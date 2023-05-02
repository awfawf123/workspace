<?php 
// while + if 조합
// $i=0;
// while($i <=4){
//     if($i ===1){
//         echo "1";
//     }else if($i ===4){
//         echo "4";
//     }
//     ++$i;
// }
//foreach + if 조합
// $arr_ass = ["a"=>1,"b"=>2,"c"=>3];
// foreach ($arr_ass as $key => $val) {
//     if($key === "c"||$val ===2){
//         echo "if";
//     }
// }
//이중 루프
// for ($i=2; $i <= 9; $i++) { 
//     echo "$i 단\n";
// }
//1~100 숫자 중에 짝수의합
// $sum=0;
// for($i=1; $i<101; $i++){
//     if($i % 2 === 0){
//         $sum += $i;
//     }
// }
// echo $sum;

// $arr_test = array(1
//       ,2
//       ,array("info_a"=>3
//                     ,"info_b"=>4
//                     ,"info_arr"=>array("f_1"=>5
//                                        ,"f_2"=>7
//                                         )
//                     )
// );
// echo $arr_test[2]["info_arr"]["f_1"];

//함수명 : fnc_sum
//기능 :파라미터를 더한 값을 리턴
//파라미터 : INT $param_a, INT $param_b
//리턴값 : INT $sum;
// function fnc_sum($param_a,$param_b){
//     $sum = $param_a + $param_b;
//     return $sum;
// }
// echo fnc_sum(5,4);

// function fnc_sum(...$param_numbers){
//     return array_sum($param_numbers);
// }
// echo fnc_sum(1,2,3,4);

function fnc_global(){
    global $global_i;
    static $static_i = 0;
    $global_i=0;
}
// $global_i =5;
// fnc_global();
// echo $global_i;

// function fnc_static(){
//     static $static_i = 0;
//     echo $static_i;
//     $static_i++;
// }
// fnc_static();
// fnc_static();

// function fnc_reference(&$param_str){
//     $param_str = "fnc_reference";
// }
// $str ="aaa";
// echo fnc_reference($str);
// echo $str;



// function fnc_star($num){
//     for ($i=0; $i<=$num; $i++) {
//         for ($j=0; $j<=$i; $j++) { 
//             echo "*";
//         }
//         echo "\n"; 
//     }
// }
// fnc_star(1);

function star($num1,$num2){
    for($j=1;$j<=$num1;$j++){
        // echo "*";
        echo $num2;
    }
    echo "\n";
}
//위 함수를 내가 원하는 문자로 찍고 싶다.

// star(3,3);
// star(2,2);
// star(1,1);

function fnc_reference2(&$param_str){
    echo "1번 : $param_str \n";
    $param_str = "fnc_reference2에서 값 변경";
    echo "2번 : $param_str \n";
}
// $str = "aaa";
// echo "1번 : $str \n";
// fnc_reference2($str);
// echo "4번 : $str \n";

//-------------class--------------
class Food{
    //멤버 변수
    protected $str_name;
    protected $int_price;

    //메소드
    // __construct : 초기값 설정
    public function __construct($param_name,$param_price){
        $this->str_name = $param_name;
        $this->int_price = $param_price;
    }
    public function fnc_print_food(){
        $str = $this ->str_name.":".$this->int_price."원\n";
        echo $str;
    }

    public function set_int_price($price){
        $this->int_price = $price;
    }
}
// $obj_food = new Food("탕수육",10000);
// // $int_price의 값을 12000으로 바꾸어 주세요
// $obj_food->set_int_price(12000);
// $obj_food->fnc_print_food();

//상속 : 부모클래스의 객체들을 자식 클래스가 상속받아 사용할 수 있다.
class KoreanFood extends Food{
    protected $side_dish;
    public function __construct($param_name, $param_price, $param_side_dish){
        $this->str_name = $param_name;
        $this->int_price = $param_price;
        $this->side_dish = $param_side_dish;
    }
    //오버라이딩 : 부모 클래스에서 정의된 메소드를 자식클래스에서 재정의
    public function fnc_print_food(){
        // $str = $this ->str_name.":".$this->int_price."원 ".$this->side_dish;
        parent::fnc_print_food();
        $str = "반찬 : ".$this->side_dish;
        echo $str;
    }
}
// $obj_korean_food = new KoreanFood("치킨",20000,"치킨무");
// $obj_korean_food->fnc_print_food();

class people{
    protected $name;

    public function peoplePrint(){
        echo "name:".$this->name;
    }

    public function setName($name){
        $this->name = $name;
    } 
}
class student extends people{
    protected $id;

    public function setid($id){
        $this->id = $id;
    }

    public function studentPrint(){
        parent::peoplePrint();
        $str = " id:".$this->id;
        echo $str;
    }
}
$obj_student = new student;
$obj_student-> setName("hong");
$obj_student-> setid(1001);
$obj_student-> studentPrint();