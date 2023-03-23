<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="form" method="post">
        <label for="rsp">
            <input type="number" id="rsp" name="rsp">
            <input type="submit">
</form>
<?php 

    $rsp = $_POST[''];
    $txt = rand(0,2);

        switch ($rsp) {
            case 0:
                $rsp = "바위";
                break;
            case 1:
                $rsp = "가위";
                break;
            case 2:
                $rsp = "보";
                break;
            default:
                $rsp ="0~2사이 값을 입력해주세요";
                break;
        }
        switch ($txt) {
            case 0:
                $txt = "바위";
                break;
            case 1:
                $txt = "가위";
                break;
            case 2:
                $txt = "보";
                break;
            default:
                $txt = "0~2사이 값을 입력해주세요";
                break;
        }
    if($rsp == $txt){
        echo "rsp:".$rsp." vs "."txt:".$txt." = "."무승부";
    }else if($rsp =="바위" && $txt =="보" ||$rsp =="보" && $txt =="가위"||
    $rsp =="가위" && $txt =="바위"){
        echo "rsp:".$rsp." vs "."txt:".$txt." = ". "txt승리 ";
    }
      
?>
</body>
</html>


