{include file="header.tpl"}
{include file="links_accesopublico.tpl"}
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
{include file="footer.tpl"}