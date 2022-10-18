<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';

class marcasvista{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function mostrarheader(){
        $this->smarty->display('templates/header.tpl');
    }
    

    function mostrar_marcas($categorias){
        $this->smarty->assign('marcas', $categorias);
        $this->smarty->display('templates/mostrar_marcas.tpl');
        
    }

    function mostrar_formulario_editar_marca($id){
        $this->smarty->assign('id', $id);
        $this->smarty->display('templates/formulario_editarmarca.tpl');
    }

    function mostrar_error($error){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/error.tpl');
    }

    

    

}