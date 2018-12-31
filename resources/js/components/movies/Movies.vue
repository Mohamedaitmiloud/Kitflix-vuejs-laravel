<template>

         <div class="uk-container uk-container-center uk-margin-large-top uk-margin-large-bottom">
                
                <div class="uk-grid">
                    <div class="uk-container-center">
<Stretch v-show="loading" background="#339ae7"></Stretch>
                    </div>
                    
                    <div id="tm-right-section" class="uk-width-large-1-1 uk-width-medium-7-10"  data-uk-scrollspy="{cls:'uk-animation-fade', target:'img'}">
                        <div class="uk-grid-width-small-1-3 uk-grid-width-medium-1-4 uk-grid-width-large-1-6" data-uk-grid="{gutter: 20}">
                            
                            
                            
                            
                            <div v-for="movie in movies" :key="movie.id">
                                <div class="uk-overlay uk-overlay-hover">
                                    <img :src="movie.medium_cover_image" alt="Image" >
                                    <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                                    <router-link class="uk-position-cover" :to="'/movie/'+movie.id"></router-link>
                                </div>
                                <div class="uk-panel" >
                                    
                                    <h5 class="uk-panel-title">{{movie.title | shortTitle}}</h5>
                                    <p>
                                        <span class="rating">
                                            <i v-for="n in movie.rating" :key="n.index" class="uk-icon-star"></i>
      
                                        </span>
                                        <span class="uk-float-right">{{movie.year}}</span>
                                    </p>
                                </div>
                            </div>






                        </div>
                        <div class="uk-margin-large-top uk-margin-bottom">
                            <ul class="uk-pagination">
                                <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                                <!-- <li class="uk-active"><span>1</span></li> -->

                                <li v-for="page in pages" :key="page.index"><a @click="louadByPage(page)">{{page}}</a></li>

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
                page:1,
                pages:[],
                movies:{},
                loading:true,
            }
        },
        methods:{
            louadByPage(page=1){
                this.movies={};
                this.loading=true;
                this.page = page;
                this.generatePages();
                this.loadMovies();
            },
            loadMovies(){
                this.loading=true;
                axios.get('/api/v1/movies/'+this.page)
                      .then(({data})=>{
                          this.movies=data.data.movies;
                          this.ratingStars(this.movies);
                          this.loading=false;
                           })
                      .catch(error=>{
                          console.log('Error',error);
                      })
            },
            generatePages(){
                this.pages = [];                  
                 for (let i = this.page; i <= (this.page+4); i++) {
                     this.pages.push(i);
                 }
            },
            ratingStars(movies){
                movies.forEach(movie => {
                    movie.rating = Math.round(movie.rating / 2);
                });
            }
        },
        components: {
           Stretch
         },
        mounted() {
            this.generatePages();
        },
        created(){
            this.loadMovies();
        }
    }
</script>
