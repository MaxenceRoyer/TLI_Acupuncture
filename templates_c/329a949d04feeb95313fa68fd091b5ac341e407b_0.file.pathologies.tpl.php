<?php
/* Smarty version 3.1.30, created on 2017-02-17 15:14:01
  from "C:\wamp64\www\tli-acupuncture\views\content-pages\pathologies.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a7133962a471_91559203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '329a949d04feeb95313fa68fd091b5ac341e407b' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\content-pages\\pathologies.tpl',
      1 => 1487344439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a7133962a471_91559203 (Smarty_Internal_Template $_smarty_tpl) {
?>
		  <!-- Content -->
          <div id="content_page" role="main">
			  <section class="stripped">
				  <h3>Pathologies (Limitées à 10)</h3>
				  <table>
					  <tr>
						  <th>Identifiant</th>
						  <th>Méridien</th>
						  <th>Type</th>
						  <th>Description</th>
					  </tr>
					  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPatho']->value, 'patho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
?>
						  <tr>
							  <td><?php echo $_smarty_tpl->tpl_vars['patho']->value->getIdP();?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['patho']->value->getMer();?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['patho']->value->getType();?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['patho']->value->getDesc();?>
</td>
						  </tr>
					  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				  </table>
			  </section>
			  <section class="stripped">
				  <h3>Symptômes des pathologies (Limitées à 10)</h3>
				  <table>
					  <tr>
						  <th>Identifiant</th>
						  <th>Méridien</th>
						  <th>Type</th>
						  <th>Description</th>
					  </tr>
					  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPatho']->value, 'patho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
?>
						  <tr>
							  <td><?php echo $_smarty_tpl->tpl_vars['patho']->value->getIdP();?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['patho']->value->getMer();?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['patho']->value->getType();?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['patho']->value->getDesc();?>
</td>
						  </tr>
					  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				  </table>
			  </section>
          </div><?php }
}
