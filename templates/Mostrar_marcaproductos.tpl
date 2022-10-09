{include file="header.tpl"}
{include file="links_accesopublico.tpl"}
<table>
    <thead>
        <tr>
            <th>Equipo</th>
            <th>Marca</th>
            

        </tr>
    </thead>
    <tbody>
        {foreach from=$productos item=$producto }
            <tr>
                <td>{$producto->Equipo}</td>
                <td>{$producto->Nombre}</td>
                
            </tr>
        
    
        {/foreach}  
    </tbody>
     
    
</table>

{include file="footer.tpl"}