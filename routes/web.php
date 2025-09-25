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

Route::get("/inicio", [HomeController::class,"inicio"]);
Route::get("/lenguaje", [HomeController::class,"lenguaje"]);
Route::get("/contacto", [HomeController::class,"contacto"]);
Route::post("/contacto", [HomeController::class,"contactoCheck"]);



Route::dispatch();
?>