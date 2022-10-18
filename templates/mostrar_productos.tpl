
<h2 class="titulo">Lista de camisetas</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Equipo</th>
            <th>Detalles</th>
            {if isset($smarty.session.email)}
                <th>Borrar</th>
                <th>Editar</th>
            {/if}
            

        </tr>
    </thead>
    <tbody>
        {foreach from=$productos item=$producto }
            <tr>
                <td>{$producto->Equipo}</td>
                <td><a type="button" class="btn btn-info" href="producto/{$producto->Id}">Ver detalles</a></td>  
                {if !empty($smarty.session.email)}
                    <td><a type="button" class="btn btn-danger" href="borrarproducto/{$producto->Id}">Borrar</a></td>
                    <td><a type="button" class="btn btn-success" href="formeditarproducto/{$producto->Id}">Editar</a></td>
                {/if}
                
                
                
                
                
            </tr>
        
    
        {/foreach}  
    </tbody>
     
    
</table>
