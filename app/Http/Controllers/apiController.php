<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class apiController extends Controller
{
    function fetchapiData(){
      // here we saved the data of api in collectio varilabe
       $collection=Http::get('https://reqres.in/api/users?page=1');
       // here we send the data to the view
       return view('apiDataview',['collection'=>$collection['data']]);
    }
}


  
