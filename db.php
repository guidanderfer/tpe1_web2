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

function insertar_producto($equipo, $talle, $precio, $version, $id_marca_fk){
    $bd = traerbd();
    $query = $bd->prepare("INSERT INTO producto (Equipo, Imagen, Talle, Precio, version, Id_marca_fk) VALUES (?, ?, ?, ?, ?, ?)");
    $query->execute([$equipo, NULL, $talle, $precio, $version, $id_marca_fk]);
    return $bd->lastInsertId();

}

function insertar_marca($nombre){
    $bd = traerbd();
    $query = $bd->prepare("INSERT INTO marca (Nombre) VALUES (?)");
    $query->execute([$nombre]);
    return $bd->lastInsertId();


}

function borrar_productoporid($id){
    $bd = traerbd();
    $query = $bd->prepare("DELETE FROM producto where Id = ?");
    $query->execute([$id]);


}

function borrar_marcaporid($id){
    $bd = traerbd();
    $query = $bd->prepare("DELETE FROM marca where Id = ?");
    $query->execute([$id]);
}

