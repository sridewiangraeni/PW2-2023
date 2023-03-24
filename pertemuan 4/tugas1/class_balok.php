
<?php
		/**
		 * Task 1
		 * Buatlah class balok yang memiliki:
		 * 1. Private property panjang, lebar dan tinggi
		 * 2. Method __construct, getLuas, getKeliling dan getVolume
		 */ 

    class Balok {
        /*private*/ public $panjang;
        /*private*/ public $lebar;
        /*private*/ public $tinggi;
    
        public function __construct($p, $l, $t) {
		        // code..
                $this->panjang = $p;
                $this->lebar = $l;
                $this->tinggi = $t;
        }
    
        public function getLuas() {
					  // code..
                      $luas = 2 * ($this->panjang*$this->lebar + $this->lebar*$this->tinggi + $this->panjang*$this->tinggi);
                      return $luas;
				}
    
        public function getKeliling() {
            // code..
            $kel = 4 * ($this->panjang + $this->lebar + $this->tinggi);
            return $kel; 
        }
    
        public function getVolume() {
            // code..
            $vol = $this->panjang * $this->lebar * $this->tinggi;
            return $vol;
        }
    }
?>