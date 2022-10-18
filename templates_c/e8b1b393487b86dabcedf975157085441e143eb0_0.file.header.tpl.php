<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:26:31
  from 'C:\xampp\htdocs\web2\tpe1_web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dac67172264_60244703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8b1b393487b86dabcedf975157085441e143eb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe1_web2\\templates\\header.tpl',
      1 => 1666034774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dac67172264_60244703 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="'.BASE_URL.'">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>
css/estilo.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

    
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL;?>
productos">Productos</a>
                            <a class="nav-link active" href="<?php echo BASE_URL;?>
marcas">Marcas</a>
                            <a class="nav-link active" href="<?php echo BASE_URL;?>
administrador">Administrador</a>
                            <a class="nav-link active" href="<?php echo BASE_URL;?>
login">Login</a>
                            
                        </div>
                    </div>
                </div>
        </nav>
   
    </header><?php }
}
