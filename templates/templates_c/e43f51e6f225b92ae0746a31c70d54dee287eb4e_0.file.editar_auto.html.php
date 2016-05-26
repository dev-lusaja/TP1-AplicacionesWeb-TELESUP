<?php
/* Smarty version 3.1.28, created on 2016-05-26 22:32:27
  from "/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/editar_auto.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57475d5bc46ac6_62782500',
  'file_dependency' => 
  array (
    'e43f51e6f225b92ae0746a31c70d54dee287eb4e' => 
    array (
      0 => '/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/editar_auto.html',
      1 => 1464294746,
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
function content_57475d5bc46ac6_62782500 ($_smarty_tpl) {
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
				<form action="" method="post">
				<div class="container">
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-8 align-center">
							<img class="img-responsive" src="assets/images/<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['Imagen'];?>
" width="626px" height="382px">
						</div>
						<div class="col-lg-2"></div>
					</div>
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-4">
						  <div class="form-group">
						    	<label for="cantidad">Cantidad</label>
						    	<input required="" type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['cantidad'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="marca">Marca</label>
						    <input required="" type="text" class="form-control" id="marca" name="marca" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['marca'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="modelo">Modelo</label>
						    <input required="" type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['modelo'];?>
">
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
						    <input required="" type="text" class="form-control" id="color" name="color" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['color'];?>
">
						  </div>
						  <div class="form-group">
						    <label for="combustible">Combustible</label>
						    <input required="" type="text" class="form-control" id="combustible" name="combustible" value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0]['combustible'];?>
">
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
						    <input required="" type="file" id="exampleInputFile">
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
