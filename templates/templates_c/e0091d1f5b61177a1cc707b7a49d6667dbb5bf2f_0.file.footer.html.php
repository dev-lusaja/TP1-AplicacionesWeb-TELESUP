<?php
/* Smarty version 3.1.28, created on 2016-05-26 16:47:39
  from "/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/footer.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57470c8b277654_13108717',
  'file_dependency' => 
  array (
    'e0091d1f5b61177a1cc707b7a49d6667dbb5bf2f' => 
    array (
      0 => '/Users/osanchez/Php/TP1-AplicacionesWeb-TELESUP/templates/views/footer.html',
      1 => 1464274055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57470c8b277654_13108717 ($_smarty_tpl) {
echo '<script'; ?>
 src="assets/js/vendor/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/vendor/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/vendor/material.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/vendor/ripples.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $.material.init();
  $(document).ready(function() {
    $('#table_cars').DataTable({
        "aLengthMenu": [[5, 10, 20, 30, 50, 75, -1], [5, 10, 20, 30, 50, 75, "Todos"]],
        "iDisplayLength": 5,
    	"language": {
            "url": "./config/Spanish.json"
        }
    });
  } );
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
