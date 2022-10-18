<?php

class modelousuario{
    private function traerbd(){
        $bd = new PDO('mysql:host=localhost;'.'dbname=tpe_1;charset=utf8', 'root', '');
        return $bd;
    
    }

    function traer_usuario($email){
        $bd = $this->traerbd();
        $query = $bd->prepare("SELECT * FROM usuario WHERE Email = ?");
        $query->execute([$email]);
        $usuario = $query->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }
}