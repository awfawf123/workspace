<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>게시판</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <div class="container">
           <h1>게시판</h1>
            <div class="sub-title">
                <button class="w-btn"><a href="{{route('list.create')}}">게시글 작성</a></button>
                    <form method="get" action="">
                    <select>
                        <option value="title">제목</option>
                    </select>
                        <input type="text" name="board_title" placeholder="검색">
                        <button type="submit">검색</button>
                    </form>
            </div>
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>게시글 번호</th>
                        <th>게시글 제목</th>
                        <th>작성일자</th>
                    </tr>
                </thead>
                <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        <tr>
                            <td></td>
                            <td><a href="#"></a></td>
                            <td></td>
                        </tr>
            </tbody>
        </table>
        </div>
    </body>
</html>