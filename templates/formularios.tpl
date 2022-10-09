{include file="header.tpl" }

<h1> Agregar Productos</h1>
    
<form action="agregar" method="post">
    <label for="">Equipo</label>
    <input type="text" name="equipo">
    <label for="">Talle</label>
    <select name="talle">
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
    </select>
    
    <label for="">Precio</label>
    <input type="text" name="precio">
    <label for="">Version</label>
    <select name="version">
        <option value="Comercial">Comercial</option>
        <option value="Match">Match</option>
        
    </select>
    
    <label for="">Marca</label>
    <select name="id_marca_fk">
    {foreach from=$marcas item=$marca}
        
        <option value={$marca->Id}>{$marca->Nombre}</option>
        
    {/foreach}
    </select>
    
    <button type="submit">Agregar</button>
</form>

<h1>Agregar Marca</h1>
<form action="agregarmarca" method="post">
    <label for="">Marca</label>
    <input type="text" name="marca">
    <button type="submit">Agregar</button>
</form>

<h1>Lista de camisetas</h1>
<table>
    <thead>
        <tr>
            <th>Equipo</th>
            <th>Imagen</th>
            <th>Talle</th>
            <th>Precio</th>
            <th>Version</th>

        </tr>
    </thead>
    <tbody>
        {foreach from=$productos item=$producto }
            <tr>
                <td>{$producto->Equipo}</td>
                <td>{$producto->Imagen}</td>
                <td>{$producto->Talle}</td>
                <td>{$producto->Precio}</td>
                <td>{$producto->version}</td>
                <td><a type="button" href="borrar/{$producto->Id}">Borrar</a></td>
                <td><a type="button" href="editar/{$producto->Id}">Editar</a></td>
                
            </tr>
        
    
        {/foreach}  
    </tbody>
     
    
</table>

<h1>Lista de marcas</h1>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            

        </tr>
    </thead>
    <tbody>
        {foreach from=$marcas item=$marca }
            <tr>
                <td>{$marca->Nombre}</td>
                <td><a type="button" href="borrarmarca/{$marca->Id}">Borrar</a></td>
                <td><a type="button" href="editarmarca/{$marca->Id}">Editar</a></td>
                
            </tr>
        
    
        {/foreach}  
    </tbody>
     
    
</table>


    

