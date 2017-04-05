<?php
/* Smarty version 3.1.30, created on 2017-04-05 13:12:47
  from "C:\wamp64\www\tli-acupuncture\views\content-pages\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e4ed4f9209a4_97063569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e58497a8adc662f6b610e276adee013bb11681c' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\content-pages\\inscription.tpl',
      1 => 1491397898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e4ed4f9209a4_97063569 (Smarty_Internal_Template $_smarty_tpl) {
?>
          <!-- Content -->
          <div id="content_page" role="main">
              <h1>Inscription sur le site</h1>
              <span class="span_success" id="successInsc"></span>
              <span class="span_error" id="errorInsc"></span>
              <form action="" method="post" id="Inscription" onsubmit="return false;"> 
                  <ul>
					<li>
						<input type="text" id="identifiant_inscription" name="identifiant_inscription" aria-label="Votre identifiant" placeholder="Votre identifiant" required />
						<section class="span_error" id="id_error"></section>
					</li>
					<li>
						<input type="email" id="email_inscription" name="email_inscription" aria-label="Adresse e-mail" placeholder="Adresse e-mail" required />
						<section class="span_error" id="email_error"></section>
					</li>
					<li>
						<input type="email" id="confirm_email_inscription" name="confirm_email_inscription" aria-label="Confirmer l'adresse e-mail" placeholder="Confirmer l'adresse e-mail" required />
					</li>
					<li>
						<input type="password" id="password_inscription" name="password_inscription" aria-label="Mot de passe" placeholder="Mot de passe" required />
						<section class="span_error" id="password_error"></section>
					</li>
					<li>
						<input type="password" id="confirm_password_inscription" name="confirm_password_inscription" aria-label="Confirmer votre mot de passe" placeholder="Confirmer votre mot de passe" required />
					</li>  
					<li>
						<input type="submit" id="confirm_inscription" name="confirm_inscription" aria-label="S'enregistrer" value="S'enregistrer" class="button_my_style_blue" disabled /> 
					</li>
                  </ul>
              </form>
			  
				<?php echo '<script'; ?>
 type="text/javascript" src="views/statics/js/md5.js"><?php echo '</script'; ?>
>
				<?php echo '<script'; ?>
 type="text/javascript" src="views/statics/js/inscription.js"><?php echo '</script'; ?>
>
			  
          </div><?php }
}
