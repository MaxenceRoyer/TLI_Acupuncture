<?php 
	// Include smarty
	include_once("libs-smarty/smarty.class.php");

    $smarty = new Smarty();

	$smarty->display("views/components/header.tpl");

	$smarty->display("views/components/nav_error404.tpl");

	$smarty->display("views/content-pages/erreur404.tpl");

	$smarty->display("views/components/footer.tpl");
?>