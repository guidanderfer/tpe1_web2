<?php

class marcasvista{
    function mostrar_links_publico(){
        echo "<h1>Que desea consultar</h1>
        <ul>
            <li><a href='productos'>Mostrar todos los productos</a></li>
            <li><a href='marcas'>Mostrar Marcas</a></li>
            <li><a href='marcaproducto'>Mostrar Marca de los productos</a></li>
        </ul>";

    }

    function mostrar_marcas($categorias){
        echo "<ul>";
        foreach($categorias as $categoria){
            
            echo "<li> $categoria->Nombre </li>";
    
            
           
        }
        echo "</ul>";
    }

}