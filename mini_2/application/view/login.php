<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/application/view/css/list.css" type='text/css'>
    <title>Login</title>
</head>
<body>
<?php include_once(_HEADER_PHP) ?>
<div class="login-body">
  <div class="login-container" id="login-container">
    <div class="form-container sign-in-container">
      <form action="/user/login" method="post">
        <h1>로그인</h1>
        <h3 style="color:red;"><?php echo isset($this->errMsg) ? $this->errMsg : "";?></h3>
        <input type="id" id="id" name="id" placeholder="Id" />
        <input type="password" id="pw" name="pw" placeholder="Password" />
        <button class="ghost" type="submit">로그인</button>
        <a href="up" class="sign-up-btn ghost">회원가입</a>
      </form>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>