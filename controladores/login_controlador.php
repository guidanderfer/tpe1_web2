<?php
require_once 'modelos/usuario_modelo.php';
require_once 'vistas/login_vista.php';

class logincontrolador{

    private $modelo;
    private $vista;

    function __construct(){
        $this->modelo = new modelousuario();
        $this->vista = new loginvista();
    }

    function login(){
        $this->vista->mostrar_login();
    }

    function logout(){
        session_start();
        session_destroy();
        $this->vista->mostrar_login();
    }

    function verificarlogin(){
        if(!empty($_POST['email']) && !empty($_POST['contraseña'])){
            $email = $_POST['email'];
            $contraseña = $_POST['contraseña'];
            $usuario = $this->modelo->traer_usuario($email);

            if($usuario && password_verify($contraseña, $usuario->Contraseña)){
                session_start();
                $_SESSION['email'] = $email;
                header("Location: " . BASE_URL);

            }else{
                $this->vista->mostrar_login("Acceso denegado");
            }
        }
        
    }


}