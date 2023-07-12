import{createStore} from 'vuex'
import axios from 'axios'
const store = createStore({
    state(){
        return{
            boardData:[], //게시글 데이터
            lastId:'', //가장 마지막에 로드된 게시물의 ID
            flg:0, // 버튼 더보기
            tabFlg:0, // tabUI flg(0:메인,1:필터,2:작성)
            imgUrl:'', //이미지 url
            filter:'',
            content:'',
            postImg:null
        }
    },
    mutations:{
        // 초기 데이터 셋팅용
        createBoardData(state, data){
            state.boardData = data;
            this.commit('changeLastId',data[data.length-1].id);
        },
        flgData(state){
            state.flg = 1;
        },
        //더보기 데이터 셋팅용
        addBoardData(state, data){
            state.boardData.push(data);
            this.commit('changeLastId',data.id);
        },
        // lastId 변경
        changeLastId(state,id){
            state.lastId = id;
        },
        // tabUI flg 변경
        changeTabFlg(state, num){
            state.tabFlg = num;
        },
        // 이미지 url변경
        changeImgUrl(state,imgUrl){
            state.imgUrl = imgUrl;
        },
        // 이미지 필터변경
        changeFilter(state,filter){
            state.filter = filter;
        },
        // 초기화
        clearState(state){
            state.filter = '';
            state.imgUrl = '';
            state.postImg = '';
        },
        changeContent(state,content){
            state.content = content;
        },
        changePostImg(state,postImg){
            state.postImg = postImg;
        },
        // 작성글 데이터
        addWriteData(state,data){
            state.boardData.unshift(data);
        }
    },
    actions:{
        getMainList(context){
            axios.get('http://192.168.0.66/api/boards')
            .then(res =>{
                context.commit('createBoardData',res.data);
            })
            .catch(err => {
                console.log(err);
            })
        },
        getMoreList(context){
            axios.get('http://192.168.0.66/api/boards/' + context.state.lastId)
            .then(res =>{
                if(res.data){
                    context.commit('addBoardData',res.data);
                }else{
                    context.commit('flgData',res.data);
                }
            })
            .catch(err => {
                console.log(err);
            })
        },
        // 게시글 작성
        writeContent(context){
            const header ={
                headers:{
                    'Content-Type':'multipart/form-data'
                }
            };
            axios.post('http://192.168.0.66/api/boards',{
                name:'김영범',
                filter:context.state.filter,
                img:context.state.postImg,
                content:context.state.content,
            },header)
            .then(res =>{
                context.commit('addWriteData',res.data);
                context.commit('changeTabFlg',0);
                context.commit('clearState');
            })
            .catch(err => {
                console.log(err);
            })
        }
    }
})
export default store