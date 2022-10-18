<?php
require_once 'modelos/marcas_modelo.php';
require_once 'vistas/marcas_vista.php';
require_once 'helpers/AuthHelper.php';


class marcascontrolador{

    private $modelo;
    private $vista;
    
    private $authhelper;

    function __construct(){
        $this->modelo = new marcasmodelo();
        $this->vista = new marcasvista();
        
        $this->authhelper = new AuthHelper();
    }

    function mostrar_categorias(){

        
        $categorias = $this->modelo->traer_marcas();
        $this->vista->mostrarheader();
        $this->vista->mostrar_marcas($categorias);
    
        
    }

    function agregar_marca(){
        $this->authhelper->chequearlogin();
        if(!empty($_POST)){
            $nombre = $_POST['marca'];

            if(!empty($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg"|| $_FILES['input_name']['type'] == "image/png" )){
                $this->modelo->insertar_marca($nombre,$_FILES['input_name']);
            }
            else{
                $this->modelo->insertar_marca($nombre, null);

            }
                
            header("Location: " . BASE_URL);
            
        }
    }

    function borrar_marca($id){
        $this->authhelper->chequearlogin();
        try{
            $this->modelo->borrar_marcaporid($id);
            header("Location: " . BASE_URL);

        }
        catch(Exception $e){
           
            $this->vista->mostrar_error("No se puede borrar esta marca, porque hay productos que la esta utilizando.");
            
            


        }
       
          
    }


    function formulario_editar_marca($id){
        $this->authhelper->chequearlogin();
        
        $this->vista->mostrar_formulario_editar_marca($id);
    }
    function editar_marca(){
        $this->authhelper->chequearlogin();
        if(!empty($_POST)){
            $nombre = $_POST['marca'];
            $id = $_POST['id'];

            if(!empty($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg"|| $_FILES['input_name']['type'] == "image/png" )){
                $this->modelo->editar_marcaporid($nombre,$_FILES['input_name'], $id);
            }
            else{
                $this->modelo->editar_marcaporid($nombre, null, $id);

            }
                
            header("Location: " . BASE_URL);
            
            
            
        }
        
    }

    
   

   
}