<?php
    define("BASE_URL", "http://diver.sistemasibrian.com/");
    class Conexion{
		public function get_conexion(){
			$user = "wwwrun";
			$pass = "sistemaSibrian@*09";
			$host = "localhost";
			$db = "diver";
			$conexion = new PDO("mysql:host=$host;dbname=$db;",$user, $pass);
			return $conexion;
		}
	}
?>