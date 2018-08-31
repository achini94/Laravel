<?php

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

//Route::get('/', function () {
  //  return view('welcome');
//});

//route::get('abc',function(){
 //   return "welcome";
//});

//Route::get('/new', function () {
  //  return view('new');
//});

route::view('/new','new');

//route::get('new/{variable}',function($variable){
  //  return $variable;
//});

route::redirect('/old','/new',301);

