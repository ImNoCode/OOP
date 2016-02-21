<?php
	class kendaraan{
		private $merk;
		private $harga;
		
		function __construct($merkKendaraan,$hargaKendaraan){
			$this->merk=$merkKendaraan;
			$this->harga=$hargaKendaraan;
		}
		function BacaMerk(){
			return $this->merk;
		}
		function BacaHarga(){
			return $this->harga;
		}
		function __destruct(){
			echo "Merk dan Harga telah dihapus";
		}
	}
	$mobil = new kendaraan("Avanza",100000000);
	echo "Merk Kendaraan = ".$mobil->BacaMerk()."<br>";
	echo "Harga Mobil = ".$mobil->BacaHarga()."<br>";
?>