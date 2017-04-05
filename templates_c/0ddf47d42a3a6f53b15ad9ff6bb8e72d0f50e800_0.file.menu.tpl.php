<?php
/* Smarty version 3.1.30, created on 2017-04-04 17:37:18
  from "C:\wamp64\www\tli-acupuncture\views\components\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e3d9ce184fc6_08784499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ddf47d42a3a6f53b15ad9ff6bb8e72d0f50e800' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\components\\menu.tpl',
      1 => 1491327369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e3d9ce184fc6_08784499 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Authentication -->
<div id="authentication">
  <?php if (empty($_smarty_tpl->tpl_vars['userSession']->value)) {?>
      <h1>Identification</h1>
	  <form id="formConnect" name="formConnect">
		  <span class="span_error" id="spanForm"></span>
		  <input type="email" id="email" name="email" aria-label="Adresse mail" placeholder="Adresse mail" required tabindex="5" />
		  <input type="password" id="password" name="password" aria-label="Mot de passe" placeholder="Mot de passe" required tabindex="6" />
		  <input type="button" id="connect" name="connect" aria-label="ENVOYER" value="ENVOYER" class="button_my_style" tabindex="7" />
	  </form>
	  <br />
	  <a href="inscription" tabindex="8">S'enregistrer</a>
	  
	    <?php echo '<script'; ?>
 type="text/javascript" src="views/statics/js/md5.js"><?php echo '</script'; ?>
> 
		<?php echo '<script'; ?>
 type="text/javascript" src="views/statics/js/connection.js"><?php echo '</script'; ?>
>
	  
   <?php } else { ?>
      <h1>Espace Membre</h1>
	  <p>Bienvenue sur le site <?php echo $_smarty_tpl->tpl_vars['userSession']->value->getPseudonymeU();?>
 !</p>
	  <p id="disconnect" tabindex="9">Se déconnecter</p>
	  
		<?php echo '<script'; ?>
 type="text/javascript" src="views/statics/js/disconnection.js"><?php echo '</script'; ?>
>
	  
   <?php }?>
</div><?php }
}
