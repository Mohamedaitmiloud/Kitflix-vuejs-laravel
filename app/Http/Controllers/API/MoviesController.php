<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class MoviesController extends Controller
{
    public function getMovies(){

        $client = new Client();
        $res = $client->request('GET', 'https://yts.ag/api/v2/list_movies.json');
        echo $res->getStatusCode();
        // "200"
        echo $res->getBody();
        // {"type":"User"...'

    }
}
