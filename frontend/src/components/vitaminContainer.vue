<template>
    <div class="container">
        <VitaminCard v-for="(vitamin, index) in vitamins" :key="index"
            v-bind:id = "vitamin.id"
            v-bind:name = "vitamin.name"
            v-bind:info = "vitamin.info"
            v-bind:sources = "vitamin.sources"
            v-bind:summary = "vitamin.summary"
            @idClicked = "handleClick"
        />
    </div> 
</template>

<script>
import VitaminCard from './vitaminCard.vue'
import axios from 'axios'

export default {
    name: 'VitaminContainer',
    components: {
        VitaminCard
    },
    data(){
        return{
            vitamins: undefined,
            isClicked: false,
            currentVitamin: undefined,
            currentVitaminId: undefined
        }
    },
    created(){
        axios.get('http://localhost:80/Vitamizer/backend/API/read.php')
        .then(response => {
        this.vitamins = response.data.JSON.content
        })
        .catch(e =>{
        console.error(e)
        })
    },
    methods: {
        getOne: function(){
            axios.post('http://localhost:80/Vitamizer/backend/API/read.php', {
                id: this.currentVitaminId
            })
            .then(response => {
                this.currentVitamin = response.data.JSON
                console.log(this.currentVitamin)
            }).catch(e => {
                console.error(e)
            })
        },
        handleClick: function(value){
            this.currentVitaminId = value
            console.log(value)
        }

  }
}
</script>

<style>
    .d-flex {
        height: 100%!important;
    }
</style>