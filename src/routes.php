<?php 
Route::get('/swagger/{type?}',function($type = ''){
    $controllerPath = 'Http/Controllers'.($type == '' ? '' : '/'.ucfirst($type));
    if(!is_dir(app_path($controllerPath))){
        throw new \Exception("path {$controllerPath} not exits");
    }

    $pathArr = [];

    array_push($pathArr,app_path($controllerPath));
    if(is_dir(app_path('Http/Requests'))){
        array_push($pathArr, app_path('Http/Requests'));
    }
    if(is_dir(app_path('Http/Repositories'))){
        array_push($pathArr, app_path('Http/Repositories'));
    }    

    return app('swagger')->getJson($pathArr);
});