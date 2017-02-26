<?php
	include_once("database/Base.php");
	include_once("models/SymptPatho.php");

	class SymptPathoControler extends Bdd {	
		// Construct
		function __construct() {
			parent::__construct();
	    }
		
		// Function called to recover all pathologies of the DB
		public function getAllSymptPatho() {
			$sql =  'SELECT * FROM patho ORDER BY idP';
			
			$arraySymptPatho = array();
			foreach  (self::request($sql) as $row) {
				$SymptPatho = new SymptPatho($row['idP'], $row['mer'], $row['type'], $row['desc']);
				array_push($arraySymptPatho, $SymptPatho);
		    }
			
			return $arraySymptPatho;
		}
		
		// Function called to recover a patho by is ID
		public function getSymptPathoById($id) {
			try {
				$sql =  'SELECT * FROM patho WHERE idP = ?';

				$req = self::prepare($sql);
				if (self::execute($req, array($id))) {
					if ($row = $req->fetch()) {
						$patho = new SymptPatho($row['idP'], $row['mer'], $row['type'], $row['desc']);
						$req->closeCursor();
						return $patho;
					} else {
						$req->closeCursor();
					}
				} else {
					throw new Exception("An error has occured during recover a patho by ID."); 
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}

		}
		
		// Function called to recover a patho by meridien
		public function getSymptPathoByMer($mer) {
			try{
				$sql =  'SELECT * FROM patho WHERE mer = ?';

				$req = self::prepare($sql);
				if(self::execute($req, array($mer))) {
					if ($row = $req->fetch()) {
						$patho = new SymptPatho($row['idP'], $row['mer'], $row['type'], $row['desc']);
						$req->closeCursor();
						return $patho;
					} else {
						$req->closeCursor();
					}
				} else {
					throw new Exception("An error has occured during recover a patho by meridien."); 
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}
		}
		
		// Function called to recover a patho by is type
		public function getSymptPathoByType($type) {
			try{
				$sql =  'SELECT * FROM patho WHERE type = ?';

				$req = self::prepare($sql);
				if (self::execute($req, array($type))) {
					if ($row = $req->fetch()) {
						$patho = new SymptPatho($row['idP'], $row['mer'], $row['type'], $row['desc']);
						$req->closeCursor();
						return $patho;
					} else {
						$req->closeCursor();
					}
				} else {
					throw new Exception("An error has occured during recover a patho by type."); 
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}
		}
        
        // Function called to recover a patho by is desc
		public function getSymptPathoByDesc($desc) {
			try{
				$sql =  'SELECT * FROM patho WHERE desc = ?';

				$req = self::prepare($sql);
				if (self::execute($req, array($desc))) {
					if ($row = $req->fetch()) {
						$patho = new SymptPatho($row['idP'], $row['mer'], $row['type'], $row['desc']);
						$req->closeCursor();
						return $patho;
					} else {
						$req->closeCursor();
					}
				} else {
					throw new Exception("An error has occured during recover a patho by desc."); 
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}
		}
		
		// Function called to update a patho meridien
		public function updateSymptPathoMerById($id, $mer) {
			try{
				$sql = 'UPDATE patho SET mer = ? WHERE idP = ?';

				$req = self::prepare($sql);
				if (self::execute($req, array($mer, $id)) && $req->rowCount()) {
					$patho = $this->getSymptPathoById($id);
					$req->closeCursor();
					return $patho;
				} else {
					return false;
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}
		}
		
		// Function called to update a patho type
		public function updateSymptPathoTypeById($id, $type) {
			try{
				$sql = 'UPDATE patho SET type = ? WHERE idP = ?';

				$req = self::prepare($sql);
				if (self::execute($req, array($type, $id)) && $req->rowCount()) {
					$patho = $this->getSymptPathoById($id);
					$req->closeCursor();
					return $patho;
				} else {
					return false;
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}
		}
		
		// Function called to update a patho description by ID
		public function updateSymptPathoDescById($id, $desc) {
			try{
				$sql = 'UPDATE patho SET desc = ? WHERE idP = ?';

				$req = self::prepare($sql);
				if (self::execute($req, array($desc, $id)) && $req->rowCount() == 1) {
					$patho = $this->getSymptPathoById($id);
					$req->closeCursor();
					return $patho;
				} else {
					return false;
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}
		}
		
		// Function called to delete a patho by its id
		public function deleteSymptPathoById($id) {
			try{
				$sql = 'DELETE FROM patho WHERE idP = ?';

				$req = self::prepare($sql);
				if (self::execute($req, array($id)) && $req->rowCount() == 1) {
					$req->closeCursor();
					return true;
				} else {
					return false;
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}
		}
        
		// Function called to create a patho 
		public function createSymptPatho($patho) {
			try{
				$sql = 'INSERT INTO patho(mer, type, desc) VALUES (?, ?, ?)';

				$req = self::prepare($sql);
				if (self::execute($req, array($patho->$mer, $patho->$type, $patho->$desc)) && $req->rowCount() == 1) {
					$patho = $this->getUserById($patho->$id);
					$req->closeCursor();
					return $patho;
				} else {
					return false;
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}
		}
	}
?>