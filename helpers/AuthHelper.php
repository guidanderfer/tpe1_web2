<?php

class AuthHelper{
    function __construct(){
        
    }
    function chequearlogin(){
        session_start();
        if(!isset($_SESSION['email'])){
            header("Location: " . BASE_URL."login");
        }
    }
    function logout(){
        
    }
}