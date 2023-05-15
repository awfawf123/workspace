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
    <!-- <div class="login-container">
        <div class="login-inner">
            <h3 style="color:red;"><?php echo isset($this->errMsg) ? $this->errMsg : "";?></h3>
            <form action="/user/login" method="post">
            <fieldset>Login</fieldset>
            <label for="id">ID</label>
            <input type="text" name="id" id="id"><br>
            <label for="pw">PW</label>
            <input type="password" name="pw" id="pw"><br>
            <button class="login-btn btn btn-success"type="submit">Login</button>
        </form>
        <a href="/user/up"><button type="button">회원가입</button></a>
        </div>
    </div> -->
<div class="login-container" id="login-container">
  <div class="form-container sign-in-container">
    <form action="/user/login" method="post">
      <h1>로그인</h1>
      <input type="id" id="id" name="id" placeholder="Id" />
      <input type="password" id="pw" name="pw" placeholder="Password" />
      <a href="#" class="find-pw">Forgot your password?</a>
      <button class="ghost" type="submit">로그인</button>
      <button class="ghost">회원가입</button>
    </form>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>