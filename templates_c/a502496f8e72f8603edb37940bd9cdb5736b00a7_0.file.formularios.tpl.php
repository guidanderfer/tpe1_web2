<?php
/* Smarty version 4.2.1, created on 2022-10-18 02:07:52
  from 'C:\xampp\htdocs\web2\tpe1_web2\templates\formularios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dee58c7e6a6_92300417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a502496f8e72f8603edb37940bd9cdb5736b00a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe1_web2\\templates\\formularios.tpl',
      1 => 1666051623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:mostrar_productos.tpl' => 1,
    'file:mostrar_marcas.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dee58c7e6a6_92300417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="logout">
  <a class="btn btn-primary" role="button" href="logout">Logout</a>
</div>


<h2 class="titulo"> Agregar Productos</h2>

<form action="agregarproducto" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" >
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
    <button class="btn btn-primary" type="submit">Agregar</button>
  
    
  </div>
</form>
    


<h2 class="titulo">Agregar Marca</h2>
<form action="agregarmarca" method="post" enctype="multipart/form-data"  class="row row-cols-lg-auto g-3 align-items-center">
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
    <button type="submit" class="btn btn-primary">Agregar</button>
  </div>
</form>







<?php $_smarty_tpl->_subTemplateRender("file:mostrar_productos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:mostrar_marcas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    

<?php }
}
