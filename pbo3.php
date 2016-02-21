<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php
		class kalkulator{
			var $hasil,$x,$y;
			function tampilForm(){
			echo '<form action="'.$_SERVER['PHP_SELF'].'" method="POST">
				<table>
					<tr>
						<td><input type="number" name="x"></td>
						<td><select name="operasi">
							<option value="tambah">+</option>
							<option value="kurang">-</option>
							<option value="kali">x</option>
							<option value="bagi">/</option>
						</select></td>
						<td><input type="number" name="y"></td>
						<td><input type="submit" value="Hitung"></td>
					</tr>
				</table>
			</form>';
			}
			function tambah($x,$y){
				$this->$x=$x;
				$this->$y=$y;
				$hasil = $this->$x+$this->$y;
				return $hasil;
			}
			function kurang($x,$y){
				$this->$x=$x;
				$this->$y=$y;
				$hasil = $this->$x-$this->$y;
				return $hasil;
			}
			function kali($x,$y){
				$this->$x=$x;
				$this->$y=$y;
				$hasil = $this->$x*$this->$y;
				return $hasil;
			}
			function bagi($x,$y){
				$this->$x=$x;
				$this->$y=$y;
				$hasil = $this->$x/$this->$y;
				return $hasil;
			}
		}
		$kalkulator=new kalkulator();
		$kalkulator->tampilForm();
		
		if($_POST){
		$x = $_POST['x'];		
		$y = $_POST['y'];		
		if($_POST['operasi']=='tambah'){
					echo $kalkulator->tambah($x,$y);
				}elseif($_POST['operasi']=='kurang'){
					echo $kalkulator->kurang($x,$y);
				}elseif($_POST['operasi']=='kali'){
					echo $kalkulator->kali($x,$y);
				}else{
					echo $kalkulator->bagi($x,$y);
				}
		}
	?>
	</body>
</html>