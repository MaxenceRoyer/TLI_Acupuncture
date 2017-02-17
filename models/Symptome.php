<?php
	class Symptome {
		var $idS = -1;
		var $desc = "";
		
		// Construct
		function __construct($idS, $desc) {
			$this->idS = $idS;
		    $this->desc = $desc;
	    }
		
		// Getters
		function getIdS() {
			return $this->idS;
		}
		
		function getDesc() {
			return $this->desc;
		}
		
		// Setters
		function setDesc($desc) {
			$this->desc = $desc;
		}
	} 
?>