// 타이머 함수
//1.setTimeout() / clearTimeout()
const timeOut = setTimeout(()=>console.log('A'),2000);

clearTimeout(timeOut);
//2. setInterval() / clearInterval()
const myInterval = setInterval(()=>console.log('A'),1000);
clearInterval(myInterval);


//1~5를 1초마다 출력
// let i=1;
// let test = setInterval(()=>{
//     console.log(i);
//     if(i++ === 5){
//         clearInterval(test);
//     }
// }
// ,1000);

const today = document.querySelector('.today');
const btnStop = document.querySelector('#btn-stop');
const btnStart = document.querySelector('#btn-start');

Date.prototype.amPm = function() {
    let h = this.getHours() < 12 ? "am" : "pm";
    return h;
}
function getClock(){
  const date = new Date();
  let amPm = date.amPm();
  const hours = date.getHours();
  const minutes = String(date.getMinutes()).padStart(2, '0');
  const seconds = String(date.getSeconds()).padStart(2, '0');

  if(amPm === 'am'){
    amPm = '오전';
  }else{
    amPm = '오후';
  }

  today.innerText = '현재시각 ' + amPm + ' ' + hours + ':' + minutes + ':' + seconds;
};
getClock();
let nowTime = setInterval(getClock, 1000);

let flg = true;
btnStop.addEventListener('click',()=>{
    if(flg){
        clearInterval(nowTime);
        btnStop.innerText = '재시작';
        flg = false;
    }else{
        nowTime = setInterval(getClock, 1000);
        btnStop.innerText = '정지';
        flg = true;
    }
})

