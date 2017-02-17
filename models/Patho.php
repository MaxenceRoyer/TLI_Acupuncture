<?php
	class Patho {
		var $idP = -1;
		var $mer = "";
		var $type = "";
		var $desc = "";
		
		// Construct
		function __construct($mer,$type,$desc) {
		    $this->mer = $mer;
			$this->type = $type;
			$this->desc = $desc;
	    }
		
		// Getters
		function getIdP() {
			return $this->idP;
		}
		
		function getMer() {
			return $this->mer;
		}
		
		function getType() {
			return $this->type;
		}
		
		function getDesc() {
			return $this->desc;
		}
		
		// Setters
		function setMer($mer) {
			$this->mer = $mer;
		}
		
		function setType($type) {
			$this->type = $type;
		}
		
		function setDesc($desc) {
			$this->desc = $desc;
		}
	} 
?>