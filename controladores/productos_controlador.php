<?php
require_once 'modelos/productos_modelo.php';
require_once 'vistas/productos_vista.php';
require_once 'modelos/marcas_modelo.php';
require_once 'helpers/AuthHelper.php';

class productoscontrolador{

    private $modelo;
    private $vista;
    private $modelomarca;
    private $authhelper;

    function __construct(){
        $this->modelo = new modeloproducto();
        $this->vista = new vistaproducto();
        $this->modelomarca = new marcasmodelo();
        $this->authhelper = new AuthHelper();

    }

    function mostrar_productos(){
        
        $productos = $this->modelo->traer_productos();
        $this->vista->mostrarheader();
        $this->vista->mostrarproductos($productos);
    
        
    }
    function mostrar_producto_especifico($id){
        $productos = $this->modelo->traer_productoconcategoria();
        

        $this->vista->mostrarproductoespecifico($productos, $id);
    }

    function agregar_producto(){
        $this->authhelper->chequearlogin();
        if(!empty($_POST)){
            $equipo = $_POST['equipo'];
            $talle = $_POST['talle'];
            $precio = $_POST['precio'];
            $version = $_POST['version'];
            $id_marca_fk = $_POST['id_marca_fk'];
            if(!empty($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg"|| $_FILES['input_name']['type'] == "image/png" )){
                $this->modelo->insertar_producto($equipo,  $_FILES['input_name'], $talle, $precio, $version, $id_marca_fk);
            }
            
            else{
                $this->modelo->insertar_producto($equipo, null, $talle, $precio, $version, $id_marca_fk);

            }
                
            header("Location: " . BASE_URL);
    
            
        }
        
    }
    function borrar_producto($id){
        $this->authhelper->chequearlogin();
        $this->modelo->borrar_productoporid($id);
        header("Location: " . BASE_URL);
    }

    function mostrar_productos_marca($id){
        $categoriaproductos = $this->modelo->traer_productoconcategoria();
    
        $this->vista->mostrarproductosmarca($categoriaproductos, $id);
    }

    function mostrar_administrador(){
        $this->authhelper->chequearlogin();
        $productos = $this->modelo->traer_productos();
        $marcas = $this->modelomarca->traer_marcas();
        
        $this->vista->mostrarformulario($productos,$marcas);
        
    }

    function formulario_editar_producto($id){
        $this->authhelper->chequearlogin();
        $marcas = $this->modelomarca->traer_marcas();
        $this->vista->mostrar_formulario_editar_producto($id, $marcas);
    }

    function editar_producto(){
        $this->authhelper->chequearlogin();
        if(!empty($_POST)){
            $equipo = $_POST['equipo'];
            $talle = $_POST['talle'];
            $precio = $_POST['precio'];
            $version = $_POST['version'];
            $id_marca_fk = $_POST['id_marca_fk'];
            $id = $_POST['id'];

            if(!empty($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg"|| $_FILES['input_name']['type'] == "image/png" )){
                $this->modelo->editar_productoporid($equipo,  $_FILES['input_name'], $talle, $precio, $version, $id_marca_fk, $id);
            }
            else{
                $this->modelo->editar_productoporid($equipo, null, $talle, $precio, $version, $id_marca_fk, $id);

            }
                
            header("Location: " . BASE_URL);
    
    
            
        }
        
    }

    
}