<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Edit extends Controller
{
    function editFav(Request $request, $id)
    {
        $data['result'] = DB::table('favourite')
                        ->where('image_id',$id)
                        ->where('user_id',$request->session()->get('CRECLUB_USER_ID'))
                        ->get();
        return view('editForm',$data);
    }
    function updateFav(Request $request, $id)
    {
        $request->validate([
            'description' => 'required'
        ]);
        $data = array(
            'description' => $request->input('description'),
            'user_id' => $request->session()->get('CRECLUB_USER_ID')
        );
        DB::table('favourite')->where('favid',$id)->update($data);
        $request->session()->flash('msg',' Updated Favourite List Successfully');
        return redirect("/dashboard");
    }
}
