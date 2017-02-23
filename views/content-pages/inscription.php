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
				  <?php
				  	include_once("controllers/UserController.php");
                    include_once("models/User.php");
				  	$UserController = new UserController();
				  
				  	echo "Tests Debug - Temporaire - createUser() <hr />";
				 	var_dump($UserController->createUser(new User(null, "Blabla", "bla@bla.fr", md5("Blablaa"))));
				  	echo "<br />";
				  
				  	echo "Tests Debug - Temporaire - GetUserById() <hr />";
				 	var_dump($UserController->getUserById(1));
				    echo "<br />";
				  
				    echo "Tests Debug - Temporaire - GetUserByEmail() <hr />";
				 	var_dump($UserController->getUserByEmail("camille.cordier@gmail.com"));
				    echo "<br />";
				  
				  	echo "Tests Debug - Temporaire - GetUserByPseudo() <hr />";
				 	var_dump($UserController->getUserByPseudo("MaxenceR"));
				    echo "<br />";
				  
				  	echo "Tests Debug - Temporaire - IsEmailExist() <hr />";
				 	var_dump($UserController->isEmailExist("maxence.royer@live.fr"));
				    echo "<br />";
				  
				    echo "Tests Debug - Temporaire - IsPseudoExist() <hr />";
				 	var_dump($UserController->isPseudoExist("CamillC"));
				    echo "<br />";
				  
				  	echo "Tests Debug - Temporaire - updateUserPasswordById() <hr />";
				 	var_dump($UserController->updateUserPasswordById("1", "MaxenceR"));
				    echo "<br />";
				  
				    echo "Tests Debug - Temporaire - updateUserEmailById() <hr />";
				 	var_dump($UserController->updateUserEmailById("1", "max@live.fr"));
				    echo "<br />";
				  
				    echo "Tests Debug - Temporaire - deleteUserById() <hr />";
				 	var_dump($UserController->deleteUserById("rr"));
				    echo "<br />";
				  ?>
              </form>
          </div>