<?php
require_once 'controllers/productos_controller.php';
require_once 'controllers/marcas_controller.php';
require_once 'productos.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'administrador'; 
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);


// tabla de ruteo
switch ($params[0]){
    case 'productos':
        
        $controlador = new productoscontrolador();
        $controlador->mostrar_productos();
        break;
        
           
        
    case 'producto':
        $controlador = new productoscontrolador();
        $controlador->mostrar_producto_especifico($params[1]);
        break;
    case 'marcas':
        $controlador = new marcascontrolador();
        $controlador->mostrar_categorias();
        break;
    case 'marcaproducto':
        $controlador = new productoscontrolador();
        $controlador->mostrar_marcade_producto();
        break;        
    case 'administrador':
        mostrar_administrador();
        break;
    case 'agregar':
        $controlador = new productoscontrolador();
        $controlador->agregar_producto(); 
        break;
    case 'agregarmarca':
        $controlador = new marcascontrolador();
        $controlador->agregar_marca();
        break;
    case 'borrar':
        $controlador = new productoscontrolador();
        $id = $params[1];
        $controlador->borrar_producto($id);
        break;   
    case 'borrarmarca':
        $controlador = new marcascontrolador();
        $id = $params[1];
        $controlador->borrar_marca($id);
        break;
   


}
