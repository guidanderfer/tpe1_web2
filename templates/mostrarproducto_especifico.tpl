{include file="header.tpl"}
{foreach from=$productos item=$producto}
    {if $producto->Id == $id}
        <h2 class="titulo">{$producto->Equipo}</h2>

        <ul class="list-group">
            {if isset($producto->Imagen)}
                <li class="list-group-item"><img src="{BASE_URL}{$producto->Imagen}"/></li>
            {/if}
            <li class="list-group-item">Talle: {$producto->Talle}</li>
            <li class="list-group-item">Precio: {$producto->Precio}</li>
            <li class="list-group-item">Version: {$producto->version}</li>
            <li class="list-group-item" >Marca : {$producto->Nombre}</li>
            
        </ul>
        
            
    {/if}
    


{/foreach}  

{include file="footer.tpl"}