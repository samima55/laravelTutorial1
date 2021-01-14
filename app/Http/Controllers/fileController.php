<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileController extends Controller
{
    function upload(Request $req){
    //  return $req->file('file')->store('me');
       $path = $req->file('file')->store('Uploadedocs');
       return $path;
    }
}
