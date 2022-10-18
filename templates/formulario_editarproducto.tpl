{include file="header.tpl"}
<h1>Editar Productos</h1>

<form action="{BASE_URL}editarproducto" method="post" enctype="multipart/form-data" class="row g-3 needs-validation">
    <input type="hidden" name="id" value={$id}>
    <div class="col-md-4 position-relative">
        <label for="validationTooltip01" class="form-label">Equipo</label>
        <input type="text" class="form-control" id="validationTooltip01" name="equipo" required>
        
    </div>
    <div class="col-md-4 position-relative">
        <label for="validationTooltip02" class="form-label">Precio</label>
        <input type="text" class="form-control" id="validationTooltip02" name="precio" required>
        
    </div>
  
  
    <div class="col-md-3 position-relative">
        <label for="validationTooltip04" class="form-label">Talle</label>
        <select class="form-select" id="validationTooltip04" name="talle" required>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
        </select>
        
    </div>
    <div class="col-md-3 position-relative">
        <label for="validationTooltip05" class="form-label">Version</label>
        <select class="form-select" id="validationTooltip05" name="version" required>
            <option value="Comercial">Comercial</option>
            <option value="Jugador">Jugador</option>
        </select>
        
    </div>
    <div class="col-md-3 position-relative">
        <label for="validationTooltip06" class="form-label">Marca</label>
        <select class="form-select" id="validationTooltip06" name="id_marca_fk" required>
            {foreach from=$marcas item=$marca}
        
                <option value={$marca->Id_marca}>{$marca->Nombre}</option>
        
            {/foreach}
        </select>
        
    </div>
    <div class="col-md-3 position-relative">
        <label for="validationTooltip07" class="form-label">Imagen</label>
        <input class="form-control" type="file" name="input_name" id="imageToUpload">
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Editar</button>
    </div>
</form>

{include file="footer.tpl"}

