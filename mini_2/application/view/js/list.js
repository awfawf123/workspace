const today = document.querySelector('.today');
// 오늘 시간 count
function getClock(){
    let lastTime = new Date(new Date().setHours(24, 0, 0, 0));
    let nowTime = new Date();
    let result = lastTime - nowTime;
    const hours = Math.floor((result / (1000*60*60)) % 24);
    const minutes = String(Math.floor((result / (1000*60)) % 60)).padStart(2, '0');
    const seconds = String(Math.floor(result / 1000 % 60)).padStart(2, '0');

    
  
    today.innerText = '남은시간 ' + hours + ':' + minutes + ':' + seconds;
  };

  getClock();
let nowTime = setInterval(getClock, 1000);

var swiper = new Swiper('.tab01 .swiper-container', {
  breakpoints: {
    // 화면의 넓이가 320px 이상일 때
    320: {
      slidesPerView: 1
    },
    // 화면의 넓이가 640px 이상일 때
    640: {
      slidesPerView: 2,
      spaceBetween: 10
    },
    // 화면의 넓이가 1024px 이상일 때
    1024: {
      slidesPerView: 3,
      spaceBetween: 20
    },
      observer: true,
      observeParents: true,
  },
    pagination: {
      el: '.tab01 .swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.tab01 .swiper-button-next',
      prevEl: '.tab01 .swiper-button-prev',
    },
  });

  var swiper = new Swiper('.tab02 .swiper-container', {
    breakpoints: {
      // 화면의 넓이가 320px 이상일 때
      320: {
        slidesPerView: 1
      },
      // 화면의 넓이가 640px 이상일 때
      640: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      // 화면의 넓이가 1024px 이상일 때
      1024: {
        slidesPerView: 3,
        spaceBetween: 10
      }
    },
    pagination: {
      el: '.tab02 .swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.tab02 .swiper-button-next',
      prevEl: '.tab02 .swiper-button-prev',
    },
    observer: true,
    observeParents: true,
  });
  var swiper = new Swiper('.tab03 .swiper-container', {
    breakpoints: {
      // 화면의 넓이가 320px 이상일 때
      320: {
        slidesPerView: 1
      },
      // 화면의 넓이가 640px 이상일 때
      640: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      // 화면의 넓이가 1024px 이상일 때
      1024: {
        slidesPerView: 3,
        spaceBetween: 10
      }
    },
      pagination: {
        el: '.tab03 .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.tab03 .swiper-button-next',
        prevEl: '.tab03 .swiper-button-prev',
      },
      observer: true,
      observeParents: true,
    });

// 로그아웃
function redirectLogout(){
  location.href = "/user/logout";
}
// Weekly Menu탭 클릭시
const tabs = document.querySelectorAll(".tab-wrapper .tab");
tabs.forEach(tab => {
  tab.addEventListener("click", () => {
    tabs.forEach(t => t.classList.remove("on"));
    tab.classList.add("on");
    document.querySelectorAll(".tab-contents").forEach(t => t.style.display = "none");
    document.querySelectorAll(`.${tab.getAttribute("rel")}`).forEach(t => t.style.display = "block");
  });
});

