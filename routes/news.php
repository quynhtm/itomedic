<?php

/*thông tin danh mục tin tức */
Route::get('categoryNews/view',array('as' => 'admin.categoryNews','uses' => News.'\CategoryNewsController@view'));
Route::get('categoryNews/edit/{id?}', array('as' => 'admin.categoryNewsEdit','uses' => News.'\CategoryNewsController@getItem'));
Route::post('categoryNews/edit/{id?}', array('as' => 'admin.categoryNewsEdit','uses' => News.'\CategoryNewsController@postItem'));
Route::post('categoryNews/deleteCategoryNews', array('as' => 'admin.deletecategoryNews','uses' => News.'\CategoryNewsController@deleteCategoryNews'));//ajax




