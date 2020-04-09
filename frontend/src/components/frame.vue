<template>
  <div class="h-100">
    <div class="container-fluid bg-success text-center py-2"><h1 class="text-light">Vitamizer</h1></div>
    <VitaminContainer/>
  </div>
</template>

<script>
import VitaminContainer from './vitaminContainer'

export default {
  name: 'Frame',
  components: {
    VitaminContainer
  }
}
</script>