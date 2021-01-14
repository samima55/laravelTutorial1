<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\htmlforumController;
use App\Http\Controllers\dbcontroller;
use App\Http\Controllers\apicontroller;
use App\Http\Controllers\methodsController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\flashsessionController;
use App\Http\Controllers\fileController;
use App\Http\Controllers\peginationController;
use App\Http\Controllers\actorController;
use App\Http\Controllers\deleteActorController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
   //this is with the manual function

// Route::get('/', function () {
//    return view('index');
//
// });


Route::get('/',[PagesController::class,'index']);


   //this is the above with the controller
   // and will use this
   //note xxxx didnt work for me
     //Route::get('/', 'PagesController@index');
     //Route::get('/about', 'PagesController@about');
    // Route::get('/services', 'PagesController@services');

    //Route::get('/about', 'App\Http\Controllers\PagesController@about');


// Route::get('/about', function () {
//    return view('pages/about');
//
// });

    //fist /about is url and the second about is function name
  Route::get('/about',[PagesController::class,'about']);
  Route::get('/services',[PagesController::class,'services']);
  Route::get('/empty',[PagesController::class,'empty']);

   //dynamic route example 1


/*Route::get('/users/{id}', function ($id) {
   return 'this is the id of '.$id;

});

*/


 //dynamic route example 2

/*
 Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'this is user '.$name.' with the id of '.$id;

 });
*/







    //making groupe middleware rout for the the inner  and welcome page
     Route:: group(['middleware'=>['protectedPages']], function()
     {
       Route::view("/inner", 'inner');
       Route::view ('/welcome', 'welcome');
     });



        //making RouteMiddleware for a Routmiddleware view only

   Route::view('/rmd', 'RouteMiddleware')->middleware('protectedRoute');


//this is for forum , first we will open
//the route loign and after taking the data
// the route will go /users and dislayp the getdata method

 Route::view('/login', 'users');
Route::post('/users',[htmlforumController::class,'getData']);





 //this is rout for fetching data via query
Route::get('/getdata',[dbcontroller::class,'dbgetData']);


 //this is rout for fetching data via model
 Route::get('/kiddata',[dbcontroller::class,'kidsmodelData']);



 //this rout is for api data displaying
 Route::get('/apidata',[apiController::class,'fetchapiData']);



 //these route are for cheking htpp request methods

   //whater is the method name in our form we should use that method here
   //for example if method name is post we need to use post instead of get

route::put('/userdata',[methodsController::class,'testMethod']);
Route::view('/checkmethods', 'httpRequestMethods');





//routes for session


//if you are already login and u want to go to ls page again
// it should rredirect you to your proifle , ebause you are already
//log in , and you have not log out



Route::get('/ls', function () {
  //if user already log in
  if(session()->has('sessiondata')){
    //then take it to tits profile
    return redirect('sessionprofile');
  }
  //if not then open log in view
    return view('/loginsession');

});

//Route::view('/ls', 'loginsession');

route::post('/sessiondata',[sessionController::class,'sessionData']);
Route::view('/sessionprofile', 'sessionProfile');


//deleting data in session
//if we got logout
Route::get('/logout', function () {
  //we check is session has data
  if(session()->has('sessiondata')){
    //if have then delete it
    session()->pull('sessiondata');
  }
    return redirect('/ls');

});




// routes for flash session
   route::view('flashsession','flashsession');
   route::post('flashaddmember',[flashsessionController::class,'addMember']);




//route for uploding file

route::view('uploadfile','uploadfile');
route::post('uploadfile',[fileController::class,'upload']);



////route for localization
//route::view('locHome','localizationHome');
route::get('/locHome/{lang}', function($lang){
  App::setlocale($lang);
  return view('localizationHome');
});



///routes for peginationn
route::get('pegination',[peginationController::class,'showPegination']);



//route for saving data in database
route::view('addactor','addActor');
route::post('addactor',[actorController::class,'addActors']);


//route for deleting and updating actor form database
route::get('deleteActor',[deleteActorController::class,'listActors']);
route::get('delete/{ID}',[deleteActorController::class,'deleteAc']);
route::get('edit/{ID}',[deleteActorController::class,'editshowAc']);
route::post('edit',[deleteActorController::class,'editac']);




//route for many fucntions
Route::resource('photos', PostController::class);



  route::view('layout','layout.laytemp');
  route::view('ab','about');
  route::view('nav','inc.navbar');
