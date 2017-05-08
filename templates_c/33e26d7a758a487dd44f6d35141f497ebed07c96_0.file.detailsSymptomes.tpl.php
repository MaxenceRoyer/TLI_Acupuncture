<?php
/* Smarty version 3.1.30, created on 2017-05-08 19:55:24
  from "/opt/lampp/htdocs/tli-acupuncture/views/content-pages/detailsSymptomes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5910b10c5c68f6_32036455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33e26d7a758a487dd44f6d35141f497ebed07c96' => 
    array (
      0 => '/opt/lampp/htdocs/tli-acupuncture/views/content-pages/detailsSymptomes.tpl',
      1 => 1494263811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5910b10c5c68f6_32036455 (Smarty_Internal_Template $_smarty_tpl) {
?>
		  <!-- Content -->
          <div id="content_page" role="main">
			  <section class="stripped">
				  <h3>Navigation</h3>
				  <p>
					  <a href="pathologies">Revenir à la liste des pathologies</a>
				  </p>
			  </section>
			  <?php if ($_smarty_tpl->tpl_vars['PathoDetails']->value != false && $_smarty_tpl->tpl_vars['PathoSymptomes']->value != false) {?>
				  <section class="stripped">
					  <h3>Symptomes de : <i><?php echo $_smarty_tpl->tpl_vars['PathoDetails']->value->getDesc();?>
</i></h3>
					  <div id="containerPatho">
						  <table id="containerPathoTable">
							  <tr>
								  <th>Identifiant</th>
								  <th>Description</th>
							  </tr>
							  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PathoSymptomes']->value, 'symptome');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['symptome']->value) {
?>
								  <tr>
									  <td class="idPatho"><?php echo $_smarty_tpl->tpl_vars['symptome']->value->getIdS();?>
</td>
									  <td class="merPatho"><?php echo $_smarty_tpl->tpl_vars['symptome']->value->getDesc();?>
</td>
								  </tr>
							  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						  </table>
					  </div>
				  </section>
			  <?php } else { ?>
				  <section class="stripped">
					  <h3>Aucun symptome trouvé en BDD.</h3>
				  </section>
			  <?php }?>
          </div><?php }
}
