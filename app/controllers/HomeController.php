<?php


namespace app\controllers;
class HomeController{


    public function index() {
        return $this->view("index", [
            "title" => "Mi Sitio - Inicio"
        ]);
    }

    public function lenguaje(){
        return $this->view("lenguaje", [
            "title" => "Mi Sitio - lenguaje"
        ]);
    }

    public function contacto(){
        return $this->view("contacto", [
            "title" => "Mi Sitio - contacot"
        ]);
    }

    public function inicio(){
        return $this->view("inicio", [
            "title" => "Mi Sitio - inicio"
        ]);
    }


    public function view($vista, $data=[]){
        //require_once("../app/views/HomeView.php");
        extract(($data));
        if(file_exists("../app/views/$vista.php")){
            ob_start();
            include "../app/views/$vista.php";
            $content = ob_get_clean();
            return $content;
        }
        else{
            echo "vista no encotrada ../app/views/$vista.php";
        }
        //return "hola desde la pagina Home";


    }

}




?>

