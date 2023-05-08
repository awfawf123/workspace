// 1. 버튼을 클릭시 아래 내용의 알러트 출력
    //안녕하세요.
    //숨어있는 div를 찾아보세요
//2. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 알러트가 나옵니다.
    //"두근두근"
//3. 2번의 영역을 클릭하면 배경색이 베이지 색으로 바뀌어 나타납니다.
//4. 3번의 상태에서 다시 한번 더 클릭하면 배경색이 흰색으로 바뀌어 안보이게 됩니다.
    //alert 다시 숨는다
const btn1 = document.querySelector('#btn1');
const div1 = document.querySelector('.div1');

let str1 = Math.ceil(Math.random()*1000); // 1~1000 랜덤
let str2 = Math.ceil(Math.random()*1000);


div1.style.left = str1+'px';
div1.style.top = str2+'px';



btn1.addEventListener('click',()=>{
    alert('안녕하세요.\n숨어있는 div를 찾아보세요');
});

let count = 0;  
div1.addEventListener('mouseenter',()=>{
    if(count === 0){
        alert('두근두근');
    }
});

div1.addEventListener('click',()=>{
    if(count === 0){
        alert('들켰다');
        div1.classList.add('active');
        count++;
    }else{
        div1.classList.remove('active');
        alert('다시숨는다');
        count--;
    }
});


    