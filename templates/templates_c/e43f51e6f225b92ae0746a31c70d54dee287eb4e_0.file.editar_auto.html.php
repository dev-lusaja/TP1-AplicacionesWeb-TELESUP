<?php
/* Smarty version 3.1.28, created on 2016-05-27 23:26:52
  from "/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/editar_auto.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5748bb9ca45992_50895567',
  'file_dependency' => 
  array (
    'e43f51e6f225b92ae0746a31c70d54dee287eb4e' => 
    array (
      0 => '/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/editar_auto.html',
      1 => 1464384407,
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
function content_5748bb9ca45992_50895567 ($_smarty_tpl) {
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
			<div class="container">
				<form action="update_auto.php" method="post">
				<div class="container">
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-8 align-center">
							<img class="img-responsive" src="assets/images/<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['Imagen'];?>
" width="626px" height="382px">
						  	<?php if ($_smarty_tpl->tpl_vars['update_car']->value) {?>
							<div class="alert alert-success alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Completado!</strong> <?php echo $_smarty_tpl->tpl_vars['update_car']->value;?>

							</div>
						  	<?php }?>
						  	<?php if ($_smarty_tpl->tpl_vars['update_car_err']->value) {?>
							<div class="alert alert-danger alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Error!</strong> <?php echo $_smarty_tpl->tpl_vars['update_car_err']->value;?>

							</div>
						  	<?php }?>
						</div>
						<div class="col-lg-2"></div>
					</div>
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-4">
				    	  <input type="hidden" class="form-control" id="idAuto" name="idAuto" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['idAuto'];?>
">
						  <div class="form-group">
						    	<label for="cantidad">Cantidad</label>
						    	<input required="" type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['cantidad'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="marca">Marca</label>
							<select class="form-control" name="marca" id="marca">
							<?php
$__section_x_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__section_x'] : false;
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['combo_data']->value['marcas']) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total != 0) {
for ($__section_x_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_0_iteration <= $__section_x_0_total; $__section_x_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
								<?php if ($_smarty_tpl->tpl_vars['combo_data']->value['marcas'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['codigoMarca'] == $_smarty_tpl->tpl_vars['car']->value[0]['Marca_codigoMarca']) {?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['marcas'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['codigoMarca'];?>
" selected>
										<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['marcas'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['Descripcion'];?>

								<?php } else { ?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['marcas'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['codigoMarca'];?>
">
										<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['marcas'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['Descripcion'];?>

								<?php }?>
									</option>
							<?php
}
}
if ($__section_x_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_0_saved;
}
?>
							</select>
						  </div>
						  <div class="form-group">
						    <label for="modelo">Modelo</label>
							<select class="form-control" name="modelo" id="modelo">
							<?php
$__section_x_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__section_x'] : false;
$__section_x_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['combo_data']->value['modelos']) ? count($_loop) : max(0, (int) $_loop));
$__section_x_1_total = $__section_x_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_1_total != 0) {
for ($__section_x_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_1_iteration <= $__section_x_1_total; $__section_x_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
								<?php if ($_smarty_tpl->tpl_vars['combo_data']->value['modelos'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['CodigoModelo'] == $_smarty_tpl->tpl_vars['car']->value[0]['Modelo_CodigoModelo']) {?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['modelos'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['CodigoModelo'];?>
" selected>
										<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['modelos'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['Descripcion'];?>

								<?php } else { ?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['modelos'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['CodigoModelo'];?>
">
										<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['modelos'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['Descripcion'];?>

								<?php }?>
									</option>
							<?php
}
}
if ($__section_x_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_1_saved;
}
?>
							</select>
						  </div>
						  <div class="form-group">
						    <label for="ano_fabricacion">Año de fabricación</label>
						    <input required="" type="text" class="form-control" id="ano_fabricacion" name="ano_fabricacion" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['Ano_fabricacion'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="ano_modelo">Año de modelo</label>
						    <input required="" type="text" class="form-control" id="ano_modelo" name="ano_modelo" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['Ano_Modelo'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="n_motor">Número de motor</label>
						    <input required="" type="text" class="form-control" id="n_motor" name="n_motor" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['Numero_Motor'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="color">Color</label>
							<select class="form-control" name="color" id="color">
							<?php
$__section_x_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__section_x'] : false;
$__section_x_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['combo_data']->value['colores']) ? count($_loop) : max(0, (int) $_loop));
$__section_x_2_total = $__section_x_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_2_total != 0) {
for ($__section_x_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_2_iteration <= $__section_x_2_total; $__section_x_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
								<?php if ($_smarty_tpl->tpl_vars['combo_data']->value['colores'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['CodigoColor'] == $_smarty_tpl->tpl_vars['car']->value[0]['Color_CodigoColor']) {?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['colores'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['CodigoColor'];?>
" selected>
										<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['colores'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['Des'];?>

								<?php } else { ?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['colores'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['CodigoColor'];?>
">
										<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['colores'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['Des'];?>

								<?php }?>
									</option>
							<?php
}
}
if ($__section_x_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_2_saved;
}
?>
							</select>
						  </div>
						  <div class="form-group">
						    <label for="combustible">Combustible</label>
							<select class="form-control" name="combustible" id="combustible">
							<?php
$__section_x_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__section_x'] : false;
$__section_x_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['combo_data']->value['combustibles']) ? count($_loop) : max(0, (int) $_loop));
$__section_x_3_total = $__section_x_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_3_total != 0) {
for ($__section_x_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_3_iteration <= $__section_x_3_total; $__section_x_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
								<?php if ($_smarty_tpl->tpl_vars['combo_data']->value['combustibles'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['codCombustible'] == $_smarty_tpl->tpl_vars['car']->value[0]['Combustible_codCombustible']) {?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['combustibles'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['codCombustible'];?>
" selected>
										<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['combustibles'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['desCom'];?>

								<?php } else { ?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['combustibles'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['codCombustible'];?>
">
										<?php echo $_smarty_tpl->tpl_vars['combo_data']->value['combustibles'][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['desCom'];?>

								<?php }?>
									</option>
							<?php
}
}
if ($__section_x_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_3_saved;
}
?>
							</select>
						  </div>
						  <div class="form-group">
						    <label for="cilindros">Cilindros</label>
						    <input required="" type="text" class="form-control" id="cilindros" name="cilindros" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['Numero_Cilindros'];?>
">
						  </div>		
						</div>
						<div class="col-lg-4">
						  <div class="form-group">
						    <label for="ejes">Ejes</label>
						    <input required="" type="text" class="form-control" id="ejes" name="ejes" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['Ejes'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="asientos">Numero de asientos</label>
						    <input required="" type="text" class="form-control" id="asientos" name="asientos" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['Asientos'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="traccion">Tracción</label>
						    <input required="" type="text" class="form-control" id="traccion" name="traccion" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['Traccion'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="puertas">Número de puertas</label>
						    <input required="" type="text" class="form-control" id="puertas" name="puertas" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['Puertas'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="peso_seco">Peso seco</label>
						    <input required="" type="text" class="form-control" id="peso_seco" name="peso_seco" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['Peso_Seco'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="peso_bruto">Peso bruto</label>
						    <input required="" type="text" class="form-control" id="peso_bruto" name="peso_bruto" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['Peso_Bruto'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="transmision">Transmision</label>
						    <input required="" type="text" class="form-control" id="transmision" name="transmision" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['Transmision'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="precio">Precio</label>
						    <input required="" type="text" class="form-control" id="precio" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['precio'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputFile">Seleccionar imagen</label>
						    <input required="" type="file" id="imagen" name="imagen">
						    <p class="help-block">Example block-level help text here.</p>
						  </div>
						</div>
						<div class="col-lg-2"></div>
					</div>
					<div class="row">
						<div class="col-lg-4"></div>
						<div class="col-lg-4">
		   				    <button type="button" class="btn btn-default" onclick="history.back()">Volver</button>
						    <button type="submit" class="btn btn-primary">Gravar</button>
						</div>
						<div class="col-lg-4"></div>
					</div>
				</div>

				</form>	
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
