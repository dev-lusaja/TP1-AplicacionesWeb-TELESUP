<?php
/* Smarty version 3.1.28, created on 2016-05-28 00:21:12
  from "/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/menu_admin.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5748c8582a1514_60341830',
  'file_dependency' => 
  array (
    'df74605705fc53b7e28347e87c5b823b9e32a520' => 
    array (
      0 => '/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/menu_admin.html',
      1 => 1464387667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5748c8582a1514_60341830 ($_smarty_tpl) {
?>
<div class="navbar navbar-default bottom-none">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="perfil.php">Inicio</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Autos
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="autos.php">Listar</a></li>
            <li class="divider"></li>
            <li><a href="registrar_auto.php">Registrar</a></li>
          </ul>
        </li>

        <li><a href="javascript:void(0)">Items</a></li>
        <li><a href="javascript:void(0)">Usuarios</a></li>
        <li><a href="javascript:void(0)">Inventario</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Opciones
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Cerrar Sesión</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0)">Ayuda</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div><?php }
}
