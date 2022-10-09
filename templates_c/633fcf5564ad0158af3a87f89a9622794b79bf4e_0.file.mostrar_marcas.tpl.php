<?php
/* Smarty version 4.2.1, created on 2022-10-09 05:56:52
  from 'C:\xampp\htdocs\web2\tpe1_web2\templates\mostrar_marcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6342468449ffd0_97955908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '633fcf5564ad0158af3a87f89a9622794b79bf4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe1_web2\\templates\\mostrar_marcas.tpl',
      1 => 1665287659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:links_accesopublico.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6342468449ffd0_97955908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:links_accesopublico.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            

        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->Nombre;?>
</td>
                <td><a type="button" href="borrarmarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->Id;?>
">Borrar</a></td>
                <td><a type="button" href="editarmarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->Id;?>
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
