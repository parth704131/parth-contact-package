<?php

use Illuminate\Http\Request;

Route::group(['namespace'=>'Parth\Contact\Http\Controllers'],function(){
    
    Route::get('contact','ContactUsController@index')->name('contact');
    
    Route::post('contact','ContactUsController@store');
    
});
