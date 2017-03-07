<?php
	include_once(dirname( __FILE__ ) . "/../database/Base.php");
	include_once(dirname( __FILE__ ) . "/../models/User.php");

	class UserController extends Bdd {	
		// Construct
		function __construct() {
			parent::__construct();
	    }
		
		// Function called to try to connect an user
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
		
		// Function called to recover all users of the DB
		public function getAllUsers() {
			$sql =  'SELECT * FROM user ORDER BY idU';
			
			$arrayUsers = array();
			foreach  (Bdd::request($sql) as $row) {
				$User = new User($row['idU'], $row['pseudonymeU'], $row['emailU'], $row['passwordU']);
				array_push($arrayUsers, $User);
		    }
			
			return $arrayUsers;
		}
		
		// Function called to recover a user by is ID
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
		
		// Function called to recover a user by is email
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
		
		// Function called to recover a user by is pseudo
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
		
		// Function called to verify if an email exist
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
		
		// Function called to verify if a pseudo exist
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
		
		// Function called to update a user email
		public function updateUserEmailById($id, $email) {
			try{
				$sql = 'UPDATE user SET emailU = ? WHERE idU = ?';

				$req = Bdd::prepare($sql);
				if (Bdd::execute($req, array($email, $id)) && $req->rowCount()) {
					$user = $this->getUserById($id);
					$req->closeCursor();
					return $user;
				} else {
					return false;
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}
		}
		
		// Function called to create a user 
		/*public function createUser($user) {
			try{
				$sql = 'UPDATE user SET emailU = ? WHERE idU = ?';

				$req = Bdd::prepare($sql);
				if (Bdd::execute($req, array($user->$pseudonymeU, $user->$emailU, $user->$idU)) && $req->rowCount()) {
					$user = $this->getUserById($id);
					$req->closeCursor();
					return $user;
				} else {
					return false;
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}
		}/*/
		
		// Function called to update a user password
		public function updateUserPasswordById($id, $password) {
			try{
				$sql = 'UPDATE user SET passwordU = ? WHERE idU = ?';

				$req = Bdd::prepare($sql);
				if (Bdd::execute($req, array($password, $id)) && $req->rowCount() == 1) {
					$user = $this->getUserById($id);
					$req->closeCursor();
					return $user;
				} else {
					return false;
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}
		}
		
		// Function called to delete a user by its id
		public function deleteUserById($id) {
			try{
				$sql = 'DELETE FROM user WHERE idU = ?';

				$req = Bdd::prepare($sql);
				if (Bdd::execute($req, array($id)) && $req->rowCount() == 1) {
					$req->closeCursor();
					return true;
				} else {
					return false;
				}
			} catch(Exception $e) {
				die('An error has occured : '.$e->getMessage());
			}
		}
	}
?>