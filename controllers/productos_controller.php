<?php
require_once 'modelos/productos_modelo.php';
require_once 'vistas/productos_vista.php';

class productoscontrolador{

    private $modelo;
    private $vista;

    function __construct(){
        $this->modelo = new modeloproducto();
        $this->vista = new vistaproducto();

    }

    function mostrar_productos(){
        $this->vista->mostrar_links_publico();
    
        $productos = $this->modelo->traer_productos();
        
        $this->vista->mostrarproductos($productos);
    
        
    }
    function mostrar_producto_especifico($nombre){
        $productos = $this->modelo->traer_productos();

        $this->vista->mostrarproductoespecifico($productos, $nombre);
    }

    function agregar_producto(){
        if(!empty($_POST)){
            $equipo = $_POST['equipo'];
            $talle = $_POST['talle'];
            $precio = $_POST['precio'];
            $version = $_POST['version'];
            $id_marca_fk = $_POST['id_marca_fk'];
    
            $id = $this->modelo->insertar_producto($equipo, $talle, $precio, $version, $id_marca_fk);
    
            header("Location: " . BASE_URL);
    
            
        }
        
    }
    function borrar_producto($id){
        $this->modelo->borrar_productoporid($id);
        header("Location: " . BASE_URL);
    }

    function mostrar_marcade_producto(){
        $this->vista->mostrar_links_publico();
    
        $categoriaproductos = $this->modelo->traer_productoconcategoria();
    
       $this->vista->mostrarproductosmarca($categoriaproductos);
    }
}