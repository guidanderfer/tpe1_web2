<?php

class modeloproducto{
    


    private function traerbd(){
        $bd = new PDO('mysql:host=localhost;'.'dbname=tpe_1;charset=utf8', 'root', '');
        return $bd;
    
    }
    
    function traer_productos(){
        $bd = $this->traerbd();
        
    
        $query = $bd->prepare("SELECT * FROM producto");
        $query->execute();
    
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $productos;
    
    }
    
    function insertar_producto($equipo, $talle, $precio, $version, $id_marca_fk){
        $bd = $this->traerbd();
        $query = $bd->prepare("INSERT INTO producto (Equipo, Imagen, Talle, Precio, version, Id_marca_fk) VALUES (?, ?, ?, ?, ?, ?)");
        $query->execute([$equipo, NULL, $talle, $precio, $version, $id_marca_fk]);
        return $bd->lastInsertId();
    
    }
    function borrar_productoporid($id){
        $bd = $this->traerbd();
        $query = $bd->prepare("DELETE FROM producto where Id = ?");
        $query->execute([$id]);
    
    
    }
    function traer_productoconcategoria(){
        $bd = $this->traerbd();
        $query = $bd->prepare("SELECT * FROM producto, marca WHERE producto.id_marca_fk = marca.id");
        $query->execute();
    
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}