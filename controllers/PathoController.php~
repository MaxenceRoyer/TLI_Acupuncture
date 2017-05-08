<?php
include_once(dirname( __FILE__ ) . "/../database/Bdd.class.php");
include_once(dirname( __FILE__ ) . "/../models/Patho.class.php");
/**
 * The Pathologie Controller to access to the database
 */
class PathoController extends Bdd {	
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
    	}
	
	/**
	 * Function called to recover all pathologies of the DB
	 *
	 * This function *recover all pathologies* of the database, it is possible to limit the 
	 * number of patho recover with the limit attribute.
	 *
	 * @param string $limit, the limit number, not necessary
	 *
	 * @return $arrayPatho, the list of pathologies in database
	 */
	public function getAllPatho($limit) {
		if ($limit != 'NONE') {
			$sql =  'SELECT * FROM patho ORDER BY idP ASC LIMIT 0, :limit';

			$req = Bdd::prepare($sql);
			$req->bindParam(':limit', $limit, PDO::PARAM_INT);
		} else {
			$sql =  'SELECT * FROM patho ORDER BY idP ASC';

			$req = Bdd::prepare($sql);
		}
	
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
	
	/**
	 * Function called to recover a patho by is ID
	 *
	 * This function *recover a pathologies* by is ID (the patho id)
	 *
	 * @param string $id, the patho id
	 *
	 * @return $patho, the patho corresponding
	 */
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
	
	/**
	 * Function called to recover a patho by meridien
	 *
	 * This function *recover a pathologies* by his meridien
	 *
	 * @param string $mer, the meridien
	 *
	 * @return $patho, the patho corresponding to the meridien
	 */
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
	
	/**
	 * Function called to recover a patho by is type
	 *
	 * This function *recover a pathologies* by his type
	 *
	 * @param string $type, the type of patho
	 *
	 * @return $patho, the patho corresponding to the type
	 */
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

	/**
	 * Function called to recover a patho by is description
	 *
	 * This function *recover a pathologies by his description*
	 *
	 * @param string $desc, the descriptif of patho
	 *
	 * @return $patho, the patho corresponding to the description
	 */
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
	
	
	/**
	 * Function called to update a patho meridien
	 *
	 * This function *update a pathologies meridien* by his patho id
	 *
	 * @param string $id, the patho id
	 * @param string $mer, the meridien
	 *
	 * @return $patho, the patho updated
	 */
	public function updatePathoMerById($id, $mer) {
		try{
			$sql = 'UPDATE patho SET mer = ? WHERE idP = ?';

			$req = self::prepare($sql);
			if (self::execute($req, array($mer, $id)) && $req->rowCount()) {
				$patho = $this->getPathoById($id);
				$req->closeCursor();
				return $patho;
			} else {
				return false;
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to update a patho type
	 *
	 * This function *update a pathologies type* by his patho id
	 *
	 * @param string $id, the patho id
	 * @param string $type, the patho type
	 *
	 * @return $patho, the patho updated
	 */
	public function updatePathoTypeById($id, $type) {
		try{
			$sql = 'UPDATE patho SET type = ? WHERE idP = ?';

			$req = self::prepare($sql);
			if (self::execute($req, array($type, $id)) && $req->rowCount()) {
				$patho = $this->getPathoById($id);
				$req->closeCursor();
				return $patho;
			} else {
				return false;
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to update a patho description by ID
	 *
	 * This function *update a pathologies description* by his patho id
	 *
	 * @param string $id, the patho id
	 * @param string $desc, the patho description
	 *
	 * @return $patho, the patho updated
	 */
	public function updatePathoDescById($id, $desc) {
		try{
			$sql = 'UPDATE patho SET desc = ? WHERE idP = ?';

			$req = self::prepare($sql);
			if (self::execute($req, array($desc, $id)) && $req->rowCount() == 1) {
				$patho = $this->getPathoById($id);
				$req->closeCursor();
				return $patho;
			} else {
				return false;
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to delete a patho by its id
	 *
	 * This function *delete a pathologies* by his patho id
	 *
	 * @param string $id, the patho id
	 *
	 * @return boolean, if deleted or not
	 */
	public function deletePathoById($id) {
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

	/**
	 * Function called to create a patho 
	 *
	 * This function *create a pathologies* 
	 *
	 * @param string $patho, the patho to create
	 *
	 * @return $patho, the patho created
	 */ 
	public function createPatho($patho) {
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
