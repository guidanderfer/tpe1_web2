<h2 class="titulo">Lista de Marcas</h2>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Ver productos</th>
            {if !empty($smarty.session.email)}
                <th>Borrar</th>
                <th>Editar</th>
            {/if}
            
            

        </tr>
    </thead>
    <tbody>
        {foreach from=$marcas item=$marca }
            <tr>
                <td>{$marca->Nombre}</td>
                <td><a type="button" class="btn btn-info" href="marcaproducto/{$marca->Id_marca}">Ver productos</a></td>
                
                {if !empty($smarty.session.email)}
                    <td><a type="button" class="btn btn-danger" href="borrarmarca/{$marca->Id_marca}">Borrar</a></td>
                    <td><a type="button" class="btn btn-success" href="formeditarmarca/{$marca->Id_marca}">Editar</a></td>
                    
                {/if}
                        
                
            </tr>
        
    
        {/foreach}  
    </tbody>
     
    
</table>


    
