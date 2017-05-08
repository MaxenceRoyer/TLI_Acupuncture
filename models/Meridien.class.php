<?php
/**
 * The Meridien Model
 */
class Meridien {
	var $code = ""-1"";
	var $nom = "";		//It will be better to call it name
	var $element = "";
	var $yin = false;
	var $yinInitialized = false;
	
	/**
	 * Constructor
	 */
	function __construct($code,$nom,$element,$yin) {
	    $this->code = $code;
		$this->nom = $nom;
		$this->element = $element;
		$this->yin = $yin;
		$this->yinInitialized = true;
    	}
	
	/**
	 * Meridien code Getter
	 */
	function getCode() {
		return $this->code;
	}
	
	/**
	 * Meridien nom Getter
	 */
	function getNom() {
		return $this->nom;
	}
	
	/**
	 * Meridien element Getter
	 */
	function getElement() {
		return $this->element;
	}
	
	/**
	 * Meridien Yin Getter
	 */
	function getYin() {
		if ($this->yinInitialized) {
			return $this->yin;
		} else {
			throw new Exception("Yin is not initialized !");
		}
	}
	
	/**
	 * Meridien code setter
	 */
	function setCode($code) {
		$this->code = $code;
	}
	
	/**
	 * Meridien nomp setter
	 */
	function setNom($nom) {
		$this->nom = $nom;
	}
	
	/**
	 * Meridien element setter
	 */
	function setElement($element) {
		$this->element = $element;
	}
	
	/**
	 * Meridien yin setter
	 */
	function setYin($yin) {
		$this->yin = $yin;
	}
} 
?>
