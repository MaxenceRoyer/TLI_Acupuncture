<?php
include_once(dirname( __FILE__ ) . "/../database/Bdd.class.php");
include_once(dirname( __FILE__ ) . "/../models/SymptPatho.class.php");
/**
 * The Symptome and Pathologie Controller to access to the database
 */
class SymptPathoController extends Bdd {	
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
    	}
	
	/**
	 * Function called to recover all symptpathos
	 *
	 * This function *recover all symptpathos* existing in database.
	 *
	 * @param string $limit, not necessary, to recover a precise number of symptpatho
	 *
	 * @return $arraySymptPatho a list with all the symptpatho
	 */
	public function getAllSymptPathos($limit) {
		try{
        $sql =  'SELECT * FROM symptpatho LIMIT 0, :limit';
        
        $req = Bdd::prepare($sql);
        $req->bindParam(':limit', $limit, PDO::PARAM_INT);
        $arraySymptPatho = array();
        if  (Bdd::execute($req, null)) {
            $row = $req->fetchAll();
            for ($i = 0; $i < sizeof($row); $i++) {
                $SymptPatho = new SymptPatho($row[$i]['idS'], $row[$i]['idP'], $row[$i]['aggr']);
                array_push($arraySymptPatho, $SymptPatho);
            }
            $req->closeCursor();
            return $arraySymptPatho;
        } else {
				throw new Exception("An error has occured during recover all symptpatho."); 
			}
        
    } catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
}
	
	/**
	 * Function called to recover a symptpatho by  idS and idP
	 *
	 * This function *recover a symptpathos* by the sympt id and the patho id.
	 *
	 * @param string $idS, the sympthome id
	 * @param string $idP, the pathologie id
	 *
	 * @return $symptPatho, a symptpatho
	 */
	public function getSymptPathoByIdSAndIdP($idS, $idP) {
		try {
			$sql =  'SELECT * FROM symptpatho WHERE idS = ? AND idP = ?';

			$req = Bdd::prepare($sql);
			if (Bdd::execute($req, array($idS, $idP))) {
				if ($row = $req->fetch()) {
					$symptpatho = new SymptPatho($row['idS'], $row['idP'], $row['aggr']);
					$req->closeCursor();
					return $symptpatho;
				} else {
					$req->closeCursor();
				}
			} else {
				throw new Exception("An error has occured during recover a symptpatho by ID."); 
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to recover a symptpatho by idS
	 *
	 * This function *recover a symptpathos* by the sympt id
	 *
	 * @param string $idS, the sympthome id
	 *
	 * @return $symptPatho, a symptpatho
	 */
	public function getSymptPathoByidS($idS) {
		try{
			$sql =  'SELECT * FROM symptpatho WHERE idS = ?';

			$req = Bdd::prepare($sql);
			if(Bdd::execute($req, array($idS))) {
				if ($row = $req->fetch()) {
					$symptpatho = new SymptPatho($row['idS'], $row['idP'], $row['aggr']);
					$req->closeCursor();
					return $symptpatho;
				} else {
					$req->closeCursor();
				}
			} else {
				throw new Exception("An error has occured during recover a symptpatho by idS."); 
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to recover a symptpatho by idP
	 *
	 * This function *recover a symptpathos* by the patho id
	 *
	 * @param string $idP, the pathologie id
	 *
	 * @return $symptPatho, a symptpatho
	 */
	public function getSymptPathoByidP($idP) {
		try{
			$sql =  'SELECT * FROM symptpatho WHERE idP = ?';

			$req = Bdd::prepare($sql);
			if(Bdd::execute($req, array($idP))) {
				if ($row = $req->fetch()) {
					$symptpatho = new SymptPatho($row['idS'], $row['idP'], $row['aggr']);
					$req->closeCursor();
					return $symptpatho;
				} else {
					$req->closeCursor();
				}
			} else {
				throw new Exception("An error has occured during recover a symptpatho by idP."); 
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to recover a symptpatho by is aggr
	 *
	 * This function *recover a symptpathos by his aggr*
	 *
	 * @param string $aggr, the aggr
	 *
	 * @return $symptPatho, a symptpatho
	 */
	public function getSymptPathoByAggr($aggr) {
		try{
			$sql =  'SELECT * FROM symptpatho WHERE aggr = ?';

			$req = Bdd::prepare($sql);
			if (Bdd::execute($req, array($aggr))) {
				if ($row = $req->fetch()) {
					$symptpatho = new SymptPatho($row['idS'], $row['idP'], $row['aggr']);
					$req->closeCursor();
					return $symptpatho;
				} else {
					$req->closeCursor();
				}
			} else {
				throw new Exception("An error has occured during recover a symptpatho by aggr."); 
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to update a symptpatho aggr
	 *
	 * This function *update a symptpathos aggr* by idS and idP
	 *
	 * @param string $idS, the Sympt id
	 * @param string $idP, the Patho id
	 * @param string $aggr, the aggr
	 *
	 * @return $symptPatho, the symptpatho updated
	 */
	public function updateSymptPathoAggrById($idS, $idP, $aggr) {
		try{
			$sql = 'UPDATE symptpatho SET aggr = ? WHERE idS = ? AND idP = ?';

			$req = self::prepare($sql);
			if (self::execute($req, array($aggr, $idS, $idP)) && $req->rowCount()) {
				$symptpatho = $this->getSymptPathoByIdSAndIdP($idS, $idP);
				$req->closeCursor();
				return $symptpatho;
			} else {
				throw new Exception("An error has occured during update a symptpatho aggr."); 
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to delete a symptpatho by its id
	 *
	 * This function *delete a symptpathos * by idS and idP
	 *
	 * @param string $idS, the Sympt id
	 * @param string $idP, the Patho id
	 *
	 * @return boolean, if deleted or not
	 */
	public function deleteSymptPathoById($idS, $idP) {
		try{
			$sql = 'DELETE FROM symptpatho WHERE idS = ? AND idP = ?';

			$req = self::prepare($sql);
			if (self::execute($req, array($idS, $idP)) && $req->rowCount() == 1) {
				$req->closeCursor();
				return true;
			} else {
				throw new Exception("An error has occured during symptpatho delete."); 
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}

	/**
	 * Function called to create a symptpatho
	 *
	 * This function *create a symptpatho* by a symptpatho
	 *
	 * @param string $symptpatho, the symptpatho to create in database
	 *
	 * @return $symptpatho, the symptpatho created
	 */
	public function createSymptPatho($symptpatho) {
		try{
			$sql = 'INSERT INTO symptpatho(idS, idP, aggr) VALUES (?, ?, ?)';

			$req = self::prepare($sql);
			if (self::execute($req, array($symptpatho->$idS, $symptpatho->$idP, $symptpatho->$aggr)) && $req->rowCount() == 1) {
				$symptpatho = $this->getSymptPathoByIdSAndIdP($symptpatho->$idS, $symptpatho->$idP);
				$req->closeCursor();
				return $symptpatho;
			} else {
				throw new Exception("An error has occured during symptpatho creation."); 
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
}
?>
