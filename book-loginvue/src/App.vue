<template>
  <div id="app">
    <SigninHeader></SigninHeader>
    <router-view/>
  </div>
</template>
<script>
  import SigninHeader from './components/common/signin/SigninHeader.vue';

  export default {
    components: {
      SigninHeader,
    }
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
</style>
