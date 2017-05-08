<?php
/* Smarty version 3.1.30, created on 2017-05-08 19:17:32
  from "/opt/lampp/htdocs/tli-acupuncture/views/content-pages/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5910a82c4f65c8_87090441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f70f4decc41012315d20f7727929077d66b4a4e' => 
    array (
      0 => '/opt/lampp/htdocs/tli-acupuncture/views/content-pages/home.tpl',
      1 => 1494263811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5910a82c4f65c8_87090441 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<!-- Content -->
		<div id="content_page" role="main">
			<section class="stripped">
				<h2>Flux Rss - Santé</h2>
                <?php $_smarty_tpl->_assignInScope('id', 10);
?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayRss']->value, 'arrayItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arrayItem']->value) {
?>
					<div class="rss_item" tabindex="<?php echo $_smarty_tpl->tpl_vars['id']->value++;?>
">
						<img src="views/statics/img/RSS.png" alt="Flux RSS" class="rss_icon" />
						<a href="<?php echo $_smarty_tpl->tpl_vars['arrayItem']->value->getLink();?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['arrayItem']->value->getTitle();?>
</a>
						<hr />
						<?php echo $_smarty_tpl->tpl_vars['arrayItem']->value->getDescription();?>

                    </div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</section>
		</div><?php }
}
