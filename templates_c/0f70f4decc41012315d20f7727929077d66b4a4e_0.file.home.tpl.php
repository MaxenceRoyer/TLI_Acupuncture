<?php
/* Smarty version 3.1.30, created on 2017-05-02 22:38:12
  from "/opt/lampp/htdocs/tli-acupuncture/views/content-pages/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5908ee34309275_81301759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f70f4decc41012315d20f7727929077d66b4a4e' => 
    array (
      0 => '/opt/lampp/htdocs/tli-acupuncture/views/content-pages/home.tpl',
      1 => 1493756922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5908ee34309275_81301759 (Smarty_Internal_Template $_smarty_tpl) {
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
