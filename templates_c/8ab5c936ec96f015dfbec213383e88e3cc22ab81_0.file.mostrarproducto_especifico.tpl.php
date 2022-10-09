<?php
/* Smarty version 4.2.1, created on 2022-10-09 05:24:51
  from 'C:\xampp\htdocs\web2\tpe1_web2\templates\mostrarproducto_especifico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63423f03233404_46949648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ab5c936ec96f015dfbec213383e88e3cc22ab81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe1_web2\\templates\\mostrarproducto_especifico.tpl',
      1 => 1665285740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63423f03233404_46949648 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
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
            <?php if ($_smarty_tpl->tpl_vars['producto']->value->Equipo == $_smarty_tpl->tpl_vars['nombre']->value) {?>
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
            <?php }?>
            
        
    
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
    </tbody>
     
    
</table><?php }
}
