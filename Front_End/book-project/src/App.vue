<template>
  <div id="app">
    <header>
      <h1 class="subColor" v-show="user">User Login</h1>
      <h1 class="rootColor" v-show="root">Manager Login</h1>
      <h5 class="subColor" v-show="user">Welcome to the website</h5>
      <h5 class="rootColor" v-show="root">Welcome to the website</h5>
      <nav>
          <router-link to="/" id="userRouter" @link-exact-active="changeUser" @click="changeUser">User Login</router-link> |
          <router-link to="/rootsignin" id="rootRouter" @link-exact-active="changeUser" @click="changeRoot">Root Login</router-link>
      </nav>
    </header>
    <router-view />
  </div>
</template>
<script>

  export default {
    data() {
    return {
      title: "USER LOGIN",
      user: true,
      root: false,
    }
  },
  methods: {
    changeUser() {
      if(this.user === false) {
        this.user = true
        this.root = false
      }
    },
    changeRoot() {
      if(this.root === false) {
        this.user = false
        this.root = true
      }
    },
  },

}

</script>

<style>
* {
    margin: 0;
    padding: 0
}
.cursor {cursor: pointer;}
html {
    background-color: #b2ebf4;
    width: 100%;
    height: 100%
}
body {
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    height: 80%
}
body>div {
    box-shadow: 0 4px 50px rgba(0, 0, 0, .5)
}
#app {
    flex-basis: 75%;
    background-color: #fff;
    display: grid;
    grid-template-rows: 25vh 40vh 15vh;
}
.subColor { color: #7BB3BC;}
.subBg {background-color: #7BB3BC;}
.rootColor {color: #8FACD7}
.rootBg { background-color: #8FACD7;}
header {
  text-align: center;
  font-size: 1.5rem;
  margin: 3vh 0;
}
nav a { 
  font-size: 1rem;
  color: #2c3e50;}
nav #userRouter.router-link-exact-active { font-weight: bold; color:#7BB3BC; }
nav #rootRouter.router-link-exact-active { font-weight: bold; color: #8FACD7 }
</style>
