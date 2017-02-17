<?php
	class KeyWords {
		var $idK = -1;
		var $name = "";
		
		// Construct
		function __construct($name) {
		    $this->name = $name;
	    }
		
		// Getters
		function getIdK() {
			return $this->idK;
		}
		
		function getName() {
			return $this->name;
		}
		
		// Setters
		function setName($name) {
			$this->name = $name;
		}
	} 
?>