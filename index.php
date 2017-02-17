<?php 
	// Include smarty
	require("libs-smarty/smarty.class.php");

    $smarty = new Smarty();

	echo file_get_contents("views/components/header.php"); 
	echo file_get_contents("views/components/nav.php"); 

	if (!strpos($_SERVER['REQUEST_URI'], '?debug-user-controller') && !strpos($_SERVER['REQUEST_URI'], '?debug-symptome-controller')) {
		echo file_get_contents("views/components/menu.php"); 
	}

	// To include the content page thanks to the URL called
	if (strpos($_SERVER['REQUEST_URI'], '?inscription')) { // Registering
		$smarty->display("views/content-pages/inscription.html");
	} else if (strpos($_SERVER['REQUEST_URI'], '?index')) { // Index
		$smarty->display("views/content-pages/home.html");
	} else if (strpos($_SERVER['REQUEST_URI'], '?informations')) { // Informations
		$smarty->display("views/content-pages/informations.html"); 
	} else if (strpos($_SERVER['REQUEST_URI'], '?debug-user-controller')) { // Debug-user-controller
		include_once("scripts_php/content-pages/DebugUserController.php");
		$smarty->assign(array(
			'allUsers' => $allUsers,
			'userId' => $userId,
			'userPseudo' => $userPseudo,
			'userEmail' => $userEmail,
			'userEmailExist' => $userEmailExist,
			'userPseudoExist' => $userPseudoExist,
			'userPasswordUpdate' => $userPasswordUpdate,
			'userEmailUpdate' => $userEmailUpdate,
			'userDelete' => $userDelete
		));
		$smarty->display("views/content-pages/debug-user-controller.html");
	} else if (strpos($_SERVER['REQUEST_URI'], '?debug-symptome-controller')) { // Debug-symptome-controller
		include_once("scripts_php/content-pages/DebugSymptomeController.php");
		$smarty->assign(array(
			'allSymptomesLimit3' => $allSymptomesLimit3,
			'symptome1' => $symptome1,
			'symptomeNotExist' => $symptomeNotExist
		));
		$smarty->display("views/content-pages/debug-symptome-controller.html");
	} else { // Default
		$smarty->display("views/content-pages/home.html");
	} 

	echo file_get_contents("views/components/footer.php"); 
?>