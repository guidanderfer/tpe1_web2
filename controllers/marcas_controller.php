<?php
require_once 'modelos/marcas_modelo.php';
require_once 'vistas/marcas_vista.php';

class marcascontrolador{

    private $modelo;
    private $vista;

    function __construct(){
        $this->modelo = new marcasmodelo();
        $this->vista = new marcasvista();
    }

    function mostrar_categorias(){
    
        
        
        $categorias = $this->modelo->traer_marcas();

        $this->vista->mostrar_marcas($categorias);
    
        
    }

    function agregar_marca(){
        if(!empty($_POST)){
            $nombre = $_POST['marca'];
            $id = $this->modelo->insertar_marca($nombre);
    
            header("Location: " . BASE_URL);
    
    
        }
    }
    function borrar_marca($id){
        $this->modelo->borrar_marcaporid($id);
        header("Location: " . BASE_URL);
    }

   
}