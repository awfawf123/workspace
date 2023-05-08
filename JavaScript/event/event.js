//인라인 이벤트
onclick

//프로퍼티 리스너
const btn1 = document.querySelector('#btn1');
btn1.onclick = function(){
    location.href = "http://www.google.com"
}

//addEventListener(eventType, function) 방식
const btn2 = document.querySelector('#btn2');
//현재창
// btn2.addEventListener('click',() =>{
//     location.href = 'http://www.daum.net';
// });

//팝업창
let newWindow = null;
btn2.addEventListener('click',() =>{
    newWindow = open('http://www.daum.net','test','width=500 height=500');
});
const btn3 = document.querySelector('#btn3');
// btn3.addEventListener('click',()=>{
//     newWindow.close();
// });

// btn3.addEventListener('click',popUpClose(newWindow));

// 이벤트 삭제
// removeEventListener(eventType, function)
//addEventListener()로 등록한 이벤트의 인수와 같은 인수를 셋팅해야 삭제됌
// btn3.removeEventListener('click',popUpClose(newWindow));

// function popUpClose(win){
//     win.close();;
// }

//이벤트 타입
//1. 마우스 이벤트
// -mousedown - 마우스가 요소안에서 클릭이 눌릴 때
const div1 = document.querySelector('.div1');
div1.addEventListener('mousedown',()=>alert('div1 클릭'));
// -mouseenter 마우스 포인터가 요소 안으로 진입 했을 때
div1.addEventListener('mouseenter',()=>alert('div1 진입'));

