<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';
class marcasvista{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    

    function mostrar_marcas($categorias){
        $this->smarty->assign('marcas', $categorias);
        $this->smarty->display('templates/mostrar_marcas.tpl');
        
    }

}