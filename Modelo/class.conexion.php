<?php
    define("BASE_URL", "http://diver.sistemasibrian.com/");
    class Conexion{
		public function get_conexion(){
			$user = "yahir";
			$pass = "200900020V@l3";
			$host = "localhost";
			$db = "diver";
			$conexion = new PDO("mysql:host=$host;dbname=$db;",$user, $pass);
			return $conexion;
		}
	}
?>