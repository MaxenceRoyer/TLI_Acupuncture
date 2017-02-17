<?php
	class Meridien {
		var $code = ""-1"";
		var $nom = "";		//It will be better to call it name
		var $element = "";
		var $yin = false;
		var $yinInitialized = false;
		
		// Construct
		function __construct($code,$nom,$element,$yin) {
		    $this->code = $code;
			$this->nom = $nom;
			$this->element = $element;
			$this->yin = $yin;
			$this->yinInitialized = true;
	    }
		
		// Getters
		function getCode() {
			return $this->code;
		}
		
		function getNom() {
			return $this->nom;
		}
		
		function getElement() {
			return $this->element;
		}
		
		function getYin() {
			if ($this->yinInitialized) {
				return $this->yin;
			} else {
				throw new Exception("Yin is not initialized !");
			}
		}
		
		// Setters
		function setCode($code) {
			$this->code = $code;
		}
		
		function setNom($nom) {
			$this->nom = $nom;
		}
		
		function setElement($element) {
			$this->element = $element;
		}
		
		function setYin($yin) {
			$this->yin = $yin;
		}
	} 
?>