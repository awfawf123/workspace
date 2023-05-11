const today = document.querySelector('.today');

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


let nav_li = document.querySelectorAll('.notice-left ul li');
let news_li = document.querySelectorAll('.notice-right ul');
for(let i=0; i<nav_li.length; i++){
  nav_li[i].addEventListener('click',function(){
    for(let j=0; j<nav_li.length; j++){
      nav_li[j].classList.remove('nav-active');
      news_li[j].classList.remove('nav-active');
    }
    nav_li[i].classList.add('nav-active');
    news_li[i].classList.add('nav-active');
  });
  
};
//list
let list_li = document.querySelectorAll('.list ul li');
for(let i=0; i<list_li.length; i++){
  list_li[i].addEventListener('click',function(){
    for(let j=0; j<list_li.length; j++){
      list_li[j].classList.remove('list-active');
    }
    list_li[i].classList.add('list-active');
  })
};


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

const tabs = document.querySelectorAll(".tab-wrapper .tab");
tabs.forEach(tab => {
  tab.addEventListener("click", () => {
    tabs.forEach(t => t.classList.remove("on"));
    tab.classList.add("on");
    document.querySelectorAll(".tab-contents").forEach(t => t.style.display = "none");
    document.querySelectorAll(`.${tab.getAttribute("rel")}`).forEach(t => t.style.display = "block");
  });
});