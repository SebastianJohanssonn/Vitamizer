<template>
  <div id="app" class="m-0">
    <Frame/>
  </div>
</template>

<script>
import Frame from './components/frame.vue'

export default {
    name: 'App',
    components: {
      Frame
    }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
