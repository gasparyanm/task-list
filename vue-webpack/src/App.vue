<template>
  <div id="app">
    <Header></Header>
    <SideBar v-if="$auth.check()"></SideBar>
    <Main></Main>
  </div>
</template>

<script>
import Header from "./components/Header";
import SideBar from "./components/SideBar";
import Main from "./components/Main";
export default {
  name: 'App',
  components: {
    Main,
    SideBar,
    Header
  }
}
</script>

<style>
  #app {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #2c3e50;
  }
</style>
