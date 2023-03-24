<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// code.

	require_once 'class_balok.php';

	$balok1 = new Balok(29, 16, 7);
	$balok2 = new Balok(12, 6, 8);
	$balok3 = new Balok(10, 8, 5);
	$balok4 = new Balok(12, 7, 5);

	echo '<br>Luas Balok 1'.$balok1->getLuas();
	echo '<br>Luas Balok 2'.$balok2->getLuas();
	echo '<br>Luas Balok 3'.$balok3->getLuas();
	echo '<br>Luas Balok 4'.$balok4->getLuas();
	echo '<br>';
	echo '<br>Kel Balok 1'.$balok1->getKeliling();
	echo '<br>Kel Balok 2'.$balok2->getKeliling();
	echo '<br>Kel Balok 3'.$balok3->getKeliling();
	echo '<br>Kel Balok 4'.$balok4->getKeliling();
	echo '<br>';
	echo '<br>Vol Balok 1'.$balok1->getVolume();
	echo '<br>Vol Balok 2'.$balok2->getVolume();
	echo '<br>Vol Balok 3'.$balok3->getVolume();
	echo '<br>Vol Balok 4'.$balok4->getVolume();
?>