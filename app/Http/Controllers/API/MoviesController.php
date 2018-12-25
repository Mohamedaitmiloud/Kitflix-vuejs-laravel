<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class MoviesController extends Controller
{
    const BASE_URL = 'https://yts.ag';

    public function listMovies($page){

        $baseUrl = self::BASE_URL.'/api/v2/list_movies.json';
        $parameters = '?limit=' . $limit=24 . '&page=' . $page . '&quality=' . $quality='All' . '&minimum_rating=' .$minimum_rating=0 . '&genre=' . $genre='' . '&sort_by=' . $sort_by='year' . '&order_by=' . $order_by='desc';
       $data = $this->getFromApi($baseUrl.$parameters);
       return  $data;

    }


    public function movieDetail($movie_id,$with_images = true, $with_cast = true){
        $baseUrl = self::BASE_URL . '/api/v2/movie_details.json';
        $parameters = '?movie_id=' . $movie_id . '&with_images' . $with_images . '&with_cast=' . $with_cast;
        $data = $this->getFromApi($baseUrl.$parameters);
        return  $data;

    }

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
