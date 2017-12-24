<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/11/27 0027
 * Time: 22:04
 */
Route::group(['middleware'=>'App\Http\Middleware\acc'],function (){
    Route::any('fo', function (){
        return 123;
    });



});

Route::group(['middleware' => 'App\Http\Middleware\acc'],function(){
    Route::namespace('Woisk\Account\Controllers')->group(function (){

        Route::any('foo', 'BaseController@index');

//        Route::get('wo', ['middleware'=>['App\Http\Middleware\acc'],'uses'=>function(){
//            return 123;
//        }]);

    });
});


