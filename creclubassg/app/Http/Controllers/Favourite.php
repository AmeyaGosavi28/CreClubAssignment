<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Favourite extends Controller
{
    function addFav(Request $request)
    {
        $request->validate([
            'imgurl' => 'required',
            'id' => 'required',
            'description' => 'required'
        ]);
        $data = array(
            'favimg' => $request->input('imgurl'),
            'description' => $request->input('description'),
            'image_id' =>$request->input('id'),
            'user_id' => $request->session()->get('CRECLUB_USER_ID')
        );
        DB::table('favourite')->insert($data);
        $request->session()->flash('msg',' Successfully Added In Favourite List');
        return redirect("/dashboard");
    }
}
