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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', 'PizzaController@index' )->middleware('auth') ;
Route::get('/pizzas/create', 'PizzaController@create' ) ;
Route::get('/pizzas/{id}', 'PizzaController@show' ) ;
Route::post('/pizzas', 'PizzaController@store' ) ;
Route::delete('/pizzas/{id}', 'PizzaController@destroy' ) ;




//use the $id variable to query the db for a record


  //  $name = request('name');
    //$age = request('age');



//   $pizza=  [
       // 'type'=>'margerita', 
      //  'base'=>'barchaaa 7arraa!!',
     //   'price'=> 10
   // ];
// return view('pizzas' , $pizza);
Auth::routes([
  'register' => false
  
]);

Route::get('/home', 'HomeController@index')->name('home');
