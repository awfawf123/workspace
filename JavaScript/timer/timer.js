// 타이머 함수
//1.setTimeout() / clearTimeout()
const timeOut = setTimeout(()=>console.log('A'),2000);

clearTimeout(timeOut);
//2. setInterval() / clearInterval()
const myInterval = setInterval(()=>console.log('A'),1000);
clearInterval(myInterval);


//1~5를 1초마다 출력
let i=1;
let test = setInterval(()=>{
    console.log(i);
    if(i++ === 5){
        clearInterval(test);
    }
}
,1000);

const today = document.querySelector('.today');
const btnStop = document.querySelector('#btn-stop');

const getClock = () => {
  const date = new Date();
  const hours = String(date.getHours()).padStart(2, '0');
  const minutes = String(date.getMinutes()).padStart(2, '0');
  const seconds = String(date.getSeconds()).padStart(2, '0');

  today.innerText = '현재시각 '+'오후 '+`${hours} : ${minutes} : ${seconds}`;
};

getClock();
let test1 = setInterval(getClock, 1000);

btnStop.addEventListener('click',()=>{
    clearInterval(test1);
})
