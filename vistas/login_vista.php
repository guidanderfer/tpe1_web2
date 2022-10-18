<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';

class loginvista{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function mostrar_login($error = ""){
        $this->smarty->assign('titulo', 'login');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
        
    }



    

}