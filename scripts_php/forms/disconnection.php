<?php
	session_start(); 

    // Destruction of the user session - unset of variables
	unset($_SESSION["SessionIsOpen"]);
	unset($_SESSION["User"]);

	echo "true";
	
	session_destroy();
?>