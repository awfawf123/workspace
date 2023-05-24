<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    <div class="container">
        <h1 class="title">내용</h1>
        <div class="sub-title">
            <h2>게시글 작성</h2>
        </div>
        <div class="inner">
            <p class="bo_no">글 번호 : </p>
            <span>작성일: </span>
            <ul>
                <li><p>제목</p></li>
                <li><p>내용</p></li>
            </ul>
            <div class="btn-group">
                <button class="w-btn" type="button"><a href="{{route('list.edit')}}">수정</a></button>
                <button class="w-btn "type="button"><a href="#">삭제</a></button>
            </div>
        </div>
    </div>
</body>
</html>