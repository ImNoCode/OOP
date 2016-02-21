<?php
	class laptop{
		protected $pemilik;
		
		protected function hidupkan_laptop(){
			return "Hidupkan laptop";
		}
	}
	$laptopimam=new laptop();
	$laptopimam->pemilik="Imam<br>";
	echo $laptopimam->pemilik;
	echo $laptopimam->hidupkan_laptop();
?>