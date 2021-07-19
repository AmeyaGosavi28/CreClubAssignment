<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class Home extends Controller
{
    public function getAllPost()
    {
        $response = Http::get('https://pixabay.com/api/?key=22527436-0158d896dc16002b34865c876');
        $data = $response->collect();
        return view('home',['data' => $data]);
    }
    public function getPostById($id)
    {
        $response = Http::get('https://pixabay.com/api/?key=22527436-0158d896dc16002b34865c876&id='.$id);
        $data = $response->collect();
        return view('specificImg',['data' => $data]);
    }
}
