<?php
//1.Post Method로 사용자가 입력한 데이터를 HTTP Request
//2.입력한 데이터의 상세내역
// 2-1. key : id, pw, name, birth_date
//3.유저가 입력하지 않은 데이터도 함께 전송
// 3-1. key : h_page val : h1
//4.출력
$result = $_POST;
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="http_post_method_t.php">
        <label for="id">ID: </label>
        <input type="text" id="id" name="id"><br>
        <label for="pw">PW: </label>
        <input type="password" id="pw" name="pw"><br>
        <label for="name">NAME: </label>
        <input type="text" id="name" name="name"><br>
        <label for="birth_date">BIRTH_DATE: </label>
        <input type="date" id="birth_date" name="birth_date"><br>
        <input type="hidden" name="h_page" value="h1"><br>
        <button type="submit">저장</button>
    </form>
    <?php if(array_key_exists("id",$_POST) == 'true' && $result["id"] != ""){ ?>
    <table border="1">
        <tr>
            <td>ID</td>
            <td><?php echo $result["id"]?></td>
        </tr>
        <tr>
            <td>pw</td>
            <td><?php echo $result["pw"]?></td>
        </tr>
        <tr>
            <td>name</td>
            <td><?php echo $result["name"]?></td>
        </tr>
        <tr>
            <td>birth_date</td>
            <td><?php echo $result["birth_date"]?></td>
        </tr>
        <tr>
            <td>h_page</td>
            <td><?php echo $result["h_page"]?></td>
        </tr>
    </table>
    <?php }?>
</body>
</html>