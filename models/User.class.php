<?php
/**
 * The User Model
 */
class User {
	var $idU = -1;
	var $pseudonymeU = "";
	var $emailU = "";
	var $passwordU = "";
	
	/**
	 * Constructor
	 */
	function __construct($idU, $pseudonymeU, $emailU, $passwordU) {
		$this->idU = $idU;
	    $this->pseudonymeU = $pseudonymeU;
	    $this->emailU = $emailU;
		$this->passwordU = $passwordU;
    	}
	
	/**
	 * User id getter
	 */
	function getIdU() {
		return $this->idU;
	}
	
	/**
	 * User pseudonyme getter
	 */
	function getPseudonymeU() {
		return $this->pseudonymeU;
	}
	
	/**
	 * User email getter
	 */
	function getEmailU() {
		return $this->emailU;
	}
	
	/**
	 * User password getter
	 */
	function getPasswordU() {
		return $this->passwordU;
	}
	
	/**
	 * User pseudonyme setter
	 */
	function setPseudonymeU($pseudonymeU) {
		$this->pseudonymeU = $pseudonymeU;
	}
	
	/**
	 * User email setter
	 */
	function setEmailU($emailU) {
		$this->emailU = $emailU;
	}
	
	/**
	 * User password setter
	 */
	function setPasswordU($passwordU) {
		$this->passwordU = $passwordU;
	}
} 
?>
