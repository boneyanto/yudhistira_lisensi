<?php

//Route::apiResource('lisensis', 'LisensiController');

Route::get('api_lisensis', 'LisensiApiController@index');
Route::get('api_lisensis/{id}', 'LisensiApiController@show');
Route::post('api_lisensis', 'LisensiApiController@store');
Route::put('api_lisensis/{id}', 'LisensiApiController@update');
Route::delete('api_lisensis/{id}', 'LisensiApiController@delete');

Route::group(['prefix' => 'v1', 'as' => 'admin.', 'namespace' => 'Api\V1\Admin'], function () {
    Route::apiResource('permissions', 'PermissionsApiController');

    Route::apiResource('roles', 'RolesApiController');

    Route::apiResource('users', 'UsersApiController');

    Route::apiResource('products', 'ProductsApiController');
});
