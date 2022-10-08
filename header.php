<!DOCTYPE html>
<html lang="en">
<head>
    <base href="'.BASE_URL.'">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

    
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            <a class="nav-link" href="#">Features</a>
                            <a class="nav-link" href="#">Pricing</a>
                            <a class="nav-link disabled">Disabled</a>
                        </div>
                    </div>
                </div>
        </nav>
   
    </header>
    <h1>Productos</h1>
    <form action="agregar" method="post">
        <label for="">Equipo</label>
        <input type="text" name="equipo">
        <label for="">Talle</label>
        <input type="text" name="talle">
        <label for="">Precio</label>
        <input type="text" name="precio">
        <label for="">Version</label>
        <input type="text" name="version">
        <label for="">Id_marca_fk</label>
        <input type="text" name="id_marca_fk">
        <button type="submit">Agregar</button>
    </form>
    <h1>Marca</h1>
    <form action="agregarmarca" method="post">
        <label for="">Marca</label>
        <input type="text" name="marca">
        <button type="submit">Agregar</button>
    </form>
    <h2>Editar Marca</h2>

    <form action="editarmarca" method="post">
        <label for="">Marca</label>
        <input type="text" name="marca">
        
        
        <button type="submit">Agregar</button>
    </form>

    


    
    

    
        
        

    

    
    
    
    
    
    
