<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- swiper cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/application/view/css/list.css" type='text/css'>
    <title>Document</title>
</head>
<body>
    <?php include_once(_HEADER_PHP) ?>
      <!-- 슬라이더 -->
      <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
          <div class="carousel-item active"><img class="d-block w-100" src="https://source.unsplash.com/user/erondu/1600x500" alt="..." /></div>
          <div class="carousel-item"><img class="d-block w-100" src="https://source.unsplash.com/collection/190727/1600x500" alt="..." /></div>
          <div class="carousel-item"><img class="d-block w-100" src="https://source.unsplash.com/WLUHO9A_xik/1600x500" alt="..." /></div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button></div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- 카드 -->
      <div class="container">
        <div class="sub-title1">
          <h2>오늘 하루만, 특가 상품</h2>
          <i class="bi bi-clock-history"></i>
          <div class="today"></div>
        </div>
        <div class="row row-cols-xxl-3 row-cols-lg-3">
          <div class="col d-flex justify-content-center pt-3 pb-3">
            <div class="card" style="width: 30rem; border: none;">
                <img src="https://source.unsplash.com/daily?coffee/300x300" style="width: 416px; height:300px" class="card-img-top" alt="...">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Item #1
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          구매하기
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col d-flex justify-content-center pt-3 pb-3">
            <div class="card" style="width: 30rem; border: none;">
                <img src="https://source.unsplash.com/collection/190727/300x300" style="width: 416px; height:300px" class="card-img-top" alt="...">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Item #1
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          구매하기
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col d-flex justify-content-center pt-3 pb-3">
            <div class="card" style="width: 30rem; border: none;">
                <img src="https://source.unsplash.com/WLUHO9A_xik/300x300" style="width: 416px; height:300px" class="card-img-top" alt="...">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading3">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        Item #1
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          구매하기
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
<!-- itmes -->
      <div class="items container">
        <div class="inner">
        <div class="inner-left">
          <h2>Weekly Menu</h2>
            <ul class="tab-wrapper">
              <li class="tab" rel="tab01"><a href="javascript:0">신제품</a></li>
              <li class="tab" rel="tab02"><a href="javascript:0">추천제품</a></li>
              <li class="tab" rel="tab03"><a href="javascript:0">best seller</a></li>
          </ul>
        </div>
        <div class="inner-right">
          <div class="tab-contents tab01">
            <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="pdp-card">
                    <div class="pdp-img">
                        <a href="#">
                            <img src="https://source.unsplash.com/collection/190727/300x300" alt="">
                        </a>
                    </div>
                    <div class="pdp-detail">
                        <a href="#">치즈 케이크</a>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="pdp-card">
                    <div class="pdp-img">
                        <a href="#">
                            <img src="https://source.unsplash.com/collection/190727/300x300" alt="">
                        </a>
                    </div>
                    <div class="pdp-detail">
                        <a href="#">크로와상</a>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="pdp-card">
                    <div class="pdp-img">
                        <a href="#">
                            <img src="https://source.unsplash.com/collection/190727/300x300" alt="">
                        </a>
                    </div>
                    <div class="pdp-detail">
                        <a href="#">초콜렛</a>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="pdp-card"> 
                    <div class="pdp-img">
                        <a href="#">
                            <img src="https://source.unsplash.com/collection/190727/300x300" alt="">
                        </a>
                    </div>
                    <div class="pdp-detail">
                        <a href="#">마카롱(초코,딸기,치즈,유자)</a>
                    </div>
                </div>
              </div>
            </div>
        </div>
        </div>
        <div class="tab-contents tab02">
          <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="pdp-card">
                  <div class="pdp-img">
                      <a href="#">
                          <img src="https://source.unsplash.com/daily?coffee/300x300" alt="">
                      </a>
                  </div>
                  <div class="pdp-detail">
                      <a href="#">치즈 케이크</a>
                  </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="pdp-card">
                  <div class="pdp-img">
                      <a href="#">
                          <img src="https://source.unsplash.com/collection/190727/300x300" alt="">
                      </a>
                  </div>
                  <div class="pdp-detail">
                      <a href="#">크로와상</a>
                  </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="pdp-card">
                  <div class="pdp-img">
                      <a href="#">
                          <img src="https://source.unsplash.com/collection/190727/300x300" alt="">
                      </a>
                  </div>
                  <div class="pdp-detail">
                      <a href="#">초콜렛</a>
                  </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="pdp-card"> 
                  <div class="pdp-img">
                      <a href="#">
                          <img src="https://source.unsplash.com/collection/190727/300x300" alt="">
                      </a>
                  </div>
                  <div class="pdp-detail">
                      <a href="#">마카롱(초코,딸기,치즈,유자)</a>
                  </div>
              </div>
            </div>
          </div>
      </div>
      </div>
        </div>
      </div>
      </div>
      <!-- 모달 -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <script>
        function redirectLogout(){
            location.href = "/user/logout";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="/application/view/js/list.js"></script>
</body>
</html>