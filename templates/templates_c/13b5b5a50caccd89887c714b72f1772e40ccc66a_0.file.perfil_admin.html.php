<?php
/* Smarty version 3.1.28, created on 2016-05-25 23:20:51
  from "/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/perfil_admin.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57461733df5709_44912626',
  'file_dependency' => 
  array (
    '13b5b5a50caccd89887c714b72f1772e40ccc66a' => 
    array (
      0 => '/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/perfil_admin.html',
      1 => 1464211248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57461733df5709_44912626 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="navbar navbar-default bottom-none">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)">Inicio</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="javascript:void(0)">Autos</a></li>
        <li><a href="javascript:void(0)">Items</a></li>
        <li><a href="javascript:void(0)">Usuarios</a></li>
        <li><a href="javascript:void(0)">Inventario</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Opciones
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="index.php">Cerrar Sesión</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0)">Ayuda</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>	

<div class="container-fluid container-perfil">
	<div class="row">
		<div class="col-lg-12">
			
		</div>
	</div>

</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
