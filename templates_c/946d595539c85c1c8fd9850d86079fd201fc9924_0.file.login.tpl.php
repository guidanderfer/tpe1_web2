<?php
/* Smarty version 4.2.1, created on 2022-10-17 23:48:49
  from 'C:\xampp\htdocs\web2\tpe1_web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dcdc1f16b58_48756479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '946d595539c85c1c8fd9850d86079fd201fc9924' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe1_web2\\templates\\login.tpl',
      1 => 1666042630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dcdc1f16b58_48756479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="h1"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<form  action="verificarlogin" method="post" >
    <div class="form-floating mb-3">
        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" name="contraseña" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <div class="btnlogin" >
        <button class="btn btn-primary" type="submit">Ingresar</button>
    </div>
    
</form>


<h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
