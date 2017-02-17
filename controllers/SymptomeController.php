<?php
	include_once("database/Base.php");
	include_once("models/Symptome.php");

	class SymptomeController extends Bdd {	
		// Construct
		function __construct() {
			parent::__construct();
	    }
		
		// Function called to recover all symptomes of the DB
		public function getAllSymptomes($limit) {
			try {
				$sql =  'SELECT * FROM symptome ORDER BY idS ASC LIMIT 0, :limit';
			
				$req = Bdd::prepare($sql);
				$req->bindParam(':limit', $limit, PDO::PARAM_INT);
				$arraySymptomes = array();
				if (Bdd::execute($req, null)) {
					$row = $req->fetchAll();
					for ($i = 0; $i < sizeof($row); $i++) {
						$Symptome = new Symptome($row[$i]['idS'], $row[$i]['desc']);
						array_push($arraySymptomes, $Symptome);
					}
				}
				
				$req->closeCursor();
				return $arraySymptomes;
			} catch (Exception $e) {
				die('An error has occured : '.$e->getMessage());	
			}
		}
	
		// Function called to recover a symptome by ID
		public function getSymptome($id) {
			try {
				$sql =  'SELECT * FROM symptome WHERE idS = ?';

				$req = Bdd::prepare($sql);
				if (Bdd::execute($req, array($id))) {
					if ($row = $req->fetch()) {
						$symptome = new Symptome($row['idS'], $row['desc']);
						$req->closeCursor();
						return $symptome;
					} else {
						$req->closeCursor();
					}
				} else {
					throw new Exception("An error has occured during recover a symptome by ID."); 
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}
		}
		
		// ...
		public function getSymptomesByPatho() {
			
		}
		
		// TO DO : Features - If we have more time
		// TO DO : Add create, update and delete functions ....
	}
?>