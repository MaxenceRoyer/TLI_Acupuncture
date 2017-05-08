<?php
	include_once(dirname( __FILE__ ) . "/../../controllers/PathoController.php");

	$PathoController = new PathoController();

	$allPatho = $PathoController->getAllPatho("NONE");
?>