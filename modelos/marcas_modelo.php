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

    function insertar_marca($nombre){
        $bd = $this->traerbd();
        $query = $bd->prepare("INSERT INTO marca (Nombre) VALUES (?)");
        $query->execute([$nombre]);
        return $bd->lastInsertId();
    
    
    }
    function borrar_marcaporid($id){
        $bd = $this->traerbd();
        $query = $bd->prepare("DELETE FROM marca where Id = ?");
        $query->execute([$id]);
    }

    function editar_marcaporid($nombre, $id){
        $bd = $this->traerbd();
        $query = $bd->prepare("UPDATE marca SET Nombre = ? WHERE marca.Id = ?");
        $query->execute([$nombre, $id]);
    }
}