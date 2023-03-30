<?php 
    class Car{
        public $car_name;
        private $car_color;
        //변수에 값 셋팅
        public function car_make($param_name,$param_color){
           $this ->car_name = $param_name;
           $this ->car_color = $param_color;
        }
        // 자동차 이름과 색깔 출력
        // 형식 : $car_name."색".$car_color
        public function car_out(){
                echo $this ->car_color."색".$this ->car_name;
        }

    }
    $obj_car = new Car;
    $obj_car->car_make("포르쉐","빨강");
    $obj_car->car_out();
?>