<?php
/**
 * The database class
 */
class Bdd {
private static $connect = null;

	/**
	 * Constructor
	 */
	function __construct() {
			// Security
	    $host = "127.0.0.1";
	    $login = "root";             
	    $password = "ccms";
	    $base = "acu";
	     
	    Bdd::getInstance($host, $login, $password, $base);
	}

	/**
	 * Function used to retrun the instance of Db connexion
	 *
	 * This function *recover Db connexion instance* 
	 *
	 * @param string $host, the host
	 * @param string $login, the login
	 * @param string $password, the password
	 * @param string $base, the base
	 *
	 * @return the database connection
	 */
	public static function getInstance($host, $login, $password, $base) {
	    if (is_null(Bdd::$connect)) {
				try {
					Bdd::$connect = new PDO('mysql:host='.$host.';dbname='.$base,$login,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
					Bdd::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch(Exception $e){
					die('An error has occured during connexion to the database : '.$e->getMessage());
				}
	    }
	    return Bdd::$connect;
	}

	/**
	 * Function used to request a connection the database and return the result
	 *
	 * This function *request a connection to the database* and return the result 
	 *
	 * @param string $req, the requested connection
	 *
	 * @return $query the connection result
	 */
	public static function request($req){
	    $query = Bdd::$connect->query($req);
	    return $query;
	}

	/**
	 * Function used to prepare a request and return the result
	 *
	 * This function *recover Db connexion instance* 
	 *
	 * @param string $req, the request to prepare
	 *
	 * @return $query the request prepared
	 */
	public static function prepare($req){
	    $query = Bdd::$connect->prepare($req);
	    return $query;
	}

	/**
	 * Function used to execute a prepared request
	 *
	 * This function *execute a prepared request* 
	 *
	 * @param string $query, the request prepared
	 * @param string $tab, the tab 
	 *
	 * @return $req the request executed
	 */
	public static function execute($query, $tab){
		if ($tab != null) {
    			$req = $query->execute($tab);	
		} else {
			$req = $query->execute();
		}
	    return $req;
	}

	/**
	 * Return the ID of last insertion with auto increment
	 *
	 * This function *return the id of last insertion* in database with auto increment 
	 *
	 * @return the id of last insertion in db
	 */
	public static function lastIndex(){
	    return Bdd::$connect->lastInsertId();
	}
}
 ?>
