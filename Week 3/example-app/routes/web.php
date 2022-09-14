<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
/*

use App\Http\Controllers\SiteController;
use App\Http\Controllers\DemoController;

use App\Http\Controllers\MyController;

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');
});

route::get('/hello', function(){
    return "hello WORLD";
});

route::get('/name', function(){
    return "My name is Deboraj roy";
});



Route::get('/',function(){
    return view('HomePage');
});

Route::get('/about', function(){
    return view('AboutPage');
});
Route::get('/contact', function(){
return view('ContactPage');

});




Route::get('/', 'SiteController@Home');

Route::get('/About', 'SiteController@About');

Route::get('/Contact', 'SiteController@Contact');

Route::post('/About', SiteController::class, 'About');


Route::get('/', [SiteController::class,'Home'])->name('Home');
Route::get('/About', [SiteController::class,'About'])->name('About');
Route::get('/Contact', [SiteController::class,'Contact'])->name('Contact');
 

Route::get('/Name/{namevalue}', [DemoController::class,'MyName'])->name('Name');
 

Route::get('/Name/{firstName}/{middelName}/{lastName}', [DemoController::class,'MyName'])->name('Name');
 

Route::group(['prefix'=>'account'], function(){

    
Route::get('/Profile', function(){
return "Profile";
});

Route::get('/login',function(){
    return "login";
});

Route::get('/logout', function(){
   
    return "logout";

});

Route::get('/signup', function(){
    return "signup";

});
 
Route::get('/updateprofile', function(){
    return "updateprofile";

});


});

Route::get('/', 'MyController');

Route::get('/', [MyController::class,''])->name('Home');

*/


Route::get('/', [HomeController::class,'ShowHome'])->name('Home');



