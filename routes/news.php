<?php

/*thông tin danh mục tin tức */
Route::get('categoryNews/view',array('as' => 'admin.categoryNews','uses' => Admin.'\CategoryNewsController@view'));
Route::get('categoryNews/edit/{id?}', array('as' => 'admin.categoryNewsEdit','uses' => Admin.'\CategoryNewsController@getItem'));
Route::post('categoryNews/edit/{id?}', array('as' => 'admin.categoryNewsEdit','uses' => Admin.'\CategoryNewsController@postItem'));
Route::post('categoryNews/deleteMenu', array('as' => 'admin.deletecategoryNews','uses' => Admin.'\CategoryNewsController@deleteMenu'));//ajax

/*thông tin tin tức */
Route::get('news/view',array('as' => 'admin.newsView','uses' => News.'\NewsController@view'));
Route::get('news/edit/{id?}', array('as' => 'admin.newsEdit','uses' => News.'\NewsController@getItem'));
Route::post('news/edit/{id?}', array('as' => 'admin.newsEdit','uses' => News.'\NewsController@postItem'));
Route::post('news/deleteNews', array('as' => 'admin.deleteNews','uses' => News.'\NewsController@deleteNews'));//ajax




