<?php
/* Smarty version 3.1.30, created on 2017-03-24 13:19:34
  from "C:\wamp64\www\tli-acupuncture\views\content-pages\detailsSymptomes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d51ce657da98_08841467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c68e30c6b8eb6847f1e89760cbaeebec8ab47fa9' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\content-pages\\detailsSymptomes.tpl',
      1 => 1490189828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d51ce657da98_08841467 (Smarty_Internal_Template $_smarty_tpl) {
?>
		  <!-- Content -->
          <div id="content_page" role="main">
			  <section class="stripped">
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
