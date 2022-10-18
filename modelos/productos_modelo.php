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
    
    function insertar_producto($equipo, $imagen = null, $talle, $precio, $version, $id_marca_fk){
        

        $bd = $this->traerbd();
        $pathImg = null;
        if ($imagen){
            $pathImg = $this->subir_imagen($imagen);
        }
        $query = $bd->prepare("INSERT INTO producto (Equipo, Imagen, Talle, Precio, version, Id_marca_fk) VALUES (?, ?, ?, ?, ?, ?)");
        $query->execute([$equipo, $pathImg, $talle, $precio, $version, $id_marca_fk]);
        return $bd->lastInsertId();
    
    }
    function borrar_productoporid($id){
        $bd = $this->traerbd();
        $query = $bd->prepare("DELETE FROM producto where Id = ?");
        $query->execute([$id]);
    
    
    }
    function traer_productoconcategoria(){
        $bd = $this->traerbd();
        $query = $bd->prepare("SELECT * FROM producto, marca WHERE producto.id_marca_fk = marca.id_marca");
        $query->execute();
    
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function editar_productoporid($equipo, $imagen = null, $talle, $precio, $version, $id_marca_fk, $id){
        $bd = $this->traerbd();
        $pathImg = null;
        if ($imagen){
            $pathImg = $this->subir_imagen($imagen);
        }
        $query = $bd->prepare("UPDATE producto SET Equipo = ?, Imagen = ?, Talle = ?, Precio = ?, version = ?, Id_marca_fk = ? WHERE producto.Id = ?");
        $query->execute([$equipo, $pathImg, $talle, $precio, $version, $id_marca_fk, $id]);
    }

    private function subir_imagen($imagen){
        $target = "img/" . uniqid() . "." . strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));
        move_uploaded_file($imagen['tmp_name'], $target);
        return $target;
    }

}