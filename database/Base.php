<?php
	class Bdd {
        private static $connect = null;
        //private $bdd;
 
		// Construct
        function __construct() {
			// Security
            $host = "localhost";
            $login = "root";             
            $password = "";
            $base = "acu";
             
            Bdd::getInstance($host, $login, $password, $base);
        }
 
		// Function used to retrun the instance of Db connexion
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
     
     	// Function used to request the database and return the result
        public static function request($req){
            $query = Bdd::$connect->query($req);
            return $query;
        }
 
        // Function used to prepare a request and return the result
        public static function prepare($req){
            $query = Bdd::$connect->prepare($req);
            return $query;
        }
 
        // Function used to execute a prepared request
		public static function execute($query, $tab){
			if ($tab != null) {
            	$req = $query->execute($tab);	
			} else {
				$req = $query->execute();
			}
            return $req;
        }
 
        // Return the ID of last insertion with auto increment 
        public static function lastIndex(){
            return Bdd::$connect->lastInsertId();
        }
    }
 ?>