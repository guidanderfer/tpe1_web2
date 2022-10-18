<?php
/* Smarty version 4.2.1, created on 2022-10-17 23:41:23
  from 'C:\xampp\htdocs\web2\tpe1_web2\templates\mostrar_productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dcc037a8a81_67288344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dd8454c4cc565a731a00b13a882f906056e5275' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe1_web2\\templates\\mostrar_productos.tpl',
      1 => 1666042725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dcc037a8a81_67288344 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2 class="titulo">Lista de camisetas</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Equipo</th>
            <th>Detalles</th>
            <?php if ((isset($_SESSION['email']))) {?>
                <th>Borrar</th>
                <th>Editar</th>
            <?php }?>
            

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
                <td><a type="button" class="btn btn-info" href="producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->Id;?>
">Ver detalles</a></td>  
                <?php if (!empty($_SESSION['email'])) {?>
                    <td><a type="button" class="btn btn-danger" href="borrarproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->Id;?>
">Borrar</a></td>
                    <td><a type="button" class="btn btn-success" href="formeditarproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->Id;?>
">Editar</a></td>
                <?php }?>
                
                
                
                
                
            </tr>
        
    
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
    </tbody>
     
    
</table>
<?php }
}
