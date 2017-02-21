<?php
	include_once("controllers/PathoController.php");

	$PathoController = new PathoController();

	$allPatho = $PathoController->getAllPatho(10);
?>