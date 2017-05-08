<?php
include_once(dirname( __FILE__ ) . "/../database/Bdd.class.php");
include_once(dirname( __FILE__ ) . "/../models/Symptome.class.php");
include_once(dirname( __FILE__ ) . "/../models/Patho.class.php");
/**
* The Symptome Controller to access to the database
*/
class SymptomeController extends Bdd {	
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
    	}
	
	/**
	 * Function called to recover all symptomes of the DB
	 *
	 * This function *recover all symptomes* of the database, it is possible to limit the 
	 * number of patho recover with the limit attribute.
	 *
	 * @param string $limit, the limit number, not necessary
	 *
	 * @return $arraySymptomes, the list of symptomes in database
	 */
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

	/**
	 * Function called to recover a symptome by ID
	 *
	 * This function *recover a symptomes by ID* 
	 *
	 * @param string $id, the symptome id
	 *
	 * @return $symptome, the symptome corresponding to the id
	 */
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
	
	/**
	 * Function called to recover a symptome by keyword
	 *
	 * This function *recover a symptomes by keyword* 
	 *
	 * @param string $keyword, a symptome keyword
	 *
	 * @return $arraySymptomes, a list of symptome corresponding to the keywork
	 */
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
	
	/**
	 * Function called to recover a symptome by his correponding pathologie
	 *
	 * This function *recover a symptomes by pathologie* 
	 *
	 * @param string $idP, the pathologie id
	 *
	 * @return $arraySymptomes, a list of symptome corresponding to the pathologie
	 */
	public function getSymptomesByIdPatho($idP) {
		try {
			$sql =  "SELECT symptome.idS, symptome.desc FROM symptome, patho, symptpatho WHERE symptome.idS = symptPatho.idS and patho.idP = symptPatho.idP and patho.idP LIKE ? ORDER BY symptome.idS";

			$req = Bdd::prepare($sql);
			if (Bdd::execute($req, array($idP))) {
				$row = $req->fetchAll();
				
				$arraySymptomes = array();
				for ($i = 0; $i < sizeof($row); $i++) {
					$Symptome = new Symptome($row[$i]['idS'], $row[$i]['desc'], null);
					array_push($arraySymptomes, $Symptome);
				}
				$req->closeCursor();
				return $arraySymptomes;
			} else {
				throw new Exception("An error has occured during recover symptomes of a pathoId."); 
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
}
?>
