<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';

class vistaproducto{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function mostrarheader(){
        $this->smarty->display('templates/header.tpl');
    }
    
    

    function mostrarproductos($productos){

        $this->smarty->assign('productos', $productos);

        $this->smarty->display('templates/mostrar_productos.tpl');
        

    }
    function mostrarproductoespecifico($productos, $id){
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('id', $id);
        $this->smarty->display('templates/mostrarproducto_especifico.tpl');

    }

    function mostrarproductosmarca($categoriaproductos, $id){
        $this->smarty->assign('productos', $categoriaproductos);
        $this->smarty->assign('id', $id);
        $this->smarty->display('templates/mostrar_marcaproductos.tpl');

    
    }
    function mostrarformulario($productos, $marcas){
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display('templates/formularios.tpl');

    }

    function mostrar_formulario_editar_producto($id, $marcas){
        $this->smarty->assign('id', $id);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display('templates/formulario_editarproducto.tpl');
    }
    

}