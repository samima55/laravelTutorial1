<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class methodsController extends Controller
{

  public function testMethod(Request $req){

      return $req->input();

  }

}
