<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class MoviesController extends Controller
{

    //
    // ──────────────────────────────────────── I ──────────
    //
    //   MoviesController 
    //   functions to get Data from YTS api 
    //   
    // ──────────────────────────────────────────────────
    //



    const BASE_URL = 'https://yts.ag';




    /**
     * index function to return the movies view
     */

    public function index(){
        return redirect('/movies');
    }


    /**
     * 
     * listMovies function takes $page as a parameter (default = 1) and returns 24 movies
     * from the YTS api as a JSON format 
     * 
     */


    public function listMovies($page){

        $baseUrl = self::BASE_URL.'/api/v2/list_movies.json';
        $parameters = '?limit=' . $limit=24 . '&page=' . $page . '&quality=' . $quality='All' . '&minimum_rating=' .$minimum_rating=0 . '&genre=' . $genre='' . '&sort_by=' . $sort_by='year' . '&order_by=' . $order_by='desc';
       $data = $this->getFromApi($baseUrl.$parameters);
       return  $data;

    }

    public function listPopularMovies($page){
        $baseUrl = self::BASE_URL.'/api/v2/list_movies.json';
        $sort_by = 'download_count';
        $parameters= '?limit=' . $limit=24 . '&page=' . $page . '&quality=' . $quality='All' . '&minimum_rating=' .$minimum_rating=0 . '&genre=' . $genre='' . '&sort_by=' . $sort_by . '&order_by=' . $order_by='desc';
        $data = $this->getFromApi($baseUrl.$parameters);
        return $data;

    }


    public function listMoviesByGenre($page,$genre){
        $baseUrl = self::BASE_URL.'/api/v2/list_movies.json';
        


    }


    /**
     * 
     * movieDetail function takes $movie_id and $with_image,$with_cast are true by default 
     * the function takes the movie ID and returns details about the spicific movie
     * using YTS api in a JSON format
     * 
     */

    public function movieDetail($movie_id,$with_images = true, $with_cast = true){
        $baseUrl = self::BASE_URL . '/api/v2/movie_details.json';
        $parameters = '?movie_id=' . $movie_id . '&with_images' . $with_images . '&with_cast=' . $with_cast;
        $data = $this->getFromApi($baseUrl.$parameters);
        return  $data;

    }

    /**
     * 
     * movieSuggestions function takes $movie_id as a parameter and returens
     * 4 movies in a JSON format
     * 
     */

    public function movieSuggestions($movie_id){

        $baseUrl = self::BASE_URL . '/api/v2/movie_suggestions.json?movie_id=' . $movie_id;
        $data = $this->getFromApi($baseUrl);
        return $data;

    }


    /**
     * 
     * getFromApi function takes $url as a parameter and returns the data in a json format 
     * this function uses Guzzle library
     * 
     */

    private function getFromApi($url){
        $client = new Client();
        $res = $client->get($url);
        if($res->getStatusCode()=='200'){
            return $res->getBody();
        }else{
            return [];
        }
        
    }
}
