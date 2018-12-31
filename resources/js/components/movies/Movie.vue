<template>
<div>
<div id="tm-media-section" class="uk-block uk-block-small">

                    <div class="uk-container uk-container-center uk-width-8-10">
                        <div class="media-container  uk-container-center">
                            <a class="uk-button uk-button-large uk-button-link uk-text-muted" @click="$router.go(-1)"><i class=" uk-icon-arrow-left uk-margin-small-right"></i> Back</a>
                        </div>

                        <div class="uk-grid">
                            <div class="uk-width-medium-3-10">
                                <div class="media-cover">
                                    <img :src="movie.large_cover_image" alt="Image" class="uk-scrollspy-inview uk-animation-fade">
                                </div>
                               
                               
                               
                               <Favorite></Favorite>
                    
                                <a v-for="torrent in movie.torrents " :key="torrent.index" class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin-top" :href="torrent.url">{{torrent.type |capitalize }}{{"("+torrent.quality+")"+" "+torrent.size}}</a> 
                            </div>
                            <div class="uk-width-medium-7-10">
                                <div class="">
                                    <ul class="uk-tab uk-tab-grid " data-uk-switcher="{connect:'#media-tabs'}">
                                        <li class="uk-width-medium-1-3 uk-active" aria-expanded="true"><a href="#">Description</a></li>
                                        <li class="uk-width-medium-1-3" aria-expanded="false"><a href="#">Trailer</a></li>
                                        <li class="uk-tab-responsive uk-hidden uk-active" aria-haspopup="true" aria-expanded="true"><a>Active</a><div class="uk-dropdown uk-dropdown-small uk-dropdown-up"><ul class="uk-nav uk-nav-dropdown"></ul><div></div></div></li></ul>
                                    </div>

                                    <ul id="media-tabs" class="uk-switcher">

                                         <!--     start Tab Panel 1 (Reviews Sections) -->

                                        <li aria-hidden="false" class="uk-active">
                                            <h2 class="uk-text-contrast uk-margin-large-top">{{movie.title_long}} <span class="rating uk-margin-small-left uk-h4 uk-text-warning">
                                                <i v-for="n in this.stars" :key="n.index"  class="uk-icon-star "></i>
                                            </span></h2>
                                            <ul class="uk-subnav uk-subnav-line">
                                                <li v-show="movie.rating!=0"><i class="uk-icon-star uk-margin-small-right"></i>{{movie.rating}}</li>
                                                <li><i class="uk-icon-clock-o uk-margin-small-right"></i> {{movie.runtime}} Mins</li>
                                                <li>{{movie.year}}</li>
                                            </ul>
                                            <hr>
                                            <p class="uk-text-muted uk-h4">{{movie.description_full}}</p>
                                            <dl class="uk-description-list-horizontal uk-margin-top">
                                                <div v-show="movie.cast">
                                                     <dt>Starring</dt>
                                                <dd><ul class="uk-subnav ">
                                                    <li v-for="actor in movie.cast" :key="actor.index"><a href="#">{{actor.name}}</a></li>
                                                </ul></dd>
                                                </div>
                                                <dt>Genres</dt>
                                                <dd><ul class="uk-subnav ">
                                                    <li v-for="genre in movie.genres" :key="genre.index"><a href="#">{{genre}}</a></li>
                                                </ul></dd>
                                                <dt>Language</dt>
                                                <dd><ul class="uk-subnav ">
                                                    <li><a href="#">{{movie.language}}</a></li>
                                                </ul></dd>
                                            </dl>

                                            </li>

                                            <!--    ./ Tab Panel 1  -->

                                          <!--     start Tab Panel 2  (Reviews Section) -->

                                               <!--     ./ Tab Panel 2  -->


                                               <!--     start Tab Panel 3 (Trailer Section)  -->

                                                <li aria-hidden="true">
                                                    <div class="uk-cover uk-margin-top" style="height: 400px;">
                                                        <iframe data-uk-cover="" :src="'http://www.youtube.com/embed/'+movie.yt_trailer_code+'?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent&amp;enablejsapi=1&amp;api=1'" width="560" height="315" frameborder="0" allowfullscreen="" style="width: 712px; height: 400px;"></iframe>
                                                    </div>
                                                </li>

                                               <!--     ./ Tab Panel 3  -->


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <Suggestions :movie_id="id"></Suggestions>
                            </div>
                            
</template>

<script>
    import Suggestions from './Suggestions'
    import Favorite from '../features/Favorite'

    export default {
        data(){
            return{
                id:  this.$route.params.id,
                movie:{},
                stars: 0,
            }
        },
        methods:{
            loadMovie(){
                axios.get('/api/v1/movie/'+this.id)
                     .then(({data})=>{
                         this.movie = data.data.movie;
                         this.stars=Math.round(this.movie.rating/2);
                          })
                     .catch(error=>{
                         console.log(error);
                     })
            },
        },
        components:{
            Suggestions,
            Favorite
        },
        mounted() {
            console.log(this.id)
        },
        created(){
            this.loadMovie();
        }
    }
</script>
