{include file="header.tpl"}
<ul class="list-group">
    {foreach from=$productos item=$producto}
        {if $producto->Id_marca_fk == $id}
            <li class="list-group-item">{$producto->Equipo}</li>
        {/if}
    {/foreach}
    
</ul>


{include file="footer.tpl"}