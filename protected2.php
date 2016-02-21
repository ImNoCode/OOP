<?php
	class laptop{
		protected $pemilik="Imam ";
		
		public function akses_pemilik(){
			return $this->pemilik;
		}
		protected function hidupkan_laptop(){
			return "Hidupkan laptop";
		}
		public function paksa_hidup(){
			return $this->hidupkan_laptop();
		}
	}
	$laptopimam=new laptop();
	echo $laptopimam->akses_pemilik();
	echo $laptopimam->paksa_hidup();
?>