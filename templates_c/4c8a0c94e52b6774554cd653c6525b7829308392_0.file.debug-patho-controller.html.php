<?php
/* Smarty version 3.1.30, created on 2017-02-17 14:19:18
  from "C:\wamp64\www\tli-acupuncture\views\content-pages\debug-patho-controller.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a706666094c8_13877528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c8a0c94e52b6774554cd653c6525b7829308392' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\content-pages\\debug-patho-controller.html',
      1 => 1487340962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a706666094c8_13877528 (Smarty_Internal_Template $_smarty_tpl) {
?>
			<!-- Content | Debug template -->
			<div id="content_page" role="main" style="float:none;width:100%;">
			  <section class="debug"> 
				  <h1>Debug Patho Controller</h1>
				  <br /> Tests Debug - Temporaire - GetAllPatho() <hr />
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
