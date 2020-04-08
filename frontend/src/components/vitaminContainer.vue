<template>
    <div>
        <VitaminCard/>
    </div>
</template>

<script>
import VitaminCard from './vitaminCard.vue'
export default {
    name: 'VitaminContainer',
    components: {
        VitaminCard
    },
    props: {
        vitamins: null
    }
}
</script>