<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{
    function login_submit(Request $request)
    {
        $email = $request->input('email');
        $psw = $request->input('psw');
        $result = DB::table('users')
                    ->where('email',$email)
                    ->where('password',$psw)
                    ->get();
        if(isset($result[0]->user_id))
        {
            $request->session()->put('CRECLUB_USER_ID',$result[0]->user_id);
            $request->session()->put('CRECLUB_USER_Name', $result[0]->name);
            return redirect("/user/home");
        }
        else{
            $request->session()->flash('MSG','Please Enter Valid Login Details');
            return redirect('/');
        }         

    }
}
