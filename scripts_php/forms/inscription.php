<?php
    session_start(); 
    if (isset($_GET["identifiant_inscription"]) && isset($_GET["email_inscription"]) && isset($_GET["password_inscription"])) {
		if (!empty($_GET["identifiant_inscription"]) && !empty($_GET["email_inscription"]) && !empty($_GET["password_inscription"])) {
			include_once("../../controllers/UserController.php");
            $UserController = new UserController();
                        
            if ($UserController->isEmailExist($_GET["email_inscription"])) {
                if ($UserController->isPseudoExist($_GET["identifiant_inscription"])) {
                    echo "emailAndPseudoAlreadyExist";
                }
                else {
                    echo "emailAlreadyExist";
                }
            } else{
                if ($UserController->isPseudoExist($_GET["identifiant_inscription"])) {
                    echo "PseudoAlreadyExist";
                } else{
                    $User = new User(NULL, $_GET["identifiant_inscription"], $_GET["email_inscription"], $_GET["password_inscription"]);
                    $UserController->createUser($User);
                    echo "userCreated";
                }
            }
		} else {
			echo false;
		}
	} else {
        echo false;
    }
?>