<?php 
	echo file_get_contents("views/components/header.php"); 
	echo file_get_contents("views/components/nav.php"); 
	echo file_get_contents("views/components/menu.php"); 

	// To include the content page thanks to the URL called
	if (strpos($_SERVER['REQUEST_URI'], 'inscription')) { // Registering
		include("views/content-pages/inscription.php"); 
	} else if (strpos($_SERVER['REQUEST_URI'], 'index')) { // Index
		include("views/content-pages/home.php"); 
	} else { // Default
		include("views/content-pages/home.php"); 
	}

	echo file_get_contents("views/components/footer.php"); 
?>