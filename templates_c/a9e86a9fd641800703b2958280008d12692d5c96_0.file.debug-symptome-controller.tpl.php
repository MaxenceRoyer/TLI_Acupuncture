<?php
/* Smarty version 3.1.30, created on 2017-02-17 15:21:27
  from "C:\wamp64\www\tli-acupuncture\views\content-pages\debug-symptome-controller.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a714f75a7179_25655929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9e86a9fd641800703b2958280008d12692d5c96' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\content-pages\\debug-symptome-controller.tpl',
      1 => 1487336972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a714f75a7179_25655929 (Smarty_Internal_Template $_smarty_tpl) {
?>
			<!-- Content | Debug template -->
			<div id="content_page" role="main" style="float:none;width:100%;">
			  <section class="debug"> 
				  <h1>Debug Symptome Controller</h1>
				  <br /> Tests Debug - Temporaire - GetAllSymptomes(3) <hr />
				  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allSymptomesLimit3']->value, 'symptome');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['symptome']->value) {
?>
				  	<?php echo var_dump($_smarty_tpl->tpl_vars['symptome']->value);?>

				  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				  <br /> Tests Debug - Temporaire - GetSymptome(1) <hr />
				  <?php echo var_dump($_smarty_tpl->tpl_vars['symptome1']->value);?>

				  <br /> Tests Debug - Temporaire - GetSymptome(-1) <hr />
				  <?php echo var_dump($_smarty_tpl->tpl_vars['symptomeNotExist']->value);?>

			  </section>
			</div><?php }
}
