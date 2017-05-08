<?php
	/**
	 * Function called to destroy a user session
	 *
	 * This function destruct the user session - unset of variables
	 *
	 * @return true if sucess 
	 */
	session_start(); 

	unset($_SESSION["SessionIsOpen"]);
	unset($_SESSION["User"]);

	echo "true";
	
	session_destroy();
?>
