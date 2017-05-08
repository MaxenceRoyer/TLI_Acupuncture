<?php
/* Smarty version 3.1.30, created on 2017-05-08 20:55:39
  from "/opt/lampp/htdocs/tli-acupuncture/views/components/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5910bf2b351d09_60729595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c5aae416e238fc58b9a84a8bc81a251ff6839fa' => 
    array (
      0 => '/opt/lampp/htdocs/tli-acupuncture/views/components/menu.tpl',
      1 => 1493756922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5910bf2b351d09_60729595 (Smarty_Internal_Template $_smarty_tpl) {
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
