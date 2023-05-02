console.log("hi,js","두번째 ");
// ------------------
//변수
// ------------------
// var : 중복으로 선언 가능, 재할당 가능, 함수레벨 스코프 
// var u_name ="hong";
// u_name = "갑";
// console.log(u_name);

// let : 중복선언 불가능, 재할당 가능, 블록레벨 스코프
// let u_age = 20;

// 상수
// const : 중복선언 불가능, 재할당 불가능, 블록레벨 스코프
// const gender = "M";
// gender = "F";

// 스코프
// 전역 스코프
let u_name = "홍길동";

// 함수 레벨 스코프
function test(){
    console.log(u_name);
    let u_age = 30;
    console.log(u_age);
}
// 블록 레벨 스코프
function test1(){
    if(true){
        let v_test1 = "함수 : test1";
        var v_var1 = "var로 선언";
    }
    // console.log(v_test1);
    console.log(v_var1);
}

//호이스팅(hoisting)
//코드가 실행하기 전 변수선언/함수선언이 해당 스코프의 최상단으로 끌어 올려진 것 같은 현상을 말한다.
console.log(hTest());
console.log(constTest);

function hTest(){
    return "함수 : hTest";
}

var varTest = "var : var변수";

let letTest = "let 변수";

const constTest = "const 변수"
