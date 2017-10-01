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
//create item
Route::post('test',function(){

});
//read item
Route::get('test',function(){
	echo '<form method="POST" action="test">' ;
	echo  '<input type="submit">';
	/*
	echo  '<input type="hidden" value="csrf_token()" name="_token" ';
	echo    '</form>';*/
});
//update item

Route::put('test', function(){


} );
//delete item
Route::delete('test', function(){


} );