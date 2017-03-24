<?php
	class User {
		var $idU = -1;
		var $pseudonymeU = "";
		var $emailU = "";
		var $passwordU = "";
		
		// Construct
		function __construct($idU, $pseudonymeU, $emailU, $passwordU) {
			$this->idU = $idU;
		    $this->pseudonymeU = $pseudonymeU;
		    $this->emailU = $emailU;
			$this->passwordU = $passwordU;
	    }
		
		// Getters
		function getIdU() {
			return $this->idU;
		}
		
		function getPseudonymeU() {
			return $this->pseudonymeU;
		}
		
		function getEmailU() {
			return $this->emailU;
		}
		
		function getPasswordU() {
			return $this->passwordU;
		}
		
		// Setters
		function setPseudonymeU($pseudonymeU) {
			$this->pseudonymeU = $pseudonymeU;
		}
		
		function setEmailU($emailU) {
			$this->emailU = $emailU;
		}
		
		function setPasswordU($passwordU) {
			$this->passwordU = $passwordU;
		}
	} 
?>