<?php 
	session_start();

	// Include smarty
	include_once("libs-smarty/Smarty.class.php");

    $smarty = new Smarty();

	$smarty->display("views/components/header.tpl");

	$smarty->display("views/components/nav_error404.tpl");

	if (isset($_SESSION["User"]) && isset($_SESSION["SessionIsOpen"])) {
		if (!empty($_SESSION["User"]) && $_SESSION["SessionIsOpen"] == true) {
			$smarty->assign(array(
				'userSession' => $_SESSION["User"]
			));
		}
	}
	$smarty->display(dirname( __FILE__ ) . "/views/components/menu.tpl");

	$smarty->display("views/content-pages/erreur404.tpl");

	$smarty->display("views/components/footer.tpl");
?>