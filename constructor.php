<?php
	class Orang{
		function __construct(){
			echo "Selamat datang ! <br>";
		}
		function belajar(){
			echo "Mari terus belajar <br>";
		}
		
	}
	$obj_orang = new Orang();
	$obj_orang->belajar();
?>