import{createStore} from 'vuex'
import axios from 'axios'
const store = createStore({ 
    state(){
        return{
            dataList:[],
            content:'',
            id:'',
        }
    },
    mutations:{
        createData(state,data){
            state.dataList = data;
        },
        changeContent(state,content){
            state.content = content;
        },
        
        // 작성글 데이터
        addWriteData(state,data){
            state.dataList.unshift(data);
        },
       
    },
    actions:{
        getDataList(context){
            axios.get('http://localhost:8000/api/items')
            .then(res=>{
                console.log(res);
                context.commit('createData',res.data);
            })
            .catch(err=>{
                console.log(err);
            })
        },
        writeContent(context){
            let cont = document.querySelector('#content');
            const header ={
                headers:{
                    'Content-Type':'application/json'
                }
            };
            axios.post('http://localhost:8000/api/items',{
            item:{
                content:cont.value
            }
            },header)
            .then(res =>{
                context.commit('addWriteData',res.data);
                console.log(res);
            })
            .catch(err => {
                console.log(err);
            })
        },
        deleteContent(context){
            axios.delete('http://localhost:8000/api/items/'+ context.state.id)
            .then(res =>{
                console.log(res);
            })
            .catch(err => {
                console.log(err);
            })
        }
    }

})
export default store