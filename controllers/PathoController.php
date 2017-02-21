<?php
	include_once("database/Base.php");
	include_once("models/Patho.php");

	class PathoController extends Bdd {	
		// Construct
		function __construct() {
			parent::__construct();
	    }
		
		// Function called to recover all pathologies of the DB
		public function getAllPatho($limit) {
			$sql =  'SELECT * FROM patho ORDER BY idP ASC LIMIT 0, :limit';
			
			$req = Bdd::prepare($sql);
			$req->bindParam(':limit', $limit, PDO::PARAM_INT);
			$arrayPatho = array();
			if  (Bdd::execute($req, null)) {
				$row = $req->fetchAll();
				for ($i = 0; $i < sizeof($row); $i++) {
					$Patho = new Patho($row[$i]['idP'], $row[$i]['mer'], $row[$i]['type'], $row[$i]['desc']);
					array_push($arrayPatho, $Patho);
				}
		    }
			
			$req->closeCursor();
			
			return $arrayPatho;
		}
		
		// Function called to recover a patho by is ID
		public function getPathoById($id) {
			try {
				$sql =  'SELECT * FROM patho WHERE idP = ?';

				$req = Bdd::prepare($sql);
				if (Bdd::execute($req, array($id))) {
					if ($row = $req->fetch()) {
						$patho = new Patho($row['idP'], $row['mer'], $row['type'], $row['desc']);
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
		public function getPathoByMer($mer) {
			try{
				$sql =  'SELECT * FROM patho WHERE mer = ?';

				$req = Bdd::prepare($sql);
				if(Bdd::execute($req, array($mer))) {
					if ($row = $req->fetch()) {
						$patho = new Patho($row['idP'], $row['mer'], $row['type'], $row['desc']);
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
		public function getPathoByType($type) {
			try{
				$sql =  'SELECT * FROM patho WHERE type = ?';

				$req = Bdd::prepare($sql);
				if (Bdd::execute($req, array($type))) {
					if ($row = $req->fetch()) {
						$patho = new Patho($row['idP'], $row['mer'], $row['type'], $row['desc']);
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
		public function getPathoByDesc($desc) {
			try{
				$sql =  'SELECT * FROM patho WHERE desc = ?';

				$req = Bdd::prepare($sql);
				if (Bdd::execute($req, array($desc))) {
					if ($row = $req->fetch()) {
						$patho = new Patho($row['idP'], $row['mer'], $row['type'], $row['desc']);
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
	}
?>