<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Delete extends Controller
{
    function deleteFav(Request $request, $id)
    {
        DB::table('favourite')
        ->where('image_id',$id)
        ->where('user_id',$request->session()->get('CRECLUB_USER_ID'))
        ->delete();
        $request->session()->flash('msg',' Successfully Deleted Your Favourite Image');
        return redirect("/dashboard");
    }
}
