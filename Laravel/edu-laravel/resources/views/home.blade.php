<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>home</h1>
    <br>
    <br>
    <br>
    <form action="/method" method="post">
        @csrf 
        <button type="submit">POST</button>
    </form>
    <br>
    <form action="/method" method="post">
        @csrf
        @method('PUT')
        <button type="submit">PUT</button>
    </form>
    <br>
    <form action="/method" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
    <!-- <form action="{{route('tests.index');}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form> -->
</body>
</html>