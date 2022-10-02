<?php
require_once 'tasks.php';

$action = 'productos'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);


// tabla de ruteo
switch ($params[0]){
    case 'productos':
        mostrar_productos();
        break;
    case 'producto':
        mostrar_producto_especifico($params[1]);
        break;
    case 'categorias':
        mostrar_categorias();
        break;
    case 'categoriaproducto':
        mostrar_categoriade_producto();
        break;        

}
