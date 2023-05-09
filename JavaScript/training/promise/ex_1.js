// setTimeout(function() {
//     console.log('A')
// }, 3000);

// setTimeout(function() {
//     console.log('B')
// }, 2000);

// setTimeout(function() {
//     console.log('C')
// }, 1000);

//1.콜백함수를 이용해서 A,B,C순서로 콘솔에 출력


    // setTimeout(function() {
    //     console.log('A')
    //     setTimeout(() => {
    //        console.log('B') 
    //        setTimeout(() => {
    //             console.log('C');
    //        }, 1000);
    //     }, 2000);
    // }, 3000);

//2.promise를 이용해서 A,B,C순서로 콘솔에 출력(promise를 함수로 등록해서 구현)
function myPromise(str,time){
    return new Promise((resolve)=>{
        setTimeout(() => {
            resolve(console.log(str))
        }, time);
    })
}
myPromise('A',3000)
.then(() => myPromise('B',2000))
.then(() => myPromise('C',1000));
