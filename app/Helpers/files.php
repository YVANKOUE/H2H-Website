<?php

use Illuminate\Support\Facades\App;

    if (!function_exists('root_path')) {
        function root_path(){
            return App::environment('production') ? 'files' : 'storage';
        }
    }

    if (!function_exists('upload_file')) {
        function upload_file(string $prefix, $image = null, string $path, $column){
            $imageName = $prefix . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/' . $path, $imageName);
            $column = $imageName;
        }
    }
?>