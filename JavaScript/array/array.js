// let fileName = 'abc.de.fg';
// let first = fileName.indexOf('.');
// let second = fileName.lastIndexOf('.');

// console.log(fileName.slice(0,first));
// console.log(fileName.slice(first+1,second));
// console.log(fileName.slice(second+1));

//concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새배열을 반환
let arr1 = [1,2,3];
let arr2 = [10,20,30];
let arr3 = [100,200,300];
let arr4 = arr1.concat(arr2,arr3);
// console.log(arr4);

// includes() 메소드 : 배열이 특정요소를 가지고 있는지 판별
let arrInc = [1,2,3,4];
// console.log(arrInc.includes(2));

//sort() 메소드 : 배열의 요소를 아스키코드 기준으로 정렬해서 반환
const arrSort = [6,3,5,8,10,90,50,32,91,100000];

// arrSort.sort(function(a,b){
//     return a-b;
// });

arrSort.sort((a,b) => a-b); //오름차순
arrSort.sort((a,b) => b-a); //내림차순
//join() 메소드 : 배열에 모든 요소를 연결해서 하나의 문자열로 만들어줌
const arrJoin =["안녕","하세","요"];
arrJoin.join('');

//every 메소드 : 배열의 요소들이 주어진 함수를 통과하는지 판별
const arrEvery = [1,2,3,4,5];
// let result = arrEvery.every(function(val){
//     return val<=5;
// });
// console.log(result);
//모든 요소의 2로 나눈 나머지가 0인지 판별
// let result = arrEvery.every(function(val){
//    return val%2 === 0;
// });

// let result2 = arrEvery.every((a)=> a%2 === 0);

// arrEvery.forEach((val,key) => {
//     console.log(val,key);
// });

// some() 메소드 : 배열 안에 어떤 요소라도 주어진 함수를 통과하는지 판별
const arrSome =[1,2,3,4,5];
let result = arrSome.some(val => val >= 6);
// console.log(result);

// filter() 메소드 : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 반환
const arrFilter = [1,2,3,4,5];
let result2 = arrFilter.filter(val => val >=3);
console.log(result2);

