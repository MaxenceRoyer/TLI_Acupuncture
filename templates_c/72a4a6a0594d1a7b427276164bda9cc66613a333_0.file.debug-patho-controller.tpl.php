<?php
/* Smarty version 3.1.30, created on 2017-02-24 11:20:21
  from "C:\wamp64\www\tli-acupuncture\views\content-pages\debug-patho-controller.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b016f53922b7_34234666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72a4a6a0594d1a7b427276164bda9cc66613a333' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\content-pages\\debug-patho-controller.tpl',
      1 => 1487341598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b016f53922b7_34234666 (Smarty_Internal_Template $_smarty_tpl) {
?>
			<!-- Content | Debug template -->
			<div id="content_page" role="main" style="float:none;width:100%;">
			  <section class="debug"> 
				  <h1>Debug Patho Controller</h1>
				  <br /> Tests Debug - Temporaire - GetAllPatho(3) <hr />
				  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPatho']->value, 'patho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
?>
				  	<?php echo var_dump($_smarty_tpl->tpl_vars['patho']->value);?>

				  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			  </section>
			</div><?php }
}
