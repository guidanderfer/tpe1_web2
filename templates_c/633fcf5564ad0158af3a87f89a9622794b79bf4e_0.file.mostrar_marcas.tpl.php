<?php
/* Smarty version 4.2.1, created on 2022-10-17 23:44:33
  from 'C:\xampp\htdocs\web2\tpe1_web2\templates\mostrar_marcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dccc19cb443_03959902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '633fcf5564ad0158af3a87f89a9622794b79bf4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe1_web2\\templates\\mostrar_marcas.tpl',
      1 => 1666043071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dccc19cb443_03959902 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="titulo">Lista de Marcas</h2>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Ver productos</th>
            <?php if (!empty($_SESSION['email'])) {?>
                <th>Borrar</th>
                <th>Editar</th>
            <?php }?>
            
            

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
                <td><a type="button" class="btn btn-info" href="marcaproducto/<?php echo $_smarty_tpl->tpl_vars['marca']->value->Id_marca;?>
">Ver productos</a></td>
                
                <?php if (!empty($_SESSION['email'])) {?>
                    <td><a type="button" class="btn btn-danger" href="borrarmarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->Id_marca;?>
">Borrar</a></td>
                    <td><a type="button" class="btn btn-success" href="formeditarmarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->Id_marca;?>
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
