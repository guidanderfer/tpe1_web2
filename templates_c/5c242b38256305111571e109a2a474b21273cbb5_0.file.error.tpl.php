<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:56:28
  from 'C:\xampp\htdocs\web2\tpe1_web2\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634debacce6bb6_79696586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c242b38256305111571e109a2a474b21273cbb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe1_web2\\templates\\error.tpl',
      1 => 1666050689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634debacce6bb6_79696586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
