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
    slidesPerView:'3',
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
    slidesPerView:'3',
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