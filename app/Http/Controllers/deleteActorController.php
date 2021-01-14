<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
class deleteActorController extends Controller
{
     function listActors(){
       $actorslist=Actor::all();
       return view('deleteActor',['actors'=>$actorslist]);
     }

     function deleteAc($ID){
           $data=Actor::find($ID);
           $data->delete();
           return redirect('deleteActor');

     }

   function editshowAc($ID){

       $data=Actor::find($ID);
       return view ('edit', ['data'=>$data]);
   }

   function editac(Request $req){
       $data=Actor::find($req->ID);
       $data->name=$req->name;
       $data->email=$req->email;
       $data->address=$req->address;
       $data->save();
       return redirect('deleteActor');

   }



}
