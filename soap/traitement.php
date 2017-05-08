<?php 
	if (isset($_GET["type"]) && !empty($_GET["type"])) {
		if (isset($_GET["number_1"]) && isset($_GET["number_2"])) {
			require_once(dirname( __FILE__ ) . "/lib/nusoap.php");
			require_once(dirname( __FILE__ ) . "/models/Calculatrice.php");

			define("ADDITION_STR", "addition");
			define("SOUSTRACTION_STR", "soustraction");
			define("MULTIPLICATION_STR", "multiplication");
			define("DIVISION_STR", "division");

			error_reporting(E_ERROR);

			$server = new soap_server();

			$namespace = dirname( __FILE__ ) . "/traitement.php";
			$server->wsdl->schemaTargetNamespace = $namespace;

			$calculatrice = new Calculatrice();
			$nombre_1 = $_GET["number_1"];
			$nombre_2 = $_GET["number_2"];

			if ($_GET["type"] == ADDITION_STR) {
				$server->configureWSDL($calculatrice->addition($nombre_1, $nombre_2));
				$server->register(ADDITION_STR);
			} else if ($_GET["type"] == SOUSTRACTION_STR) {
				$server->configureWSDL($calculatrice->soustraction($nombre_1, $nombre_2));
				$server->register(SOUSTRACTION_STR);
			} else if ($_GET["type"] == MULTIPLICATION_STR) {
				$server->configureWSDL($calculatrice->multiplication($nombre_1, $nombre_2));
				$server->register(MULTIPLICATION_STR);
			} else if ($_GET["type"] == DIVISION_STR) {
				$server->configureWSDL($calculatrice->division($nombre_1, $nombre_2));
				$server->register(DIVISION_STR);
			}

			$POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';

			$server->service($POST_DATA);

			exit(); 
		}
	}
?> 