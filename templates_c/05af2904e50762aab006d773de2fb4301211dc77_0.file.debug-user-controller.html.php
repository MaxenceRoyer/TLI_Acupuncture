<?php
/* Smarty version 3.1.30, created on 2017-02-17 13:09:40
  from "C:\wamp64\www\tli-acupuncture\views\content-pages\debug-user-controller.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a6f614b0b306_69758603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05af2904e50762aab006d773de2fb4301211dc77' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\content-pages\\debug-user-controller.html',
      1 => 1487336848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a6f614b0b306_69758603 (Smarty_Internal_Template $_smarty_tpl) {
?>
			<!-- Content | Debug template -->
			<div id="content_page" role="main" style="float:none;width:100%;">
			  <section class="debug"> 
				  <h1>Debug User Controller</h1>
				  <br /> Tests Debug - Temporaire - GetAllUsers() <hr />
				  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allUsers']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
				  	<?php echo var_dump($_smarty_tpl->tpl_vars['user']->value);?>

				  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				  <br /> Tests Debug - Temporaire - GetUserById() <hr />
				  <?php echo var_dump($_smarty_tpl->tpl_vars['userId']->value);?>

				  <br /> Tests Debug - Temporaire - GetUserByEmail() <hr />
				  <?php echo var_dump($_smarty_tpl->tpl_vars['userEmail']->value);?>

				  <br /> Tests Debug - Temporaire - GetUserByPseudo() <hr />
				  <?php echo var_dump($_smarty_tpl->tpl_vars['userPseudo']->value);?>

				  <br /> Tests Debug - Temporaire - IsEmailExist() <hr />
				  <?php echo var_dump($_smarty_tpl->tpl_vars['userEmailExist']->value);?>

				  <br /> Tests Debug - Temporaire - IsPseudoExist() <hr />
				  <?php echo var_dump($_smarty_tpl->tpl_vars['userPseudoExist']->value);?>

				  <br /> Tests Debug - Temporaire - UpdateUserPasswordById() <hr />
				  <?php echo var_dump($_smarty_tpl->tpl_vars['userPasswordUpdate']->value);?>

				  <br /> Tests Debug - Temporaire - UpdateUserEmailById() <hr />
				  <?php echo var_dump($_smarty_tpl->tpl_vars['userEmailUpdate']->value);?>

				  <br /> Tests Debug - Temporaire - DeleteUserById() <hr />
				  <?php echo var_dump($_smarty_tpl->tpl_vars['userDelete']->value);?>

			  </section>
			</div><?php }
}
