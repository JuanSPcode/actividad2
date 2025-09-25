<?php 
use lib\Route;
use app\controller;
use app\controllers\HomeController;

Route::get("/", [HomeController::class,"index"]);

Route::get("/inicio",function(){
    echo "Inicio";
});

Route::get('/inicio/:flag', function($flag){
    return array("flag"=>$flag);
});

Route::get("/Home", [HomeController::class,"index"]);


Route::dispatch();
?>