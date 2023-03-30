<?php 
    // class : 고유한 성질을 가진 함수들이 모여있는 집합
    //제일 앞글자 대문자로
    class Student 
    {
        //접근제어 지시자 : public, private, protected
        public $std_name; //어디서든 접근 가능
        private $std_id; // 선언한 Class 내에서만 접근가능
        protected $std_age; // 상속 Class 내에서만 접근가능
        
        //Class 안에 있는 function을 method라고 명칭
        public function print_student($param_std_name, $param_std_age){
            $result_name = "이름 : ".$param_std_name;
            $result_age = "나이 : ".$param_std_age."세";
            echo $result_name;
            echo "\n";
            echo $result_age;
        }
        //private 객체를 사용할 수 있는 방법
        public function set_std_id($param_id){
            //this 포인터 : class 자기 자신을 가르키고 있음
            $this->std_id = $param_id;
        }
    
        public function get_std_id(){
            return $this->std_id;
        }
    }//end class


    //class를 선언
    $obj_Student = new Student;
    //class의 method 호출
    // $obj_Student -> print_student("홍길동",20);
    //class의 멤버변수 사용방법
    // $obj_Student -> std_name = "갑돌이";
    // echo $obj_Student -> std_name;

    //지시자가 private이기 때문에 접근 권한 x
    // $obj_Student->$std_id = "갑돌이id";

    //getter, setter로 private 객체에 접근
    $obj_Student->set_std_id("갑순이id");
    echo $obj_Student->get_std_id();

?>