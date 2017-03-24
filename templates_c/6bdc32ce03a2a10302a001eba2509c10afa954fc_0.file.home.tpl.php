<?php
/* Smarty version 3.1.30, created on 2017-03-24 13:03:08
  from "C:\wamp64\www\tli-acupuncture\views\content-pages\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d5190c299539_56509877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bdc32ce03a2a10302a001eba2509c10afa954fc' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\content-pages\\home.tpl',
      1 => 1490020223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d5190c299539_56509877 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<!-- Content -->
		<div id="content_page" role="main">
			<section class="stripped">
				<h1>Flux Rss - Santé</h1>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayRss']->value, 'arrayItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arrayItem']->value) {
?>
					<section class="rss_item">
						<img src="views/statics/img/RSS.png" class="rss_icon" />
						<b><?php echo $_smarty_tpl->tpl_vars['arrayItem']->value->getTitle();?>
</b>
						<hr />
						<?php echo $_smarty_tpl->tpl_vars['arrayItem']->value->getDescription();?>

					</section>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</section>
		</div><?php }
}
