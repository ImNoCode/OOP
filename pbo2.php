<?php
	class Kalkulator{
		var $hasil;
		
		function tambah($x,$y){
			$this->hasil=$x+$y;
		}
		function kurang($x,$y){
			$this->hasil=$x-$y;
		}
		function kali($x,$y){
			$this->hasil=$x*$y;
		}
		function bagi($x,$y){
			$this->hasil=$x/$y;
		}
		function cetak(){
			echo "Nilai variabel hasil = ".$this->hasil."<br>";
		}
	}
	$x=6;
	$y=3;
	$kalkulator = new Kalkulator();
	
	echo 'Operasi Penjumlahan '.$x.' + '.$y.'<br>';
	$kalkulator->tambah($x,$y);
	$kalkulator->cetak();
	
	echo "Operasi Pengurangan ".$x." - ".$y."<br>";
	$kalkulator->kurang($x,$y);
	$kalkulator->cetak();
	
	echo "Operasi Perkalian ".$x." * ".$y."<br>";
	$kalkulator->bagi($x,$y);
	$kalkulator->cetak();
	
	echo "Operasi Pembagian ".$x." / ".$y."<br>";
	$kalkulator->bagi($x,$y);
	$kalkulator->cetak();
?>