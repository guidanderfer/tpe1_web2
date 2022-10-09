<?php

require_once 'db.php';





function mostrar_categorias(){
    
    echo "<h1>Que desea consultar</h1>
    <ul>
        <li><a href='productos'>Mostrar todos los productos</a></li>
        <li><a href='marcas'>Mostrar Marcas</a></li>
        <li><a href='marcaproducto'>Mostrar Marca de los productos</a></li>
    </ul>";
    
    $categorias = traer_categorias();

    echo "<ul>";
    foreach($categorias as $categoria){
        
        echo "<li> $categoria->Nombre </li>";

        
       
    }
    echo "</ul>";
}


function mostrar_categoriade_producto(){
    
    echo "<h1>Que desea consultar</h1>
    <ul>
        <li><a href='productos'>Mostrar todos los productos</a></li>
        <li><a href='marcas'>Mostrar Marcas</a></li>
        <li><a href='marcaproducto'>Mostrar Marca de los productos</a></li>
    </ul>";
    $categoriaproductos = traer_productoconcategoria();

    echo "<ul>";

    foreach($categoriaproductos as $categoriaproducto){
        echo "<li> $categoriaproducto->Equipo, $categoriaproducto->Nombre</li>";
    }
    echo "</ul>";

}

function mostrar_administrador(){
    
   
    
    $productos = traer_productos();
    echo "<h1>Lista productos</h1>";
    echo "<ul>";
    foreach($productos as $producto){
        
        echo "<li> <span>$producto->Equipo</span> <a href='borrar/$producto->Id' type='button'>Borrar</a><a href='editar/$producto->Id' type='button'>Editar</a></li>";

        
       
    }
    echo "</ul>";


    $categorias = traer_categorias();

    echo "<h1>Lista Marcas</h1>";
    echo "<ul>";
    foreach($categorias as $categoria){
        
        echo "<li> <span>$categoria->Nombre</span><a href='borrarmarca/$categoria->Id' type='button'>Borrar</a><a href='editarmarca/$categoria->Id' type='button'>Editar</a> </li>";

        
       
    }
    echo "</ul>";

}



function agregar_marca(){
    if(!empty($_POST)){
        $nombre = $_POST['marca'];
        $id = insertar_marca($nombre);

        header("Location: " . BASE_URL);


    }
}
function borrar_producto($id){
    borrar_productoporid($id);
    header("Location: " . BASE_URL);
}

function borrar_marca($id){
    borrar_marcaporid($id);
    header("Location: " . BASE_URL);
}



