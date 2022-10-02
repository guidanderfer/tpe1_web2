<?php

require_once 'db.php';

function mostrar_productos(){

    $productos = traer_productos();

    echo "<ul>";
    foreach($productos as $producto){
        
        echo "<li> $producto->Equipo </li>";

        
       
    }
    echo "</ul>";
}

function mostrar_producto_especifico($nombre){
    $productos = traer_productos();

    echo "<ul>";
    foreach($productos as $producto){
        if($producto->Equipo == $nombre){
            echo "<li> $producto->Equipo </li>";

        }
          
    }
    echo "</ul>";
}

function mostrar_categorias(){
    $categorias = traer_categorias();
    echo "<ul>";
    foreach($categorias as $categoria){
        
        echo "<li> $categoria->Nombre </li>";

        
       
    }
    echo "</ul>";
}


function mostrar_categoriade_producto(){
    $categoriaproductos = traer_productoconcategoria();

    echo "<ul>";

    foreach($categoriaproductos as $categoriaproducto){
        echo "<li> $categoriaproducto->Equipo, $categoriaproducto->Nombre</li>";
    }
    echo "</ul>";

}

