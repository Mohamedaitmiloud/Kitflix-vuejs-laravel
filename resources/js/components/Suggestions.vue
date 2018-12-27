<template>
<div class="uk-block ">
                     <div class="uk-container-center uk-container uk-margin-large-bottom">
                                <h3 class="uk-margin-large-bottom uk-text-contrast">You might also like</h3>
                                <div class="uk-margin" data-uk-slideset="{small: 2, medium: 4, large: 6}" style="">
                                    <div class="uk-slidenav-position uk-margin">
                                        <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-large-1-6 uk-grid-width-medium-1-4 uk-grid-width-small-1-2">
                                            <li v-for="movie in movies" :key="movie.id" class="uk-active" style=""><router-link :to="'/movie/'+movie.id"><img :src="movie.medium_cover_image" width="600" height="400" alt=""></router-link></li>
                                        </ul>
                                        <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                                        <a href="#" class="uk-slidenav uk-slidenav-next uk-slidenav-contrast" data-uk-slideset-item="next"></a>
                                    </div>
                                <ul class="uk-slideset-nav uk-dotnav uk-dotnav-contrast uk-flex-center uk-margin-top"><li data-uk-slideset-item="0" class="uk-active"><a></a></li><li data-uk-slideset-item="1" class=""><a></a></li></ul>
                            </div>
                        </div>
                    </div>
</template>

<script>
    export default {
        props:['movie_id'],
        data(){
            return{
                movies:{}
            }
        },
        methods:{
            loadSuggestions(){
                axios.get('/api/v1/suggestions/'+this.movie_id)
                     .then(({data})=>this.movies=data.data.movies)
                     .catch(error=>{
                         console.log('Error',error);
                     })
            }
        },
        mounted() {
            this.loadSuggestions();
        }
    }
</script>
