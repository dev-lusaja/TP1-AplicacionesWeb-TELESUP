<?php
/* Smarty version 3.1.28, created on 2016-05-26 19:59:20
  from "/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/autos.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57473978387535_66413842',
  'file_dependency' => 
  array (
    '89e4473bed2f8d46fe7c9aa3af2c07d86377e8f9' => 
    array (
      0 => '/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/autos.html',
      1 => 1464285548,
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
function content_57473978387535_66413842 ($_smarty_tpl) {
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
			<div class="container margin-top">
				<table id="table_cars" class="table table-hover">
					<thead>
						<th>Código</th>
						<th>Producto</th>
						<th>Cantidad</th>
						<th>Descripción</th>
						<th>Precio</th>
						<th></th>
					</thead>
					<tbody>
						<?php
$__section_x_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__section_x'] : false;
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cars']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total != 0) {
for ($__section_x_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_0_iteration <= $__section_x_0_total; $__section_x_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['cars']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['idAuto'];?>
</td>
								<td><img src="assets/images/<?php echo $_smarty_tpl->tpl_vars['cars']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['producto'];?>
" alt="$cars[x].producto" width="150px" height="100px"></td>
								<td><?php echo $_smarty_tpl->tpl_vars['cars']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cantidad'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['cars']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['descripcion'];?>
</td>
								<td>$<?php echo $_smarty_tpl->tpl_vars['cars']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['precio'];?>
</td>
								<td><a href="modificar_autos.php?id=<?php echo $_smarty_tpl->tpl_vars['cars']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['idAuto'];?>
">Modificar</a></td>
							</tr>
						<?php
}
}
if ($__section_x_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_0_saved;
}
?>					
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
