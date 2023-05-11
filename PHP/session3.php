<?php

session_name("kim");
session_start();

//session 파기
// session_destroy();

//session 정보삭제(session이 파기 되는 것은 아님)
session_unset(); // 전체 세션정보 삭제
unset($_SESSION["del"]);// session 특정요소 삭제