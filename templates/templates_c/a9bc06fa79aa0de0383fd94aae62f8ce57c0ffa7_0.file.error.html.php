<?php
/* Smarty version 3.1.28, created on 2016-05-25 18:43:54
  from "/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/error.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5745d64a96c0b3_28922160',
  'file_dependency' => 
  array (
    'a9bc06fa79aa0de0383fd94aae62f8ce57c0ffa7' => 
    array (
      0 => '/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/error.html',
      1 => 1464194512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5745d64a96c0b3_28922160 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="helper"></div><!-- 
 --><div class="container align-helper">
	<div class="row">
		<div class="col-lg-3"></div>
 		<div class="col-lg-6">
			<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
 		</div>
 		<div class="col-lg-3"></div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
