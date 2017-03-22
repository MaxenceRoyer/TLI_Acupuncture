<?php 
	include_once("models/User.php");

	session_start();

	// Include smarty
	include_once("libs-smarty/smarty.class.php");

    $smarty = new Smarty();

	$smarty->display("views/components/header.tpl");
	$smarty->display("views/components/nav.tpl");

	if (!strpos($_SERVER['REQUEST_URI'], 'debug-user-controller') && !strpos($_SERVER['REQUEST_URI'], 'debug-symptome-controller') && !strpos($_SERVER['REQUEST_URI'], 'debug-patho-controller')) {
		if (isset($_SESSION["User"]) && isset($_SESSION["SessionIsOpen"])) {
			if (!empty($_SESSION["User"]) && $_SESSION["SessionIsOpen"] == true) {
				$smarty->assign(array(
					'userSession' => $_SESSION["User"]
				));
			}
		}
		$smarty->display("views/components/menu.tpl");
	}

	// To include the content page thanks to the URL called
	if (strpos($_SERVER['REQUEST_URI'], 'inscription')) { // Registering
		$smarty->display("views/content-pages/inscription.tpl");
	} else if (strpos($_SERVER['REQUEST_URI'], 'index')) { // Index
		include_once("scripts_php/content-pages/FluxRss.php");
		$smarty->assign(array(
			'arrayRss' => $arrayRss
		));
		$smarty->display("views/content-pages/home.tpl");
	} else if (strpos($_SERVER['REQUEST_URI'], 'pathologies')) { // Pathologies
		include_once("scripts_php/content-pages/DebugPathoController.php");
		$smarty->assign(array(
			'allPatho' => $allPatho
		));
		$smarty->display("views/content-pages/pathologies.tpl");
	} else if (strpos($_SERVER['REQUEST_URI'], 'pathodetails')) { // Pathologies
		echo $_GET["id"];
		/**include_once("scripts_php/content-pages/PathoController.php?id=");
		$smarty->assign(array(
			'PathoDetails' => $PathoDetails
		));
		$smarty->display("views/content-pages/pathodetails.tpl");*/
	} else if (strpos($_SERVER['REQUEST_URI'], 'informations')) { // Informations
		$smarty->display("views/content-pages/informations.tpl"); 
	} else if (strpos($_SERVER['REQUEST_URI'], 'debug-user-controller')) { // Debug-user-controller
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
		$smarty->display("views/content-pages/debug-user-controller.tpl");
	} else if (strpos($_SERVER['REQUEST_URI'], 'debug-symptome-controller')) { // Debug-symptome-controller
		include_once("scripts_php/content-pages/DebugSymptomeController.php");
		$smarty->assign(array(
			'allSymptomesLimit3' => $allSymptomesLimit3,
			'symptome1' => $symptome1,
			'symptomeNotExist' => $symptomeNotExist
		));
		$smarty->display("views/content-pages/debug-symptome-controller.tpl");
	} else if (strpos($_SERVER['REQUEST_URI'], 'debug-patho-controller')) { // Debug-patho-controller
		include_once("scripts_php/content-pages/DebugPathoController.php");
		$smarty->assign(array(
			'allPatho' => $allPatho
		));
		$smarty->display("views/content-pages/debug-patho-controller.tpl");
	} else if (strpos($_SERVER['REQUEST_URI'], 'debug-symptpatho-controller')) { // Debug-user-controller
		include_once("scripts_php/content-pages/DebugSymptPathoController.php");
		$smarty->assign(array(
			'allSymptPathos' => $allSymptPathos,
			'symptpathoIdS' => $symptpathoIdS,
			'symptpathoIdP' => $symptpathoIdP,
			'symptpathoAggr' => $symptpathoAggr,
			'userPasswordUpdate' => $userPasswordUpdate,
			'userEmailUpdate' => $userEmailUpdate,
			'symptpathoDelete' => $symptpathoDelete
		));
		$smarty->display("views/content-pages/debug-user-controller.tpl");} 
	else { // Default
		include_once("scripts_php/content-pages/FluxRss.php");
		$smarty->assign(array(
			'arrayRss' => $arrayRss
		));
		$smarty->display("views/content-pages/home.tpl");
	} 

	$smarty->display("views/components/footer.tpl");
?>