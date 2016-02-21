<?php
	class laptop{
		public $pemilik;
		
		public function hidupkan_laptop(){
			return "Hidupkan laptop";
		}
	}
	$laptopimam=new laptop();
	$laptopimam->pemilik="Imam ";
	echo $laptopimam->pemilik;
	echo $laptopimam->hidupkan_laptop();
?>