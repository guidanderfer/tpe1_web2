{include file="header.tpl"}
{include file="links_accesopublico.tpl" assign=name var1=value}
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
{include file="footer.tpl"}