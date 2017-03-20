<?php
	session_start(); 

	if (isset($_SESSION["User"]) && isset($_SESSION["SessionIsOpen"]) && !empty($_SESSION["User"]) && $_SESSION["SessionIsOpen"] == true) {
		if (isset($_GET["keyword"]) && !empty($_GET["keyword"])) {

			include_once("../../controllers/SymptomeController.php");

			$SymptomeController = new SymptomeController();

			$response = $SymptomeController->getSymptomesByKeyWord($_GET["keyword"]);

			echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
		} else {
			
			include_once("../../controllers/PathoController.php");

			$PathoController = new PathoController();

			$response = $PathoController->getAllPatho("NONE");

			echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
		}
	} else {
		echo "false";
	}
?>