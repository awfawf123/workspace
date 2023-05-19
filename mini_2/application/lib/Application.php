<?php

namespace application\lib;

use application\util\UrlUtil;

class Application{
    //생성자
    public function __construct(){
        $arrPath = UrlUtil::getUrlArrPath(); // 접속 URL을 배열로 획득
        // $arrPath = array(user,login)
        $identityName = empty($arrPath[0]) ? "Product" : ucfirst($arrPath[0]); //[0]empty 일시 user페이지로 , 있으면 첫글자 대문자로 만듦 ex) Member
        
        $action = (empty($arrPath[1]) ? "list" : $arrPath[1]).ucfirst(strtolower($_SERVER["REQUEST_METHOD"])); 
        
        //controller명 작성
        $controllerPath =_PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER._EXTENSION_PHP;

        //해당 controller 파일 존재 여부 체크
        if(!file_exists($controllerPath)){
            echo "해당 컨트롤러 파일이 없습니다.".":".$controllerPath;
            exit();
        }

        //해당 컨트롤러 생성 컨트롤러는 \로 불러와야함
        $controllerName = UrlUtil::replaceSlashToBackslash(_PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER);
        //(application\controller\UserController);
        new $controllerName($identityName, $action);
    }
}
