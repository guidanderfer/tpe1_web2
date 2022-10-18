{include file="header.tpl"}

<h1 class="h1">{$titulo}</h1>
<form  action="verificarlogin" method="post" >
    <div class="form-floating mb-3">
        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" name="contraseña" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <div class="btnlogin" >
        <button class="btn btn-primary" type="submit">Ingresar</button>
    </div>
    
</form>


<h4>{$error}</h4>

{include file="footer.tpl"}