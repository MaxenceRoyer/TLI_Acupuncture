<?php
	include_once(dirname( __FILE__ ) . "/../../controllers/SymptomeController.php");
	include_once(dirname( __FILE__ ) . "/../../controllers/PathoController.php");

	function getDetailsPatho($idP) {
		$PathoController = new PathoController();
		
		return ($PathoController->getPathoById($idP) != null) ? $PathoController->getPathoById($idP) : false;
	}

	function getDetailsSymptomes($idP) {
		$SymptomeController = new SymptomeController();
		
		return ($SymptomeController->getSymptomesByIdPatho($idP) != null) ? $SymptomeController->getSymptomesByIdPatho($idP) : false;
	}
?>