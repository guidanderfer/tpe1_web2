<?php
/* Smarty version 4.2.1, created on 2022-10-09 08:00:28
  from 'C:\xampp\htdocs\web2\tpe1_web2\templates\formularios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6342637c590620_16515739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a502496f8e72f8603edb37940bd9cdb5736b00a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe1_web2\\templates\\formularios.tpl',
      1 => 1665295222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6342637c590620_16515739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1> Agregar Productos</h1>
    
<form action="agregar" method="post">
    <label for="">Equipo</label>
    <input type="text" name="equipo">
    <label for="">Talle</label>
    <select name="talle">
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
    </select>
    
    <label for="">Precio</label>
    <input type="text" name="precio">
    <label for="">Version</label>
    <select name="version">
        <option value="Comercial">Comercial</option>
        <option value="Match">Match</option>
        
    </select>
    
    <label for="">Marca</label>
    <select name="id_marca_fk">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
        
        <option value=<?php echo $_smarty_tpl->tpl_vars['marca']->value->Id;?>
><?php echo $_smarty_tpl->tpl_vars['marca']->value->Nombre;?>
</option>
        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    
    <button type="submit">Agregar</button>
</form>

<h1>Agregar Marca</h1>
<form action="agregarmarca" method="post">
    <label for="">Marca</label>
    <input type="text" name="marca">
    <button type="submit">Agregar</button>
</form>

<h1>Lista de camisetas</h1>
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

<h1>Lista de marcas</h1>

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


    

<?php }
}
