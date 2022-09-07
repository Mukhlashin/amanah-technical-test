<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class NumeroQuatro extends Controller
{
    public function index()
    {  
        $client = new Client();
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');
        $body = $response->getBody()->getContents();
        $body_array = json_decode($body);
        // print_r($body_array);
        return view('numero-quatro', compact('body_array'));
    }
}
