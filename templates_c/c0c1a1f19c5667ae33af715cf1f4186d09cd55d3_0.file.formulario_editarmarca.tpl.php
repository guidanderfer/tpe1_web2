<?php
/* Smarty version 4.2.1, created on 2022-10-18 02:00:28
  from 'C:\xampp\htdocs\web2\tpe1_web2\templates\formulario_editarmarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dec9c262164_18449751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0c1a1f19c5667ae33af715cf1f4186d09cd55d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe1_web2\\templates\\formulario_editarmarca.tpl',
      1 => 1666049527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dec9c262164_18449751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Editar Marca</h1>

<form action="<?php echo BASE_URL;?>
editarmarca" method="post" enctype="multipart/form-data"  class="row row-cols-lg-auto g-3 align-items-center">

    
    <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
>
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
