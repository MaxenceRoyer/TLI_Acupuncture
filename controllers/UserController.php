<?php
include_once(dirname( __FILE__ ) . "/../database/Bdd.class.php");
include_once(dirname( __FILE__ ) . "/../models/User.class.php");

/**
 * I belong to a class
 */
class UserController extends Bdd {	
	// Construct
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
	}
	
	/**
	 * Function called to try to connect an user
	 *
	 * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
	 * and to provide some background information or textual references.
	 *
	 * @param string $passwordMd5 With a *description* of this argument, these may also
	 *    span multiple lines.
	 * @param string $email With a *description* of this argument, these may also
	 *    span multiple lines.
	 *
	 * @return boolean
	 */
	public function connect($passwordMd5, $email) {
		try {
			$sql =  'SELECT passwordU FROM user WHERE emailU = ?';
		
			$req = Bdd::prepare($sql);
			if (Bdd::execute($req, array($email))) {
				if ($row = $req->fetch()) {
					if (md5($row["passwordU"]) == $passwordMd5) {
						return true;
					}
				} else {
					return false;
				}
			}
			
			return false;
		} catch (Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to recover all users of the DB
	 *
	 * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
	 * and to provide some background information or textual references.
	 *
	 * @return boolean
	 */
	public function getAllUsers() {
		$sql =  'SELECT * FROM user ORDER BY idU';
		
		$arrayUsers = array();
		foreach  (Bdd::request($sql) as $row) {
			$User = new User($row['idU'], $row['pseudonymeU'], $row['emailU'], $row['passwordU']);
			array_push($arrayUsers, $User);
		}
		
		return $arrayUsers;
	}
	
	/**
	 * Function called to recover a user by is ID
	 *
	 * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
	 * and to provide some background information or textual references.
	 *
	 * @param string $id With a *description* of this argument, these may also
	 *    span multiple lines.
	 *
	 * @return boolean
	 */
	public function getUserById($id) {
		try {
			$sql =  'SELECT * FROM user WHERE idU = ?';

			$req = Bdd::prepare($sql);
			if (Bdd::execute($req, array($id))) {
				if ($row = $req->fetch()) {
					$user = new User($row['idU'], $row['pseudonymeU'], $row['emailU'], $row['passwordU']);
					$req->closeCursor();
					return $user;
				} else {
					$req->closeCursor();
				}
			} else {
				throw new Exception("An error has occured during recover a user by ID."); 
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to recover a user by is email
	 *
	 * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
	 * and to provide some background information or textual references.
	 *
	 * @param string $email With a *description* of this argument, these may also
	 *    span multiple lines.
	 *
	 * @return boolean
	 */
	public function getUserByEmail($email) {
		try{
			$sql =  'SELECT * FROM user WHERE emailU = ?';

			$req = Bdd::prepare($sql);
			if(Bdd::execute($req, array($email))) {
				if ($row = $req->fetch()) {
					$user = new User($row['idU'], $row['pseudonymeU'], $row['emailU'], $row['passwordU']);
					$req->closeCursor();
					return $user;
				} else {
					$req->closeCursor();
				}
			} else {
				throw new Exception("An error has occured during recover a user by email."); 
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to recover a user by is pseudo
	 *
	 * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
	 * and to provide some background information or textual references.
	 *
	 * @param string $pseudo With a *description* of this argument, these may also
	 *    span multiple lines.
	 *
	 * @return boolean
	 */
	public function getUserByPseudo($pseudo) {
		try{
			$sql =  'SELECT * FROM user WHERE pseudonymeU = ?';

			$req = Bdd::prepare($sql);
			if (Bdd::execute($req, array($pseudo))) {
				if ($row = $req->fetch()) {
					$user = new User($row['idU'], $row['pseudonymeU'], $row['emailU'], $row['passwordU']);
					$req->closeCursor();
					return $user;
				} else {
					$req->closeCursor();
				}
			} else {
				throw new Exception("An error has occured during recover a user by pseudo."); 
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to verify if an email exist
	 *
	 * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
	 * and to provide some background information or textual references.
	 *
	 * @param string $email With a *description* of this argument, these may also
	 *    span multiple lines.
	 *
	 * @return boolean
	 */
	public function isEmailExist($email) {
		try{
			$sql =  'SELECT emailU FROM user WHERE emailU = ?';

			$req = Bdd::prepare($sql);
			if (Bdd::execute($req, array($email))) {
				if ($row = $req->fetch() && $req->rowCount() == 1) {
					$req->closeCursor();
					return true;
				} else {
					$req->closeCursor();
					return false;
				}
			} else {
				throw new Exception("An error has occured during the verification if an email exist.");
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to verify if a pseudo exist
	 *
	 * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
	 * and to provide some background information or textual references.
	 *
	 * @param string $pseudo With a *description* of this argument, these may also
	 *    span multiple lines.
	 *
	 * @return boolean
	 */
	public function isPseudoExist($pseudo) {
		try{
			$sql =  'SELECT emailU FROM user WHERE pseudonymeU = ?';

			$req = Bdd::prepare($sql);
			if (Bdd::execute($req, array($pseudo))) {
				if ($row = $req->fetch() && $req->rowCount() == 1) {
					$req->closeCursor();
					return true;
				} else {
					$req->closeCursor();
					return false;
				}
			} else {
				throw new Exception("An error has occured during the verification if a pseudo exist.");
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to create a user
	 *
	 * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
	 * and to provide some background information or textual references.
	 *
	 * @param string $user With a *description* of this argument, these may also
	 *    span multiple lines.
	 *
	 * @return boolean
	 */
	public function createUser($user) {
		try {
			if (!$this->isPseudoExist($user->getPseudonymeU()) or !$this->isEmailExist($user->getEmailU())) {
				$sql = 'INSERT INTO user(pseudonymeU, emailU, passwordU) VALUES (?, ?, ?)';

				$req = Bdd::prepare($sql);
				if (Bdd::execute($req, array($user->getPseudonymeU(), $user->getEmailU(), $user->getPasswordU()))) {
					$user = $this->getUserById(self::lastIndex());
					$req->closeCursor();
					return $user;
				} else {
					throw new Exception("An error has occured during user creation.");
				}
			}
		} catch(Exception $e) {
			
					echo("6");
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to update a user email
	 *
	 * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
	 * and to provide some background information or textual references.
	 *
	 * @param string $id With a *description* of this argument, these may also
	 *    span multiple lines.
	 * @param string $email With a *description* of this argument, these may also
	 *    span multiple lines.
	 *
	 * @return boolean
	 */
	public function updateUserEmailById($id, $email) {
		try{
			if($this->isEmailExist($email)){
				$sql = 'UPDATE user SET emailU = ? WHERE idU = ?';

				$req = Bdd::prepare($sql);
				if (Bdd::execute($req, array($email, $id)) && $req->rowCount() == 1) {
					$user = $this->getUserById($id);
					$req->closeCursor();
					return $user;
				} else {
					throw new Exception("An error has occured during the user update.");
				}
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to update a user password
	 *
	 * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
	 * and to provide some background information or textual references.
	 *
	 * @param string $id With a *description* of this argument, these may also
	 *    span multiple lines.
	 * @param string $password With a *description* of this argument, these may also
	 *    span multiple lines.
	 *
	 * @return boolean
	 */
	public function updateUserPasswordById($id, $password) {
		try{
			$sql = 'UPDATE user SET passwordU = ? WHERE idU = ?';

			$req = Bdd::prepare($sql);
			if (Bdd::execute($req, array($password, $id)) && $req->rowCount() == 1) {
				$user = $this->getUserById($id);
				$req->closeCursor();
				return $user;
			} else {
				$req->closeCursor();
				return false;
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
	
	/**
	 * Function called to delete a user by its id
	 *
	 * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
	 * and to provide some background information or textual references.
	 *
	 * @param string $id With a *description* of this argument, these may also
	 *    span multiple lines.
	 *
	 * @return boolean
	 */
	public function deleteUserById($id) {
		try{
			$sql = 'DELETE FROM user WHERE idU = ?';

			$req = Bdd::prepare($sql);
			if (Bdd::execute($req, array($id)) && $req->rowCount() == 1) {
				$req->closeCursor();
				return true;
			} else {
				$req->closeCursor();
				return false;
			}
		} catch(Exception $e) {
			die('An error has occured : '.$e->getMessage());
		}
	}
}
?>