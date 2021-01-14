<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class htmlforumController extends Controller
{
    function getData(request $userdatareq){
              $userdatareq->validate([
                'username'=>'required | max:10',
                'userpassword'=>'required | min: 6'
              ]);
      return $userdatareq->input();

    }
}
