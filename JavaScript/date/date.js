const NOW = new Date('2023-04-30 15:20:30');
//getFullYear() : 연도만 가져오는 메소드
console.log(NOW.getFullYear());
//getMonth() : 월을 가져오는 메소드 0~11 가져오기 때문에 +1해줘야함
console.log((NOW.getMonth()+1));
// getDate() : 날짜를 가져오는 메소드
console.log(NOW.getDate());
// getDay() : 요일 가져오는 메소드 일요일:0 ~ 토요일:6
console.log(NOW.getDay());
// getTime() : 1970-01-01 기준으로 몇초가 지났는지
console.log(NOW.getTime());
// getHours() : 시간을 가져오는 메소드
console.log(NOW.getHours());
// getMinutes() : 분을 가져오는 메소드
console.log(NOW.getMinutes());
// getSeconds() : 초를 가져오는 메소드
console.log(NOW.getSeconds());

//기준일 : 2022-9-30 19:20:10
const stDay = new Date('2022-9-30 17:20:10');
const nowDay = new Date();
let result = nowDay-stDay;

const dDay = Math.floor(result / (1000*60*60*24));
const dHour = Math.floor((result / (1000*60*60)) % 24);
const dMin = Math.floor((result / (1000*60)) % 60);
const dSec = Math.floor(result / 1000 % 60);
console.log( dDay +"일 "+ dHour + "시 " + dMin + "분 " + dSec +"초");