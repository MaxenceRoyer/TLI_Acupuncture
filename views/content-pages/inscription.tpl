          <!-- Content -->
          <div id="content_page" role="main">
              <h1>Inscription sur le site</h1>
              <span class="span_success" id="successInsc"></span>
              <span class="span_error" id="errorInsc"></span>
              <form action="" method="post" id="Inscription" onsubmit="checkUserDispoOrCreateUser(this)"> 
                  <ul>
                    <li>
                        <input type="text" id="identifiant_inscription" name="identifiant_inscription" aria-label="Votre identifiant" placeholder="Votre identifiant" required />
                    </li>
                    <li>
                        <input type="email" id="email_inscription" name="email_inscription" aria-label="Adresse e-mail" placeholder="Adresse e-mail" required />
                    </li>
                    <li>
                        <input type="email" id="confirm_email_inscription" name="confirm_email_inscription" aria-label="Confirmer l'adresse e-mail" placeholder="Confirmer l'adresse e-mail" required />
                    </li>
					<li>
                        <input type="password" id="password_inscription" name="password_inscription" aria-label="Mot de passe" placeholder="Mot de passe" required />
                    </li>
                    <li>
                        <input type="password" id="confirm_password_inscription" name="confirm_password_inscription" aria-label="Confirmer votre mot de passe" placeholder="Confirmer votre mot de passe" required />
                    </li>  
                    <li>
                        <input type="submit" id="confirm_inscription" name="confirm_inscription" aria-label="S'enregistrer" value="S'enregistrer" class="button_my_style_blue" /> 
                    </li>
                  </ul>
              </form>
			  {literal}
				<script type="text/javascript" src="views/statics/js/md5.js"></script>
				<script type="text/javascript" src="views/statics/js/inscription.js"></script>
			  {/literal}
          </div>