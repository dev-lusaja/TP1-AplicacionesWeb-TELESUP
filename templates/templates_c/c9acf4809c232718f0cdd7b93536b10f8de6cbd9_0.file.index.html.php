<?php
/* Smarty version 3.1.28, created on 2016-05-25 22:21:22
  from "/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57460942796181_41946235',
  'file_dependency' => 
  array (
    'c9acf4809c232718f0cdd7b93536b10f8de6cbd9' => 
    array (
      0 => '/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/index.html',
      1 => 1464207681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57460942796181_41946235 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="helper"></div><!-- 
 --><div class="container align-helper">
	<div class="row">
		<div class="col-lg-3"></div>
	 	<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<form class="form-horizontal" method="post" action="login.php">
					  <fieldset>
					  	<div class="form-group banner-container">
					  		<img src="assets/icons/l2.jpg" alt="" class="banner">
					  	</div>
					    <div class="form-group">
							<label for="inputUsuario" class="col-md-2 control-label">Usuario</label>
							<div class="col-md-10">
								<input type="text" class="form-control" id="inputUsuario" name="inputUsuario" placeholder="Usuario" required="">
							</div>
					    </div>

					    <div class="form-group">
							<label for="inputClave" class="col-md-2 control-label">Contraseña</label>
							<div class="col-md-10">
								<input type="password" class="form-control" id="inputClave" name="inputClave" placeholder="Contraseña" required="">
							</div>
					    </div>
						<div class="form-group">
							<label class="col-md-2 control-label">Tipo de usuario</label>
							<div class="col-md-10">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="tipoUsuario" id="optionsAdmin" value="1" checked="">
										Administrador
									</label>
								</div>
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="tipoUsuario" id="optionsVentas" value="2">
										Ventas
									</label>
								</div>
							</div>
					    </div>

					    <div class="form-group">
					      <div class="col-md-10 col-md-offset-2">
					        <button type="reset" class="btn btn-default">Borrar</button>
					        <button type="submit" class="btn btn-primary">Ingresar</button>
					      </div>
					    </div>
					  </fieldset>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-3"></div>
	</div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
