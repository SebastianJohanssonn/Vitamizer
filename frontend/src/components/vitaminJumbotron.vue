<template>
    <div class="jumbotron">
        <h1 class="display-4">{{name}}</h1>
        <p class="lead">{{summary}}</p>
        <hr class="my-4">
        <p class="text-left">{{info}}</p>
        <hr class="my-4">
        <h3 class="text-left">Källor för denna vitamin:</h3>
        <p class="lead text-left">
            <ul>
                <li v-for="(source, index) in sources" :key="index">{{source}}</li>
            </ul>
        </p>
        <p class="lead">
            <button class="btn btn-danger btn-lg" type="button" v-on:click="close">close</button>
        </p>
    </div>
</template>

<script>
export default {
    name: "VitaminJumbotron",
    props:{
        name: String,
        info: String,
        sources: String,
        id: Number,
        summary: String
    },
    methods: {
        close: function(){
            this.$emit('close')
        }
    }
}
</script>