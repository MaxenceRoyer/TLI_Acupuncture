<?php
	include_once(dirname( __FILE__ ) . "/../../controllers/SymptomeController.php");
	include_once(dirname( __FILE__ ) . "/../../controllers/PathoController.php");

	/**
	 * Function called to recover all pathologie details
	 *
	 * This function *recover all pathologie details* existing in database.
	 *
	 * @param string $idP, the patho id
	 *
	 * @return a patho
	 */
	function getDetailsPatho($idP) {
		$PathoController = new PathoController();
		
		return ($PathoController->getPathoById($idP) != null) ? $PathoController->getPathoById($idP) : false;
	}

	/**
	 * Function called to recover all symptomes details
	 *
	 * This function *recover all symptomes details* existing in database.
	 *
	 * @param string $idS, the symptome id
	 *
	 * @return a symptome
	 */
	function getDetailsSymptomes($idP) {
		$SymptomeController = new SymptomeController();
		
		return ($SymptomeController->getSymptomesByIdPatho($idP) != null) ? $SymptomeController->getSymptomesByIdPatho($idP) : false;
	}
?>
