<?php

class vistaproducto{
    function mostrar_links_publico(){
        echo "<h1>Que desea consultar</h1>
        <ul>
            <li><a href='productos'>Mostrar todos los productos</a></li>
            <li><a href='marcas'>Mostrar Marcas</a></li>
            <li><a href='marcaproducto'>Mostrar Marca de los productos</a></li>
        </ul>";

    }

    function mostrarproductos($productos){
        

        echo "<ul>";
        foreach($productos as $producto){
            
            echo "<li> $producto->Equipo </li>";
    
            
           
        }
        echo "</ul>";
    }
    function mostrarproductoespecifico($productos, $nombre){
        echo "<ul>";
        foreach($productos as $producto){
            if($producto->Equipo == $nombre){
                echo "<li> $producto->Equipo</li>";

            }
          
        }
        echo "</ul>";
    }

    function mostrarproductosmarca($categoriaproductos){
        echo "<ul>";
    
        foreach($categoriaproductos as $categoriaproducto){
            echo "<li> $categoriaproducto->Equipo, $categoriaproducto->Nombre</li>";
        }
        echo "</ul>";
    
    }

}