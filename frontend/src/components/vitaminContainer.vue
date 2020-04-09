<template>
    <div v-if="currentVitamin">
        <VitaminJumbotron
            v-bind:id = "currentVitamin.id"
            v-bind:name = "currentVitamin.name"
            v-bind:info = "currentVitamin.info"
            v-bind:sources = "currentVitamin.sources"
            v-bind:summary = "currentVitamin.summary"
            @close = "handleClose"
        />
    </div> 
    <div v-else class="container">
        <VitaminCard v-for="(vitamin, index) in vitamins" :key="index"
            v-bind:id = "vitamin.id"
            v-bind:name = "vitamin.name"
            v-bind:summary = "vitamin.summary"
            @idClicked = "getOne"
        />
    </div>
</template>

<script>
import VitaminCard from './vitaminCard.vue'
import VitaminJumbotron from './vitaminJumbotron.vue'
import axios from 'axios'

export default {
    name: 'VitaminContainer',
    components: {
        VitaminCard,
        VitaminJumbotron
    },
    data(){
        return{
            vitamins: undefined,
            isClicked: false,
            currentVitamin: undefined
        }
    },
    created(){
        axios.get('http://localhost:80/Vitamizer/backend/API/read.php')
        .then(response => {
        this.vitamins = response.data
        })
        .catch(e =>{
        console.error(e)
        })
    },
    methods: {
        getOne: function(value){
            axios.get('http://localhost:80/Vitamizer/backend/API/read.php', {
                params: {
                    id: value
                }
            })
            .then(response => {
                this.currentVitamin = response.data
                console.log(this.currentVitamin)
            }).catch(e => {
                console.error(e)
            })
        },
        handleClose: function(){
            this.currentVitamin = undefined
        }

  }
}
</script>