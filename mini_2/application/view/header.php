<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">CAFE24</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="offcanvas-ul">
            <li><a href="#">카페 소개</a></li>
            <li><a href="#">메뉴</a></li>
            <li><a href="#">장소</a></li>
            <li><a href="#">스토리</a></li>
            <li><a href="#">이벤트</a></li>
        </ul>
    </div>
  </div>
    <!-- header -->
    <header class="header">
      <div class="inner">
        <h1><a href="../">CAFE24</a></h1>
        <div class="nav">
          <ul>
            <li><a href="#">카페 소개</a></li>
            <li><a href="#">메뉴</a></li>
            <li><a href="#">장소</a></li>
            <li><a href="#">스토리</a></li>
            <li><a href="#">이벤트</a></li>
          </ul>
        </div>
        <div class="head-icon">
            <?php if(empty($_SESSION) === true){?>
            <a href="../user/login">로그인</a>
            <?php }else{?>
                <span><?php echo $_SESSION["u_id"]?>님 환영합니다.</span>
            <?php }?>
            <?php if(empty($_SESSION) === false){?>
            <button class="btn" id="logout" onclick="redirectLogout();">로그아웃</button>
            <a href="../user/userupdate" class="btn">회원정보 변경</a>
            <?php }?>
          <a data-bs-toggle="offcanvas" href="#offcanvasRight" role="button" aria-controls="offcanvasRight">
              <i class='bi bi-list'></i>
            </a>
        </div>
      </div>
    </header>