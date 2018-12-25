<template>

         <div class="uk-container uk-container-center uk-margin-large-top uk-margin-large-bottom">
                
                <div class="uk-grid">
                    
                    <div id="tm-right-section" class="uk-width-large-1-1 uk-width-medium-7-10"  data-uk-scrollspy="{cls:'uk-animation-fade', target:'img'}">
                        <div class="uk-grid-width-small-1-3 uk-grid-width-medium-1-4 uk-grid-width-large-1-6" data-uk-grid="{gutter: 20}">
                            
                            
                            
                            
                            <div v-for="movie in movies">
                                <div class="uk-overlay uk-overlay-hover">
                                    <img :src="movie.medium_cover_image" alt="Image" >
                                    <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                                    <a class="uk-position-cover" href="#"></a>
                                </div>
                                <div class="uk-panel" >
                                    
                                    <h5 class="uk-panel-title">{{movie.title}}</h5>
                                    <p>
                                        <span class="rating">
                                            <i class="uk-icon-star"></i>
                                            <i class="uk-icon-star"></i>
                                            <i class="uk-icon-star"></i>
                                            <i class="uk-icon-star"></i>
                                            <i class="uk-icon-star"></i>
                                        </span>
                                        <span class="uk-float-right">{{movie.year}}</span>
                                    </p>
                                </div>
                            </div>






                        </div>
                        <div class="uk-margin-large-top uk-margin-bottom">
                            <ul class="uk-pagination">
                                <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                                <li class="uk-active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><span>...</span></li>
                                <li><a href="#">20</a></li>
                                <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
       
</template>

<script>
    export default {
        data(){
            return{
                movies:{},
            }
        },
        methods:{
            loadMovies(){
                axios.get('/home').then(({data})=>{this.movies=data.data.movies});
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created(){
            this.loadMovies();
        }
    }
</script>
