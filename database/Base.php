<?php
	class Bdd {
        private static $connect = null;
        private $bdd;
 
		// Construct
        function __construct() {
			// Security
            $host = "localhost";
            $login = "root";             
            $password = "root";
            $base = "acu";
             
            try {
                $this->bdd = new PDO('mysql:host='.$host.';dbname='.$base,$login,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(Exception $e){
                die('An error has occured during connexion to the database : '.$e->getMessage());
            }
        }
 
		// Function used to retrun the instance of Db connexion
        public static function getInstance() {
            if(is_null(self::$connect)) {
                self::$connect = new Bdd(); 
            }
            return self::$connect;
        }
     
     	// Function used to request the database and return the result
        public function request($req){
            $query = $this->bdd->query($req);
            return $query;
        }
 
        // Function used to prepare a request and return the result
        public function prepare($req){
            $query = $this->bdd->prepare($req);
            return $query;
        }
 
        // Function used to execute a prepared request
		public function execute($query, $tab){
            $req = $query->execute($tab);
            return $req;
        }
 
        // Return the ID of last insertion with auto increment 
        public function lastIndex(){
            return $this->bdd->lastInsertId();
        }
    }
 ?>