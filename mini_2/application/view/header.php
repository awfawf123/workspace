<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
      </div>
      <div class="dropdown mt-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
          Dropdown button
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
  </div>
    <!-- header -->
    <header class="header">
      <div class="inner">
        <h1><a href="#">CAFE24</a></h1>
        <div class="nav">
          <ul>
            <li><a href="#">카페 소개</a></li>
            <li><a href="#">메뉴</a></li>
            <li><a href="#">장소</a></li>
            <li><a href="#">스토리</a></li>
            <li><a href="#">이벤트</a></li>
          </ul>
        </div>
        <div class="head_icon">
            <?php if(empty($_SESSION) === true){?>
            <a href="user/login">로그인</a>
            <?php }else{?>
                <span><?php echo $_SESSION["u_id"]?>님 환영합니다.</span>
            <?php }?>
            <button id="logout" onclick="redirectLogout();">Logout</button>
          <a data-bs-toggle="offcanvas" href="#offcanvasRight" role="button" aria-controls="offcanvasRight">
              <i class='bi bi-list'></i>
            </a>
        </div>
      </div>
    </header>