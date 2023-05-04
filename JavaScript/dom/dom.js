// 요소 선택 방법
// 1.ID로 선택
const title = document.getElementById("title");
// 2.태그명으로 요소 선택
const li = document.getElementsByTagName('li');

//탕수육,볶음밥,깐풍기는 배경색상을 오렌지색
//짜장면,짬뽕,라조기는 배경색상을 베이지색

//3.클래스명으로 요소 선택
const noneLi = document.getElementsByClassName('none-li');
//4.css 선택자로 요소를 선택
const title2 = document.querySelector('#title');
const li2 = document.querySelectorAll('.none-li');

//요소 조작
//콘텐츠 조작
title.textContent = '바꿈';
title.innerHTML = '<span>바꿈</span>';

//요소에 속성을 추가
const it = document.getElementById('it');
it.setAttribute('placeholder','aaaaaaaa');

const aa = document.getElementById('aa');
aa.setAttribute('href','http://www.naver.com')

//요소의 속성을 제거
it.removeAttribute('placeholder');

//요소의 스타일링
// aa.style.textDecoration = 'none';

//클래스로 스타일 추가
aa.classList.add('aa1');
aa.classList.add('aa2');
aa.classList.add('aa3');

//새로운 요소 만들기
const cli = document.createElement('li');
cli.innerHTML = '야끼우동';

const food = document.createElement('li');
food.innerHTML = '잡채밥';

const food2 = document.createElement('li');
food2.innerHTML = '동파육';

//요소를 가장 마지막에 삽입
const ul = document.getElementsByTagName('ul');
// ul[0].appendChild(cli);

//요소를 특정 위치에 삽입
// const zzam = document.querySelector('li:nth-child(3)');
// ul[0].insertBefore(cli,zzam);
// li[2].appendChild(cli);

//해당 요소 삭제
// cli.remove();

//라조기와 깐풍기 사이에 "잡채밥","동파육"을 순서대로 넣고,
//배경색깔 넣은것도 제대로 나오도록 수정

const ggan = document.querySelector('li:nth-child(5)');
ggan.appendChild(food);
ggan.appendChild(food2);

for(let i=0; i < li.length; i++){
    if(i%2 === 0){
        li[i].style.backgroundColor='red'
    }else{
        li[i].style.backgroundColor='orange'
    }
}