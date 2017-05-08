<?php
	session_start(); 
	
	/**
	 * Function called to connect a user
	 *
	 * This function *connect a user* by his email and password.
	 *
	 * @return true or false, to sucess or not
	 */
	if (isset($_GET["email"]) && isset($_GET["password"])) {
		if (!empty($_GET["email"]) && !empty($_GET["password"])) {
			include_once(dirname( __FILE__ ) . "/../../controllers/UserController.php");
			
			$UserController = new UserController();
			
			$response = $UserController->connect($_GET["password"], $_GET["email"]);
			
			if ($response == true) {
				// Creation of the user session
				$_SESSION["SessionIsOpen"] = true;
				$_SESSION["User"] = $UserController->getUserByEmail($_GET["email"]);

				echo "true";
			} else {
				echo "false";
			}
		}
	}
?>
