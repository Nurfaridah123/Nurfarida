<?php

	class Toko{
		

			public $jdl, $pnrbt, $nmpnls, $hal;
			public function __construct($jdl = " nama produk", $pnrbt = "Jenis kain ", $nmpnls = "Lable", $hal = "Harga"){
				$this->jdl = $jdl;
				$this->pnrbt = $pnrbt;
				$this->nmpnls = $nmpnls;
				$this->hal = $hal;
			
			}
			public function getinfoBook(){

				$bku = "<br>Nama Produk : {$this->jdl}, <br>Jenis kain : {$this->pnrbt}, <br>Lable : {$this->nmpnls}, <br>Harga : {$this->hal}";

				return $bku;		
			}
	}

	Class BukuSatu extends Butik {

		public function getinfoBook(){
			$bku = "TOKO  1 : ".parent::getinfoBook();
			return $bku;
		
		}
	}
	class BukuDua extends Butik{

		public $rwyt;
		public function __construct($jdl, $pnrbt, $nmpnls, $hal, $rwyt){
			parent::__construct($jdl, $pnrbt, $nmpnls,$hal, $rwyt);
			$this->rwyt = $rwyt;
		}
		public function getinfoBook(){

			$bku = " TOKO 2 : ".parent::getinfoBook();
			return $bku;
		}
	}	

	$bku1 = new BukuSatu("Baju", "Balotelli", "UCITAYLOR", "120.000");
	$bku2 = new BukuDua("Celana", "Denim", "UCITAYLOR", "250.000", "250.000 ");

	echo $bku1->getinfoBook();
	echo "<br>";
	echo "<br>";
	echo $bku2->getinfoBook();


?>