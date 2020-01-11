<?php

Route::group(['namespace' => 'JeevanCandy\LaravelStatsBar\Http\Controllers', 'middleware' => ['web']], function(){
	Route::get('contact', 'LaravelStatsBarController@index');
	Route::post('contact', 'LaravelStatsBarController@sendMail')->name('contact');
});

?>