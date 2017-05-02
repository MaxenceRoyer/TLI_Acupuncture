<?php 
	include_once(dirname( __FILE__ ) . "/models/User.class.php");
	session_start();

	// Include smarty
	include_once(dirname( __FILE__ ) . "/libs-smarty/Smarty.class.php");

    $smarty = new Smarty();

	$smarty->display(dirname( __FILE__ ) . "/views/components/header.tpl");
	$smarty->display(dirname( __FILE__ ) . "/views/components/nav.tpl");


	if (isset($_SESSION["User"]) && isset($_SESSION["SessionIsOpen"])) {
		if (!empty($_SESSION["User"]) && $_SESSION["SessionIsOpen"] == true) {
			$smarty->assign(array(
				'userSession' => $_SESSION["User"]
			));
		}
	}
	$smarty->display(dirname( __FILE__ ) . "/views/components/menu.tpl");
	
	// To include the content page thanks to the URL called
	if (strpos($_SERVER['REQUEST_URI'], 'inscription')) { // Registering
		$smarty->display(dirname( __FILE__ ) . "/views/content-pages/inscription.tpl");
	} else if (strpos($_SERVER['REQUEST_URI'], 'index')) { // Index
		include_once(dirname( __FILE__ ) . "/scripts_php/content-pages/FluxRss.php");
		$smarty->assign(array(
			'arrayRss' => $arrayRss
		));
		$smarty->display(dirname( __FILE__ ) . "/views/content-pages/home.tpl");
	} else if (strpos($_SERVER['REQUEST_URI'], 'pathologies')) { // Pathologies
		include_once(dirname( __FILE__ ) . "/scripts_php/content-pages/PathoController.php");
		$smarty->assign(array(
			'allPatho' => $allPatho
		));
		$smarty->display(dirname( __FILE__ ) . "/views/content-pages/pathologies.tpl");
	} else if (strpos($_SERVER['REQUEST_URI'], 'detailsSymptomes')) { // DetailsSymptomes
		include_once(dirname( __FILE__ ) . "/scripts_php/content-pages/SymptomesDetails.php");
		$smarty->assign(array(
			'PathoDetails' => getDetailsPatho(substr($_SERVER['REQUEST_URI'], -1)),
			'PathoSymptomes' => getDetailsSymptomes(substr($_SERVER['REQUEST_URI'], -1))
		));
		$smarty->display(dirname( __FILE__ ) . "/views/content-pages/detailsSymptomes.tpl");
	} else if (strpos($_SERVER['REQUEST_URI'], 'informations')) { // Informations
		$smarty->display(dirname( __FILE__ ) . "/views/content-pages/informations.tpl"); 
	} else { // Default
		include_once(dirname( __FILE__ ) . "/scripts_php/content-pages/FluxRss.php");
		$smarty->assign(array(
			'arrayRss' => $arrayRss
		));
		$smarty->display(dirname( __FILE__ ) . "/views/content-pages/home.tpl");
	} 

	$smarty->display(dirname( __FILE__ ) . "/views/components/footer.tpl");
?>