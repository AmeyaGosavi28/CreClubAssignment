<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Register extends Controller
{
    function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'psw' => 'required'
        ]);
        $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' =>$request->input('psw')
        );
        DB::table('users')->insert($data);
        $request->session()->flash('msg',' Successfully Register Now You Can Login');
        return redirect("/");
    }
}
