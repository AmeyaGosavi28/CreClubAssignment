<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class displayFav extends Controller
{
    function displayFavPost($id)
    {
        $response = Http::get('https://pixabay.com/api/?key=22527436-0158d896dc16002b34865c876&id='.$id);
        $data = $response->collect();
        return view('showPost',['data' => $data]);
    }
}
