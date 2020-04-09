<template>
        <div class="card m-3">
            <div class="card-body">
                <h5 class="card-title">{{name}}</h5>
                <p class="card-text">{{summary}}</p>
                <p class="card-text" v-on:click="readMore">Läs mer</p>
            </div>
        </div>
</template>

<script>
export default {
    name: 'VitaminCard',
    props: {
        id: Number,
        name: String,
        summary: String
    },
    methods: {
        readMore: function(){
            this.$emit('idClicked', this.id)
        }
    }
}
</script>