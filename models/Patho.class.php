<?php
/**
 * The Pathologie Model
 */
class Patho {
	var $idP = -1;
	var $mer = "";
	var $type = "";
	var $desc = "";
	
	/**
	 * Constructor
	 */
	function __construct($idP, $mer, $type, $desc) {
		$this->idP = $idP;
	    $this->mer = $mer;
		$this->type = $type;
		$this->desc = $desc;
    	}
	
	/**
	 * Pathologie Id getter
	 */
	function getIdP() {
		return $this->idP;
	}
	
	/**
	 * Pathologie Meridien getter
	 */
	function getMer() {
		return $this->mer;
	}
	
	/**
	 * Pathologie type getter
	 */
	function getType() {
		return $this->type;
	}
	
	/**
	 * Pathologie description getter
	 */
	function getDesc() {
		return $this->desc;
	}
	
	/**
	 * Pathologie meridien setter
	 */
	function setMer($mer) {
		$this->mer = $mer;
	}
	
	/**
	 * Pathologie type setter
	 */
	function setType($type) {
		$this->type = $type;
	}
	
	/**
	 * Pathologie description setter
	 */
	function setDesc($desc) {
		$this->desc = $desc;
	}
} 
?>
