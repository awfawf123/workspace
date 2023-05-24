<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시글 작성</title>
    <link rel="stylesheet" href="css/board_insert.css">
</head>
<body>
    <div class="container">
        <form method="post" action="">
            <div class="inner">
                <ul>
                    <li>
                        <p>제목</p>
                        <input type="text" name="board_title">
                    </li>
                    <li>
                        <p>내용</p> 
                        <input type="textarea" name="board_contents">
                    </li>
                </ul>
                <div class="btn-group">
                    <button class="w-btn" type="submit">저장</a></button>
                    <button class="w-btn w-btn-blue"><a href="board_list.php">취소</a></button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>