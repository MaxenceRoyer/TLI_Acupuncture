<?php
/* Smarty version 3.1.30, created on 2017-03-20 13:39:10
  from "C:\wamp64\www\tli-acupuncture\views\content-pages\pathologies.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cfdb7ee1ee37_56794359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '329a949d04feeb95313fa68fd091b5ac341e407b' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\content-pages\\pathologies.tpl',
      1 => 1490015859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cfdb7ee1ee37_56794359 (Smarty_Internal_Template $_smarty_tpl) {
?>
		  <!-- Content -->
          <div id="content_page" role="main">
			  <section class="stripped">
				  <h3>Liste des pathologies</h3>
				  <?php if (!empty($_smarty_tpl->tpl_vars['userSession']->value)) {?>
				  	<span class="span_error" id="spanSearchPathoError"></span>
				  	<input type="search" placeholder="Entrez un mot-clef" id="searchPatho" name="searchPatho">
				  	
						<?php echo '<script'; ?>
 type="text/javascript" src="views/statics/js/search-patho.js"><?php echo '</script'; ?>
>
				    
				  <?php }?>
				  <div id="containerPatho">
					  <table id="containerPathoTable">
						  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPatho']->value, 'patho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
?>
							  <tr>
								  <td class="idPatho"><?php echo $_smarty_tpl->tpl_vars['patho']->value->getIdP();?>
</td>
								  <td class="merPatho"><?php echo $_smarty_tpl->tpl_vars['patho']->value->getMer();?>
</td>
								  <td class="typePatho"><?php echo $_smarty_tpl->tpl_vars['patho']->value->getType();?>
</td>
								  <td class="descPatho"><?php echo $_smarty_tpl->tpl_vars['patho']->value->getDesc();?>
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
          </div><?php }
}
