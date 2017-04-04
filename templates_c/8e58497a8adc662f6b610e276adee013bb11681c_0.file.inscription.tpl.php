<?php
/* Smarty version 3.1.30, created on 2017-03-24 13:03:19
  from "C:\wamp64\www\tli-acupuncture\views\content-pages\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d5191733ab26_29344343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e58497a8adc662f6b610e276adee013bb11681c' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\content-pages\\inscription.tpl',
      1 => 1488797460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d5191733ab26_29344343 (Smarty_Internal_Template $_smarty_tpl) {
?>
          <!-- Content -->
          <div id="content_page" role="main">
              <form action="" method="post" id="Inscription"> 
                  <h1>Inscription sur le site</h1>
                  <ul>
                    <li>
                        <input type="text" id="identifiant" name="identifiant" aria-label="Votre identifiant" placeholder="Votre identifiant" required />
                    </li>
                    <li>
                        <input type="email" id="email_addr" name="email_addr" aria-label="Adresse e-mail" placeholder="Adresse e-mail" required />
                    </li>
                    <li>
                        <input type="email" id="confirm_email_addr" name="confirm_email_addr" aria-label="Confirmer l'adresse e-mail" placeholder="Confirmer l'adresse e-mail" required />
                    </li>
					<li>
                        <input type="password" id="password" name="password" aria-label="Mot de passe" placeholder="Mot de passe" required />
                    </li>
                    <li>
                        <input type="password" id="confirm_password" name="confirm_password" aria-label="Confirmer mot de passe" placeholder="Confirmer mot de passe" required />
                    </li>  
                    <li>
                        <input type="submit" id="confirm" name="confirm" aria-label="S'enregistrer" value="S'enregistrer" class="button_my_style_blue" /> 
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
