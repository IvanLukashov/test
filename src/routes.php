<?php


Route::get('/test', function(){
    return 'test success!!!';
})->name('test');

/**
 * "require": {
"illuminate/support": "5.4.*",
"laravelcollective/html":"^5.4.0",
"davejamesmiller/laravel-breadcrumbs":"*"
}
 */