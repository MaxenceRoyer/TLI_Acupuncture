<?php 
	// Include smarty
	include_once(dirname( __FILE__ ) . "/../libs-smarty/Smarty.class.php");

    $smarty = new Smarty();

	$smarty->display(dirname( __FILE__ ) . "/../views/components/header_calculatrice.tpl");

	$smarty->display(dirname( __FILE__ ) . "/../views/components/nav_ws.tpl");

	$smarty->display(dirname( __FILE__ ) . "/../views/content-pages/ws.tpl");
	
	$smarty->display(dirname( __FILE__ ) . "/../views/components/footer.tpl");
?>