<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>회원가입</h1>
    <form action="/user/up" method="post">
        <label for="id">아이디</label>
        <input type="text" id="id" name="id" required><br>
        <label for="pw">비밀번호</label>
        <input type="password" id="pw" name="pw" required><br>
        <label for="pw">비밀번호 확인</label>
        <input type="password" id="pw" name="pw" required>
        <span style="color:red;"><?php echo isset($this->errPwMsg) ? $this->errPwMsg : "";?></span><br>
        <label for="birth">생년월일</label>
        <input type="date" id="birth" name="birth" required><br>
        <label for="gender">성별</label>
        <input type="radio" id="gender" name="gender" value="M" required>
        <label for="gender">남</label>
        <input type="radio" id="gender" name="gender" value="F" required>
        <label for="gender">여</label><br>
        <label for="email">이메일</label>
        <input type="email" id="email" name="email" required><br>
        <label for="num">전화번호</label>
        <input type="num" id="num" name="num" required><br>
    <button type="submit">가입완료</button>
    <button type="reset">취소</button>
    </form>
</body>
</html>