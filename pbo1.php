<?php
	class Mobil
	{
		var $warna="Biru";
		var $merk="BMW";
		var $harga=1000000000;
		
		function gantiWarna($warnaBaru){
			$this->warna=$warnaBaru;
		}
		function tampilWarna(){
			echo "Warna mobilnya ".$this->warna;
		}
	}
	$a=new Mobil();
	$b=new Mobil();
	echo "<b>Mobil pertama</b><br>";
	$a->tampilWarna();
	echo "<br>Mobil pertama ganti warna menjadi <br>";
	$a->gantiWarna("Merah");
	$a->tampilWarna();
	echo"<br><b>Mobil kedua</b><br>";
	$b->gantiWarna("Hijau");
	$b->tampilWarna();
?>