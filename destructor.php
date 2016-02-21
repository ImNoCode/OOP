<?php
	class Orang{
		function __construct(){
			echo "Selamat datang ! <br>";
		}
		function belajar(){
			echo "Mari terus belajar <br>";
		}
		function __destruct(){
			echo "Semangat !";
		}
	}
	$obj_orang = new Orang();
	$obj_orang->belajar();
?>