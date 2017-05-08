<?php
/**
 * The SymptPatho Model
 */
class SymptPatho {
	var $idS = -1;
	var $idP = -1;
	var $aggr = false;
	var $aggrInit = false;
	
	/**
	 * Constructor
	 */
	function __construct($idS, $idP, $aggr) {
		$this->idS = $idS;
	    	$this->idP = $idP;
    		$this->aggrInit = true;
		$this->aggr = $aggr;
    	}
	
	/**
	 * Symptome id getter
	 */
	function getIdS() {
		return $this->idS;
	}
	
	/**
	 * Pathologie id getter
	 */
	function getIdP() {
		return $this->idP;
	}
	
	/**
	 * SymptPatho aggr getter
	 */
	function getAggr() {
		if (this->$aggrInit == false){
			return "Aggr not initialized";
		}
		return $this->aggr;
	}
	
	/**
	 * Symptome id setter
	 */
	function setidS($idS) {
		$this->idS = $idS;
	}

	/**
	 * Pathologie id setter
	 */
	function setidP($idP) {
		$this->idP = $idP;
	}
	
	/**
	 * SymptPatho aggr setter
	 */
	function setAggr($aggr) {
		if (this->$aggrInit == false){
			this->$aggrInit == true;
		}
		$this->aggr = $aggr;
	}
} 
?>
