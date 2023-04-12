<?php
    //request할때의 데이터를 외부에서 볼 수 없다.

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
<form method="post" action="httpPost_ex.php">
        <input type="text" name="p_test1" value="testValue1">
        <input type="hidden" name="p_hidden1" value="aaa">
        <button type="submit">Submit</button>
    </form>
</body>
</html>