<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';

class vistaproducto{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    

    function mostrarproductos($productos){

        $this->smarty->assign('productos', $productos);

        $this->smarty->display('templates/mostrar_productos.tpl');
        

    }
    function mostrarproductoespecifico($productos, $nombre){
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('nombre', $nombre);
        $this->smarty->display('templates/mostrarproducto_especifico.tpl');

    }

    function mostrarproductosmarca($categoriaproductos){
        $this->smarty->assign('productos', $categoriaproductos);
        
        $this->smarty->display('templates/mostrar_marcaproductos.tpl');

    
    }
    function mostrarformulario($productos, $marcas){
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display('templates/formularios.tpl');

    }

}