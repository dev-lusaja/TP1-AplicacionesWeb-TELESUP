<?php
/* Smarty version 3.1.28, created on 2016-05-26 00:46:26
  from "/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/perfil.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57462b4224c133_67593752',
  'file_dependency' => 
  array (
    'd7c8d6abbd038c188bbe7d276a04fbb4af50bca1' => 
    array (
      0 => '/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/perfil.html',
      1 => 1464216383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:menu_admin.html' => 1,
    'file:menu_venta.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57462b4224c133_67593752 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['menu_type']->value == 1) {?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu_admin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu_venta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>
<div class="container-fluid container-perfil">
	<div class="row">
		<div class="col-lg-12">
			<div class="jumbotron">
			  <h1>Hello, world!</h1>
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea dolor labore est odio, illum unde nobis in. Id omnis a, ut quibusdam velit optio repellendus, libero animi maiores sed blanditiis.</p>
			  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
