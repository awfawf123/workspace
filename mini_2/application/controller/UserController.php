<?php
namespace application\controller;

class UserController extends Controller{
    public function loginGet(){
        
        return "login"._EXTENSION_PHP;
    }

    public function loginPost(){
        $result = $this->model->getUser($_POST);
        $this->model->close(); //DB파기
        //유저 유무 체크
        if(count($result) === 0){
            $errMsg = "유효하지 않은 ID입니다.";
            $this->addDynamicProPerty("errMsg",$errMsg);
            //로그인 페이지 리턴
            return "login"._EXTENSION_PHP;
        }
        // session에 User ID 저장
        $_SESSION[_STR_LOGIN_ID] = $_POST["id"];
        // 리스트 페이지 리턴
        return _BASE_REDIRECT."/product/list";
    }
    // 로그아웃 메소드
    public function logoutGet(){
        session_unset();
        session_destroy();
        // 로그인 페이지 리턴
        return "login"._EXTENSION_PHP;
    }
    public function pwfindGet(){
        return "pwfind"._EXTENSION_PHP;
    }

    public function upGet(){
        return "sign"._EXTENSION_PHP;
    }

    public function upPost(){
        $arrPost = $_POST;
        $pw = $arrPost["pw"];
        $num = preg_match('/[0-9]/u', $pw);
        $eng = preg_match('/[a-z]/u', $pw);
        $spe = preg_match("/[\!\@\#\$\%\^\&\*]/u",$pw);
        $num = $arrPost["num"];
        $numChk = preg_match('/^(010|011|016|017|018|019)[^0][0-9]{3,4}[0-9]{4}/',$num);
        $arrChkErr = [];
        $date = date('Y-m-d');
        //유효성체크
        if(mb_strlen($arrPost["id"]) === 0 || mb_strlen($arrPost["id"]) > 12){
            $arrChkErr["id"] = "ID는 12글자 이하로 입력해 주세요.";
        }
        //ID 영문숫자 체크
        if(!ctype_alnum($arrPost["id"])){
            $arrChkErr["id"] = "ID는 영문숫자로만 입력가능합니다.";
        }

        // PW글자수 체크
        if(mb_strlen($pw) < 8 || mb_strlen($pw) >20){
            $arrChkErr["pw"] = "PW는 영문,숫자,특수문자로 8~12글자로 입력해 주세요.";
        }
        //PW 영문숫자특수문자 체크
        if(preg_match("/\s/u",$pw) === true){
            $arrChkErr["pw"] = "비밀번호는 공백없이 입력해 주세요";
        }
        if($num === 0 || $eng === 0 || $spe === 0){
            $arrChkErr["pw"] = "영문,숫자,특수문자를 혼합하여 입력해주세요";
        }
        // 비밀번호 확인
        if($arrPost["pw"] !== $arrPost["pw1"]){
            $arrChkErr["pw1"] = "비밀번호가 일치하지 않습니다.";
        }

        // 이름글자수 체크
        if(mb_strlen($arrPost["u_name"])=== 0 || mb_strlen($arrPost["u_name"]) > 30){
            $arrChkErr["u_name"] = "이름은 30글자 이하로 입력해 주세요.";
        }
        // 생년월일 오늘 날짜 이상 못넘어가게
        if($arrPost["birth"] > $date){
            $arrChkErr["birth"] = "생년월일은 오늘 날짜를 넘어 갈 수 없습니다.";
        }
        // 전화번호 체크
        if(!$numChk){
            $arrChkErr["num"] = "유효한 전화번호 형식이 아닙니다.";
        }
        //이메일 형식 체크
        if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$arrPost["email"])){
            $arrChkErr["email"] = "유효한 이메일 형식이 아닙니다.";
        }

        $emailResult = $this->model->emailChk($arrPost);

        if(count($emailResult) !== 0){
            $errMsg = "입력하신 EMAIL이 사용중입니다.";
            $this->addDynamicProPerty("errMsgEmail",$errMsg);
        }
        // 유효성체크 에러일경우
        if(!empty($arrChkErr)){
            $this->addDynamicProPerty("arrError",$arrChkErr);
            return "sign"._EXTENSION_PHP;
        }

        $result = $this->model->getUser($arrPost, false);
        

        //유저 유무 체크
        if(count($result) !== 0){
            $errMsg = "입력하신 ID가 사용중입니다.";
            $this->addDynamicProPerty("errMsg",$errMsg);
            //회원가입 페이지 리턴
            return "sign"._EXTENSION_PHP;
        }
        // --------트랜잭션 시작-----------
        $this->model->beginTransaction();

        // user insert
        if(!$this->model->insertUser($arrPost)){
            $this->model->rollback();
            echo "User Regist ERROR";
            exit();
        }
        $this->model->commit();
        // --------트랜잭션 종료-----------

        // 로그인 페이지로 이동
        return _BASE_REDIRECT."/user/login";
    }
    // 유저 정보 업데이트
    public function userupdateGet(){
      
        return "userupdate"._EXTENSION_PHP;
    }

    public function userupdatePost(){
        $arrPost = $_POST;
        $pw = $arrPost["pw"];
        $num = preg_match('/[0-9]/u', $pw);
        $eng = preg_match('/[a-z]/u', $pw);
        $spe = preg_match("/[\!\@\#\$\%\^\&\*]/u",$pw);
        $num = $arrPost["num"];
        $numChk = preg_match('/^(010|011|016|017|018|019)[^0][0-9]{3,4}[0-9]{4}/',$num);
        $arrChkErr = [];
        $date = date('Y-m-d');
        //유효성체크
        if(mb_strlen($arrPost["id"]) === 0 || mb_strlen($arrPost["id"]) > 12){
            $arrChkErr["id"] = "ID는 12글자 이하로 입력해 주세요.";
        }
        //ID 영문숫자 체크
        if(!ctype_alnum($arrPost["id"])){
            $arrChkErr["id"] = "ID는 영문숫자로만 입력가능합니다.";
        }
        // PW글자수 체크
        if(mb_strlen($pw) < 8 || mb_strlen($pw) >20){
            $arrChkErr["pw"] = "PW는 영문,숫자,특수문자로 8~12글자로 입력해 주세요.";
        }
        //PW 영문숫자특수문자 체크
        if(preg_match("/\s/u",$pw) === true){
            $arrChkErr["pw"] = "비밀번호는 공백없이 입력해 주세요";
        }
        if($num ===0 || $eng ===0 || $spe ===0){
            $arrChkErr["pw"] = "영문,숫자,특수문자를 혼합하여 입력해주세요";
        }
        // 비밀번호 확인
        if($arrPost["pw"] !== $arrPost["pw1"]){
            $arrChkErr["pw1"] = "비밀번호가 일치하지 않습니다.";
        }
        // 이름글자수 체크
        if(mb_strlen($arrPost["u_name"])=== 0 || mb_strlen($arrPost["u_name"]) > 30){
            $arrChkErr["u_name"] = "이름은 30글자 이하로 입력해 주세요.";
        }
        // 생년월일 오늘 날짜 이상 못넘어가게
        if($arrPost["birth"] > $date){
            $arrChkErr["birth"] = "생년월일은 오늘 날짜를 넘어 갈 수 없습니다.";
        }
        // 전화번호 체크
        if(!$numChk){
            $arrChkErr["num"] = "유효한 전화번호 형식이 아닙니다.";
        }
        //이메일 형식 체크
        if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$arrPost["email"])){
            $arrChkErr["email"] = "유효한 이메일 형식이 아닙니다.";
        }

        $emailResult = $this->model->emailChk($arrPost);

        if(count($emailResult) !== 0){
            $errMsg = "입력하신 EMAIL이 사용중입니다.";
            $this->addDynamicProPerty("errMsgEmail",$errMsg);
        }
        // 유효성체크 에러일경우
        if(!empty($arrChkErr)){
            $this->addDynamicProPerty("arrError",$arrChkErr);
            return "userupdate"._EXTENSION_PHP;
        }


        // --------트랜잭션 시작-----------
        $this->model->beginTransaction();

        // user update
        if(!$this->model->updateUser($arrPost)){
            $this->model->rollback();
            alert ("User UPDATE ERROR");
            exit();
        }
        $this->model->commit();
        // --------트랜잭션 종료-----------
        session_unset();
        session_destroy();

        return _BASE_REDIRECT."/user/login";
    }
}