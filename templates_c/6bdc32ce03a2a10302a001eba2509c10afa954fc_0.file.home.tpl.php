<?php
/* Smarty version 3.1.30, created on 2017-04-04 17:21:01
  from "C:\wamp64\www\tli-acupuncture\views\content-pages\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e3d5fd420d57_66481913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bdc32ce03a2a10302a001eba2509c10afa954fc' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\content-pages\\home.tpl',
      1 => 1491325970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e3d5fd420d57_66481913 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<!-- Content -->
		<div id="content_page" role="main">
			<section class="stripped">
				<h1>Flux Rss - Santé</h1>
                <?php $_smarty_tpl->_assignInScope('id', 10);
?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayRss']->value, 'arrayItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arrayItem']->value) {
?>
					<section class="rss_item" tabindex="<?php echo $_smarty_tpl->tpl_vars['id']->value++;?>
">
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
