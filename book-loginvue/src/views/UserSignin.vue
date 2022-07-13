<template>
   <div id="main">
        <div class="test"><i id="userIcon" class="fa-regular fa-circle-user"></i></div>
        <div class="input">
            <div><input type="text" v-model="userid" placeholder="학번"></div>
            <div><input type="text" v-model="userpw" placeholder="비밀번호"></div>
            <div class="btn cursor">LOGIN</div>
        </div>
   </div>
   <div id="footer">
        <div class="btn cursor" id="joinbtn">JOIN</div>
   </div>
</template>

<!-- <script src="https://kit.fontawesome.com/57749be668.js" crossorigin="anonymous"></script> -->
<script>

export default {
    data() {
        return {
            userid:'',
            userpw:''
        }
    },
    methods: {

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
#userIcon { font-size: 5rem;}
#footer {text-align: center; margin-top: 4vh;}
</style>