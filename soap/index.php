<?php 
	// Include smarty
	include_once("../libs-smarty/smarty.class.php");

    $smarty = new Smarty();

	$smarty->display("../views/components/header_calculatrice.tpl");

	$smarty->display("../views/components/nav_ws.tpl");

	$smarty->display("../views/content-pages/ws.tpl");
	
	$smarty->display("../views/components/footer.tpl");
?>