<?php
/* Smarty version 4.2.1, created on 2022-10-18 02:08:10
  from 'C:\xampp\htdocs\web2\tpe1_web2\templates\formulario_editarproducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dee6a6bee63_29569203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90607e2bab9da34383e52970a30dd4c0d2361519' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe1_web2\\templates\\formulario_editarproducto.tpl',
      1 => 1666051663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dee6a6bee63_29569203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Editar Productos</h1>

<form action="<?php echo BASE_URL;?>
editarproducto" method="post" enctype="multipart/form-data" class="row g-3 needs-validation">
    <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
        
                <option value=<?php echo $_smarty_tpl->tpl_vars['marca']->value->Id_marca;?>
><?php echo $_smarty_tpl->tpl_vars['marca']->value->Nombre;?>
</option>
        
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
