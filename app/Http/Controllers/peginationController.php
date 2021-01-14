<?php

namespace App\Http\Controllers;
 use App\Models\member;

use Illuminate\Http\Request;

class peginationController extends Controller
{
    function showPegination(){
    //  $data =member::all();
    // by this line we will see 3 data in one page
        $data=member::paginate(3);
       return view('pegination',['members'=>$data]);
    }
}
