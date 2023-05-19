<?php 
$arr = ["id" => $_SESSION["u_id"]];
$result = $this->model->getUser($arr,false);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/application/view/css/list.css" type='text/css'>
    <title>Document</title>
</head>
<body>
<?php include_once(_HEADER_PHP) ?>
<div class="login-body">
  <div class="login-container" id="login-container">
    <div class="form-container sign-in-container">
      <form action="../user/userupdate" method="post">
        <h1>회원 정보 변경</h1>
        <input type="hidden" id="u_no" name="u_no" value="<?php echo $result[0]["u_no"] ?>" >
        <?php if(isset($this->errMsg)){ ?>
                <div>
                    <span class="errMsg"><?php echo $this->errMsg ?></span>
                <div>
        <?php } ?>
        <input type="text" id="id" name="id" maxlength="15" placeholder="아이디" 
        value="<?php echo $result[0]["u_id"] ?>" readonly>
        <button type="button" class="chkDup ghost" onclick="chkDuplicationId();">중복체크</button>
        <span id="errMsgId">
            <?php if(isset($this->arrError["id"])){ ?>
            <?php echo $this->arrError["id"]?><?php } ?>
        </span>
        <input type="password" id="pw" name="pw" maxlength="20" placeholder="새 비밀번호">
        <?php if(isset($this->arrError["pw"])){ ?>
                <span class="errMsg"><?php echo $this->arrError["pw"]?></span>
        <?php } ?>
        <input type="password" id="pw1" name="pw1" placeholder="비밀번호 확인">
        <?php if(isset($this->arrError["pw1"])){ ?>
                <span class="errMsg"><?php echo $this->arrError["pw1"]?></span>
        <?php } ?>
        
        <input type="text" id="u_name" name="u_name" maxlength="10" placeholder="이름"
        value="<?php echo $result[0]["u_name"] ?>" required>
        <?php if(isset($this->arrError["u_name"])){ ?>
                <span><?php echo $this->arrError["u_name"]?></span>
        <?php } ?>
        <label for="birth">생년월일</label>
        <input type="date" id="birth" name="birth" value="<?php echo $result[0]["u_birth"] ?>" required>
        <?php if(isset($this->arrError["birth"])){ ?>
                <span><?php echo $this->arrError["birth"]?></span>
        <?php } ?>
        <label for="gender">성별</label>
        <div class="sel">
            <select name="gender" id="gender">
                <?php if($result[0]["u_gender"] === "U"){ ?>
                <option value="U" selected>선택안함</option>
                <option value="M">남</option>
                <option value="F">여</option>
                <?php }else if($result[0]["u_gender"] === "M"){?>
                <option value="U">선택안함</option>
                <option value="M" selected>남</option>
                <option value="F">여</option>
                <?php }else{?>
                <option value="U">선택안함</option>
                <option value="M">남</option>
                <option value="F" selected>여</option>
                <?php }?>

            </select>
        </div>
        <?php if(isset($this->errMsgEmail)){ ?>
                    <span class="errMsg"><?php echo $this->errMsgEmail ?></span>
        <?php } ?>
        <input type="email" id="email" name="email" placeholder="이메일" value="<?php echo $result[0]["u_email"] ?>" required>
        <?php if(isset($this->arrError["email"])){ ?>
                <span><?php echo $this->arrError["email"]?></span>
        <?php } ?>
        <input type="num" id="num" name="num" maxlength="12" placeholder="전화번호" value="<?php echo $result[0]["u_num"] ?>" required>
        <?php if(isset($this->arrError["num"])){ ?>
                <span><?php echo $this->arrError["num"]?></span>
        <?php } ?>
        <button class="ghost" type="submit">수정</button>
      </form>
    </div>
  </div>
</div>
<script>
        function redirectLogout(){
            location.href = "/user/logout";
        }
    </script>
<script src="/application/view/js/common.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>