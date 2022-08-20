<template>
    <div class="container">
        <div id="main" class="rootBg">
        <div class="userIconDiv"><i id="userIcon" class="fa-regular fa-circle-user text-white"></i></div>
        <div class="input">
            <div><input type="text" v-model="rootid" placeholder="관리자ID"></div>
            <div><input type="text" v-model="rootpw" placeholder="비밀번호"></div>
            <div class="btn text-white">LOGIN</div>
        </div>
    </div>
    <div id="footer">
            <div class="btn rootColor">JOIN</div>
    </div>
    </div>
</template>

<!-- <script src="https://kit.fontawesome.com/57749be668.js" crossorigin="anonymous"></script> -->
<script>
export default {
    data() {
        return {
            rootid:'',
            rootpw:''
        }
    },
}
</script>

<style scoped>
#main { 
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
.userIconDiv {
    margin: auto 0;
}
#userIcon { font-size: 30vh; }
#footer {text-align: center; margin-top: 4vh;}
</style>