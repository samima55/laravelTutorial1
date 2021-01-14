<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{

   function  sessionData(Request $req){
    // return $req->input();
         $data=$req->input();
          $req->session()->put('sessiondata',$data['user']);
          //echo session('sessiondata');
            return redirect('sessionprofile');
   }

}
