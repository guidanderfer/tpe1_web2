<?php

class marcasmodelo{

    private function traerbd(){
        $bd = new PDO('mysql:host=localhost;'.'dbname=tpe_1;charset=utf8', 'root', '');
        return $bd;
    
    }

    function traer_marcas(){
        $bd = $this->traerbd();
    
        $query = $bd->prepare("SELECT * FROM marca");
        $query->execute();
    
        $marca = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $marca;
    }

    function insertar_marca($nombre, $imagen = null){
        $bd = $this->traerbd();
        $pathImg = null;
        if ($imagen){
            $pathImg = $this->subir_imagen($imagen);
        }
        $query = $bd->prepare("INSERT INTO marca (Nombre, Imagen_marca) VALUES (?,?)");
        $query->execute([$nombre, $pathImg]);
        return $bd->lastInsertId();
    
    
    }
    function borrar_marcaporid($id){
        $bd = $this->traerbd();
        $query = $bd->prepare("DELETE FROM marca where Id_marca = ?");
        $query->execute([$id]);
    }

    function editar_marcaporid($nombre, $imagen = null, $id){
        $bd = $this->traerbd();
        $pathImg = null;
        if ($imagen){
            $pathImg = $this->subir_imagen($imagen);
        }
        $query = $bd->prepare("UPDATE marca SET Nombre = ?, Imagen_marca = ? WHERE marca.Id_marca = ?");
        $query->execute([$nombre,$pathImg, $id]);
    }

    private function subir_imagen($imagen){
        $target = "img/" . uniqid() . "." . strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));
        move_uploaded_file($imagen['tmp_name'], $target);
        return $target;
    }
}