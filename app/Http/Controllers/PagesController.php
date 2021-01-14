<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $index= 'welcome to Laravel from index variable';
    //  return view('index', compact('titleIndex'));
        return view('index',['index'=>$index]);
    }


    public function about(){
       //notexx : take the all view out side
       //the folder to work
      return   view('about',);
    }

    public function services(){

      return view('services');
    }

    public function empty(){

      return view('empty', ['emp'=>'LALALA']);
    }

   //this method for the empty pages
    // public function empty(){
    // $users=['ahmet','rahsid', 'bashit'];
    //   return view('empty', ['USE'=>$users]);
    // }





}
