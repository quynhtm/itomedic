<?php

/*thông tin danh mục tin tức */
Route::get('categoryNews/view',array('as' => 'admin.categoryNews','uses' => Admin.'\CategoryNewsController@view'));
Route::get('categoryNews/edit/{id?}', array('as' => 'admin.categoryNewsEdit','uses' => Admin.'\CategoryNewsController@getItem'));
Route::post('categoryNews/edit/{id?}', array('as' => 'admin.categoryNewsEdit','uses' => Admin.'\CategoryNewsController@postItem'));
Route::post('categoryNews/deleteMenu', array('as' => 'admin.deletecategoryNews','uses' => Admin.'\CategoryNewsController@deleteMenu'));//ajax




