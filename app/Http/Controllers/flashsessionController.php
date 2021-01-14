<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class flashsessionController extends Controller
{

   function addMember(Request $req){
    // return $req->input();
    $data=$req->input('user');
    $req->session()->flash('user',$data);
    return redirect('flashsession');
   }


}
