<?php

use Illuminate\Support\Facades\Route;

if(! function_exists('page_title')){

    function page_title($title){
        $base_title= 'Laracarte - List of artisans';
        if($title ===''){
            return $base_title;
        }
        else{
            return $title. ' | '. $base_title;
        }
    }
}

if(! function_exists('set_active_route')){

    function set_active_route($route){
        $base_title= 'Laracarte - List of artisans';
      return Route::is($route)? 'active':'';
    }
}