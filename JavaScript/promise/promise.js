// const promise1 = new Promise((resolve,reject)=>{
//     const data = true;

//     if(data){
//         resolve('성공');
//     }else{
//         reject('error');
//     }
// });

// promise1
// .then(data =>{console.log(data)}) //성공
// .catch(error =>{console.log(error)}) //실패
// .finally(() => {console.log('finally')}) //항상

//함수 등록해서 promise사용
function myPromise(){
    return new Promise((resolve,reject)=>{
        const data = true;

    if(data){
        resolve('성공');
    }else{
        reject('error');
    }
    });
}
myPromise()
.then(data =>{console.log(data)}) //성공
.catch(error =>{console.log(error)}) //실패
.finally(() => {console.log('finally')}) //항상
// 로그인 콜백
const Login = {
    chkInput(id, pw){
        return new Promise((resolve,reject)=>{
            setTimeout(() => {
                if(id !== '' && pw !== ''){
                    resolve({chkId: id, chkPw: pw});
                }else{
                    reject(new Error('잘못 입력 하셨습니다.'));
                }
            }, 500);
        })
    },
    loginUser(id, pw){
        return new Promise((resolve,reject)=>{
            setTimeout(() => {
                if(id === 'php506' && pw === 'php506'){
                    resolve(id);
                }else{
                    reject(new Error('없는 유저 입니다.'));
                }
            }, 500);
        })
    },
    chkAuth(id){
        return new Promise((resolve,reject)=>{
            setTimeout(() => {
                if(id === 'php506'){
                    resolve({authId: id, auth: 'admin'});
                }else{
                    reject(new Error('권한이 없습니다.'));
                }
            }, 500);
        });
    }
}

const id ='php506';
const pw ='php506';

Login.chkInput(id,pw)
.then(chkData => Login.loginUser(chkData.chkId, chkData.chkPw))
.then(loginId => Login.chkAuth(loginId))
.then(authData => console.log(`${authData.authId}유저님,${authData.auth}`))
.catch(error => console.log(error.message))