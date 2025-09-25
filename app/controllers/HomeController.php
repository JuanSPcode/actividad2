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

    public function contactoCheck(){
        // validando datos con expresiones regulares
        $nombre = $_POST['name'] ?? "no agregado";
        $tel = $_POST['telefono'] ?? "no agregado";
        $email = $_POST['email'] ?? "no agregado";
        $dui = $_POST['dui'] ?? "no agregado";
        // Procesar los datos (por ejemplo, guardarlos en una base de datos o enviarlos por correo electrónico)
        // Validar el formato del correo electrónico
        $nombrergx = "/^[a-zA-ZÀ-ÿ\s]{1,40}$/"; // Letras y espacios, pueden llevar acentos.
        $telrgx = "/^\d{4}-\d{4}$/"; //
        $emailrgx = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/"; // Formato básico de correo electrónico
        $duirgx = "/^\d{8}-\d{1}$/"; //
        if (!preg_match($nombrergx, $nombre)) {
            return $this->view("contacto", [
                "title" => "Mi Sitio - contacto,
                'error' => 'Nombre no válido. Solo se permiten letras y espacios.'"
            ]) ;
        }
        if (!preg_match($telrgx, $tel)) {

            return $this->view("contacto", [
                "title" => "Mi Sitio - contacto",
                'error' => 'Teléfono no válido. El formato correcto es ####-####.'
            ])  ;
        }
        if (!preg_match($emailrgx, $email)) {

            return $this->view("contacto", [
                "title" => "Mi Sitio - contacto",
                'error' => 'Correo electrónico no válido.'
            ]);
        }
        if (!preg_match($duirgx, $dui)) {

            return $this->view("contacto", [
                "title" => "Mi Sitio - contacto",
                'error' => 'DUI no válido. El formato correcto es ########-#.'
            ]);
        }



        return $this->view("contacto", [
            "title" => "Mi Sitio - contacto"
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

