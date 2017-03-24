<?php
/* Smarty version 3.1.30, created on 2017-03-24 14:50:57
  from "C:\wamp64\www\tli-acupuncture\views\content-pages\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d53251973904_22971354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bdc32ce03a2a10302a001eba2509c10afa954fc' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\content-pages\\home.tpl',
      1 => 1490367053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d53251973904_22971354 (Smarty_Internal_Template $_smarty_tpl) {
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
						<a href="<?php echo $_smarty_tpl->tpl_vars['arrayItem']->value->getLink();?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['arrayItem']->value->getTitle();?>
</a>
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
