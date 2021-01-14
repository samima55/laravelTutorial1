<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
class actorController extends Controller
{
       function addActors(Request $req){
         $actorrr = new Actor;
         $actorrr->name=$req->name;
          $actorrr->email=$req->email;
           $actorrr->address=$req->address;
             $actorrr->save();
              return  redirect('addactor');
    }
}
