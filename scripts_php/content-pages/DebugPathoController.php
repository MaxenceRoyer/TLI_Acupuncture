<?php
	include_once("controllers/PathoController.php");

	$PathoController = new PathoController();

	$allPatho = $PathoController->getAllPatho("NONE");
?>