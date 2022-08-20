<template>
    <div class="container">
        <div id="main">
            <div class="userIconDiv"><i id="userIcon" class="fa-regular fa-circle-user text-white"></i></div>
            <div class="input">
                <div><input type="text" v-model="userid" placeholder="학번"></div>
                <div><input type="password" v-model="userpw" placeholder="비밀번호"></div>
                <div class="btn cursor text-white" @click="userLogin">LOGIN</div>
            </div>
        </div>
        <div id="footer">
            <div class="btn cursor" id="joinbtn" @click="UserJoin">JOIN</div>
        </div>
    </div>
</template>

<!-- <script src="https://kit.fontawesome.com/57749be668.js" crossorigin="anonymous"></script> -->
<script>
export default {
    components: {
        
    },
    data() {
        return {
            userid:'',
            userpw:'',
            modalShow: false,
            msg:""
        }
    },
    methods: {
        userLogin() {
            if(this.userid.trim() !== '' && this.userpw.trim() !== '') {
                const param = {
                    userid:this.userid,
                    userpw:this.userpw
                }
                axios.post('/user/signin', param)
                .then(res => {
                    if(res.status === 200 && res.data.result) {
                        this.msg = res.data.result;
                        this.modalShow = true;
                    } else {
                        location.href = "main.vue";
                    }
                })
            }
        },
        UserJoin() {

        },
        changeShow() {
            this.modalShow = false
            this.msg = ''
            userid = ''
            userpw = ''
        }
    }
}
</script>

<style scoped>
#main { background-color: #7BB3BC;
    text-align: center;
    margin-left: 10vw;
    border-radius: 20vw 0 0 20vw;
    display: grid;
    grid-template-columns: 1fr 1fr;
}
.input {display: grid;
    align-content: space-evenly;
    color: #FFFFFF;
    }
input { width: 70%; height: 5vh; text-align: center; border: none;
    border-radius: 5px; background-color: #B2EBF4;}
.btn {font-size: 2rem; font-weight: bold;}
#joinbtn {color: #7BB3BC;}
.userIconDiv {
    margin: auto 0;
}
#userIcon { font-size: 30vh; }
#footer {text-align: center; margin-top: 4vh;}
</style>