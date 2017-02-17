<?php
	include_once("controllers/UserController.php");

	$UserController = new UserController();

	$allUsers = $UserController->getAllUsers();

	$userId = $UserController->getUserById(1);
	
	$userEmail = $UserController->getUserByEmail("camille.cordier@gmail.com");

	$userPseudo = $UserController->getUserByPseudo("MaxenceR");
	
	$userEmailExist = $UserController->isEmailExist("maxence.royer@live.fr");

	$userPseudoExist = $UserController->isPseudoExist("CamillC");

	$userPasswordUpdate = $UserController->updateUserPasswordById("1", "MaxenceR");

	$userEmailUpdate = $UserController->updateUserEmailById("1", "max@live.fr");

	$userDelete = $UserController->deleteUserById("rr");
?>