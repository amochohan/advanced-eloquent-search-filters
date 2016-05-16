<?php

Route::group(['middleware' => 'api'], function () {
    Route::post('/search', 'SearchController@filter');
});
