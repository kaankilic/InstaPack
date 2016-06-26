<?php 
Route::group(['prefix'=>'setup','as'=>'instapack::','namespace'=>'Kaankilic\InstaPack\Http\Controllers','middleware'=>'instaPack'],function(){
	Route::get("/",['as'=>'home','uses'=>'InstallerController@getHome']);
	Route::get("/connections",['as'=>'connections','uses'=>'InstallerController@getConnections']);
	Route::post("/connections",['as'=>'post.connections','uses'=>'InstallerController@postConnections']);

	Route::get("/mail",['as'=>'mail','uses'=>'InstallerController@getMail']);
	Route::post("/mail",['as'=>'post.mail','uses'=>'InstallerController@postMail']);

	Route::get("/user",['as'=>'user','uses'=>'InstallerController@getUser']);
	Route::post("/user",['as'=>'post.user','uses'=>'InstallerController@postUser']);

});
?>