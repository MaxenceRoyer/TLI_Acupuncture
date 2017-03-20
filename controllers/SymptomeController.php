<?php
	include_once(dirname( __FILE__ ) . "/../database/Base.php");
	include_once(dirname( __FILE__ ) . "/../models/Symptome.php");
	include_once(dirname( __FILE__ ) . "/../models/Patho.php");

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
						$Symptome = new Symptome($row[$i]['idS'], $row[$i]['desc'], null);
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
						$symptome = new Symptome($row['idS'], $row['desc'], null);
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
		
		public function getSymptomesByKeyWord($keyword) {
			try {
				$sql =  "SELECT patho.idP, patho.mer, patho.type, patho.desc FROM symptome, keywords, keySympt, symptpatho, patho WHERE symptome.idS = keySympt.idS and keywords.idK = keySympt.idK and symptome.idS = symptpatho.idS and patho.idP = symptpatho.idP and keywords.name LIKE ? ORDER BY patho.idP";

				$req = Bdd::prepare($sql);
				$keywordLike = "%". $keyword ."%";
				if (Bdd::execute($req, array($keywordLike))) {
					$row = $req->fetchAll();
					
					$arraySymptomes = array();
					for ($i = 0; $i < sizeof($row); $i++) {
						$Patho = new Patho($row[$i]['idP'], $row[$i]['mer'], $row[$i]['type'], $row[$i]['desc']);
						array_push($arraySymptomes, $Patho);
					}
					$req->closeCursor();
					return $arraySymptomes;
				} else {
					throw new Exception("An error has occured during recover a symptome by ID."); 
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}
		}
	}
?>