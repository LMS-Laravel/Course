<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Modules\Course\Http\Controllers\Admin'], function(){

    Route::resource('course', 'CourseController',
        ['except' => ['create', 'store', 'update', 'destroy']]
    );

});

Route::group(['prefix' => 'learning', 'namespace' => 'Modules\Course\Http\Controllers\learning'], function(){

    Route::resource('course', 'CourseController',
        ['except' => ['create', 'store', 'update', 'destroy']]
    );

});

