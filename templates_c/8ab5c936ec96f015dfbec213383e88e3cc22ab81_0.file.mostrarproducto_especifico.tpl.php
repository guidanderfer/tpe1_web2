<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:09:29
  from 'C:\xampp\htdocs\web2\tpe1_web2\templates\mostrarproducto_especifico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dd299c36593_28102104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ab5c936ec96f015dfbec213383e88e3cc22ab81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe1_web2\\templates\\mostrarproducto_especifico.tpl',
      1 => 1666042306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dd299c36593_28102104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['producto']->value->Id == $_smarty_tpl->tpl_vars['id']->value) {?>
        <h2 class="titulo"><?php echo $_smarty_tpl->tpl_vars['producto']->value->Equipo;?>
</h2>

        <ul class="list-group">
            <?php if ((isset($_smarty_tpl->tpl_vars['producto']->value->Imagen))) {?>
                <li class="list-group-item"><img src="<?php echo BASE_URL;
echo $_smarty_tpl->tpl_vars['producto']->value->Imagen;?>
"/></li>
            <?php }?>
            <li class="list-group-item">Talle: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Talle;?>
</li>
            <li class="list-group-item">Precio: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Precio;?>
</li>
            <li class="list-group-item">Version: <?php echo $_smarty_tpl->tpl_vars['producto']->value->version;?>
</li>
            <li class="list-group-item" >Marca : <?php echo $_smarty_tpl->tpl_vars['producto']->value->Nombre;?>
</li>
            
        </ul>
        
            
    <?php }?>
    


<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
