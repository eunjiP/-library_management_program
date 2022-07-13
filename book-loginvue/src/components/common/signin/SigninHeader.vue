<template>
  <header>
    <h1 class="subColor">{{ title }}</h1>
    <h5>Welcome to the website</h5>
    <nav>
        <router-link to="/">User Login</router-link> |
        <router-link to="/rootsignin">Root Login</router-link>
    </nav>
  </header>
</template>

<script>
export default {
  data() {
    return {
      title: "USER LOGIN"
    }
  }
}
</script>

<style scoped>
header {
  text-align: center;
  font-size: 1.5rem;
  margin: 3vh 0;
  color: #7BB3BC;
}
nav a { 
  font-size: 1rem;
  color: #2c3e50;}
nav a.router-link-exact-active { font-weight: bold; color:#7BB3BC; }
</style>