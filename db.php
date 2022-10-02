<?php

function traerbd(){
    $bd = new PDO('mysql:host=localhost;'.'dbname=tpe_1;charset=utf8', 'root', '');
    return $bd;

}

function traer_productos(){
    $bd = traerbd();

    $query = $bd->prepare("SELECT * FROM producto");
    $query->execute();

    $productos = $query->fetchAll(PDO::FETCH_OBJ);

    return $productos;

}

function traer_categorias(){
    $bd = traerbd();

    $query = $bd->prepare("SELECT * FROM marca");
    $query->execute();

    $marca = $query->fetchAll(PDO::FETCH_OBJ);

    return $marca;
}

function traer_productoconcategoria(){
    $bd = traerbd();
    $query = $bd->prepare("SELECT * FROM producto, marca WHERE producto.id_marca_fk = marca.id");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_OBJ);
}