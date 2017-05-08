<?php
/**
 * The Symptome Model
 */
class Symptome {
	var $idS = -1;
	var $desc = "";
	var $arrayKeyWords = null;
	
	/**
	 * Constructor
	 */
	function __construct($idS, $desc, $arrayKeyWords) {
		$this->idS = $idS;
	    $this->desc = $desc;
		if (!is_null($arrayKeyWords)) {
			$this->arrayKeyWords = $arrayKeyWords;
		}
   	 }
	
	/**
	 * Symptome id getter
	 */
	function getIdS() {
		return $this->idS;
	}
	
	/**
	 * Symptome description getter
	 */
	function getDesc() {
		return $this->desc;
	}
	
	/**
	 * Symptome list keywords getter
	 */
	function getArrayKeyWords() {
		return $this->arrayKeyWords;
	}
	
	/**
	 * Symptome description setter
	 */
	function setDesc($desc) {
		$this->desc = $desc;
	}
	
	/**
	 * Symptome list keywords setter
	 */
	function setArrayKeyWords($arrayKeyWords) {
		$this->arrayKeyWords = $arrayKeyWords;
	}
} 
?>
