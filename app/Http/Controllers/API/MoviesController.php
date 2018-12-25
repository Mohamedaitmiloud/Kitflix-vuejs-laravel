<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class MoviesController extends Controller
{
    const BASE_URL = 'https://yts.ag';

    public function getMovies($quality='All',$limit=20,$query_term=0,$page=1,$minimum_rating=0,$genre='',$sort_by='date-added',$order_by='desc'){

        $baseUrl = self::BASE_URL.'/api/v2/list_movies.json';
        $parameters = '?limit=' . $limit . '&page=' . $page . '&quality=' . $quality . '&minimum_rating=' . $minimum_rating . '&query_term=' . $query_term . '&genre=' . $genre . '&sort_by=' . $sort_by . '&order_by=' . $order_by;
       $data = $this->getFromApi($baseUrl.$parameters);
      // $movies = json_decode($data);
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
