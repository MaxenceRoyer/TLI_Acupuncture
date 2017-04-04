<?php
	class SymptPatho {
		var $idS = -1;
		var $idP = -1;
		var $aggr = false;
        var $aggrInit = false;
		
		// Construct
		function __construct($idS, $idP, $aggr) {
			$this->idS = $idS;
		    $this->idP = $idP;
            $this->aggrInit = true;
			$this->aggr = $aggr;
	    }
		
		// Getters
		function getIdS() {
			return $this->idS;
		}
		
		function getIdP() {
			return $this->idP;
		}
		
		function getAggr() {
            if (this->$aggrInit == false){
                return "Aggr not initialized";
            }
			return $this->aggr;
		}
		
		// Setters
		function setidS($idS) {
			$this->idS = $idS;
		}
        
		function setidP($idP) {
			$this->idP = $idP;
		}
		
		function setAggr($aggr) {
            if (this->$aggrInit == false){
                this->$aggrInit == true;
            }
			$this->aggr = $aggr;
		}
	} 
?>