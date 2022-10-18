<?php
require_once 'controladores/productos_controlador.php';
require_once 'controladores/marcas_controlador.php';
require_once 'controladores/login_controlador.php';




define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'administrador'; 
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);


// tabla de ruteo
switch ($params[0]){
    case 'login':
        $controlador = new logincontrolador();
        $controlador->login();
        break;
    case 'logout':
        $controlador = new logincontrolador();
        $controlador->logout();
        break;
    case 'verificarlogin':
        $controlador = new logincontrolador();
        $controlador->verificarlogin();
        break;

    case 'productos':
        
        $controlador = new productoscontrolador();
        $controlador->mostrar_productos();
        break;
           
    case 'producto':
        $controlador = new productoscontrolador();
        $id = $params[1];
        $controlador->mostrar_producto_especifico($id);
        break;
    case 'marcas':
        $controlador = new marcascontrolador();
        $controlador->mostrar_categorias();
        break;
    case 'marcaproducto':
        $controlador = new productoscontrolador();
        $id = $params[1];
        $controlador->mostrar_productos_marca($id);
        break;        
    case 'administrador': 
        $controlador = new productoscontrolador();
        $controlador->mostrar_administrador();
        break;
    case 'agregarproducto':
        $controlador = new productoscontrolador();
        $controlador->agregar_producto(); 
        break;
    case 'agregarmarca':
        $controlador = new marcascontrolador();
        $controlador->agregar_marca();
        break;
    case 'borrarproducto':
        $controlador = new productoscontrolador();
        $id = $params[1];
        $controlador->borrar_producto($id);
        break;   
    case 'borrarmarca':
        $controlador = new marcascontrolador();
        $id = $params[1];
        $controlador->borrar_marca($id);
        break;
     
    case 'formeditarmarca':
        $controlador = new marcascontrolador();
        $id = $params[1];
        $controlador->formulario_editar_marca($id);
        break;
    case 'formeditarproducto': 
        $controlador = new productoscontrolador();
        $id = $params[1];
        $controlador->formulario_editar_producto($id);
        break;   
    case 'editarproducto':
        $controlador = new productoscontrolador();
        $controlador->editar_producto();
        break;
    case 'editarmarca':
        $controlador = new marcascontrolador();
        $controlador->editar_marca();
        break;      
    


}
