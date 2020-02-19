<?php

Route::group(['namespace' =>'Diako\EchoString\Http\Controllers'], function() {
    
    Route::get('/echo', 'EchoStringController@index')->name('echo');
});
