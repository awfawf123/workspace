<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
</head>
<body>
    <div class="container">
    <form method="post" action="">
        <div class="inner">
                <p class="bo_no">글 번호 :</p>
                <span>작성일:</span>
                <ul>
                    <li>
                        <p>제목</p>
                        <input type="text" name="board_title" id="title" value="">
                    </li>
                    <li>
                        <p>내용</p> 
                        <input type="textarea" name="board_contents" id="contents" value="">
                    </li>
                        <input type="hidden" name="board_no"  value="">
                </ul>
                <div class="btn-group">
                    <button class="w-btn" type="submit">저장</a></button>
                    <button class="w-btn"><a href="#">취소</a></button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>