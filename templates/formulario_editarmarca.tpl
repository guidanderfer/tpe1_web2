{include file="header.tpl"}
<h1>Editar Marca</h1>

<form action="{BASE_URL}editarmarca" method="post" enctype="multipart/form-data"  class="row row-cols-lg-auto g-3 align-items-center">

    
    <input type="hidden" name="id" value={$id}>
    <div class="col-12">
        <label class="visually-hidden">Marca</label>
        <div class="input-group">
            
            <input type="text" name="marca" class="form-control" placeholder="Marca" required>
        </div>
    </div>
    <div class="col-12">
        <label for="validationTooltip07" class="visually-hidden" >Imagen</label>
        <input class="form-control" type="file" name="input_name" id="imageToUpload">
    
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
    
    
    
</form>

{include file="footer.tpl"}