<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kid;
class dbcontroller extends Controller
{

       // this is the from databse and then accesing through
       //the query 
      function dbgetData(){
        return DB::select('select * from student');
      }


        // this is with the model kid
       function kidsmodelData(){
         return Kid::all();
       }


}
