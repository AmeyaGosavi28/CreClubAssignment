<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Dashboard extends Controller
{
    function list(Request $request)
    {
        $data['result'] = DB::table('favourite')
                        ->where('user_id',$request->session()->get('CRECLUB_USER_ID'))
                        ->orderBy('favid','desc')
                        ->get();
        return view('dashboard',$data);
    }
}
