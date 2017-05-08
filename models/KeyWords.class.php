<?php
/**
 * The Keywords Model
 */
class KeyWords {
	var $idK = -1;
	var $name = "";
	
	/**
	 * Constructor
	 */
	function __construct($name) {
	    $this->name = $name;
    	}
	
	/**
	 * Keyword id Getter
	 */
	function getIdK() {
		return $this->idK;
	}
	
	/**
	 * Keyword name Getter
	 */
	function getName() {
		return $this->name;
	}
	
	/**
	 * Keyword name Setter
	 */ 
	function setName($name) {
		$this->name = $name;
	}
} 
?>
