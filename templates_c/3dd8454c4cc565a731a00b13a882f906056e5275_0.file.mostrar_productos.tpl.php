<?php
/* Smarty version 4.2.1, created on 2022-10-09 07:03:04
  from 'C:\xampp\htdocs\web2\tpe1_web2\templates\mostrar_productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63425608c637c4_92207403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dd8454c4cc565a731a00b13a882f906056e5275' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe1_web2\\templates\\mostrar_productos.tpl',
      1 => 1665291778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63425608c637c4_92207403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table>
    <thead>
        <tr>
            <th>Equipo</th>
            <th>Imagen</th>
            <th>Talle</th>
            <th>Precio</th>
            <th>Version</th>

        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Equipo;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Imagen;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Talle;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Precio;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->version;?>
</td>
                <td><a type="button" href="borrar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->Id;?>
">Borrar</a></td>
                <td><a type="button" href="editar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->Id;?>
">Editar</a></td>
                
            </tr>
        
    
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
    </tbody>
     
    
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
