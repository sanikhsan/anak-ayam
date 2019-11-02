<?php
	//Nilai Anak Ayam pakai integer
	$anak_ayam = 5;
	//Menampilkan output program seperti dicontoh
	echo "<font color='blue'> Tekotek kotek Anak Ayam Turun $anak_ayam <br>";
	//Melakukan Looping hingga anak ayam habis
	for ($i=$anak_ayam-1; $i > 0; $i--) { 
		//ketentuan menggunakan modulus jika genap warna orange dan jika ganjil warna biru
		if($i %2 == 0){
			echo "<font color='orange'> Mati Satu Tinggal $i <br>";
		}else{
			echo "<font color='blue'> Mati Satu Tinggal $i <br>";
		}
		//Jika anak ayam sudah bernilai 1 maka akan tampil tulisan anak ayam habis semua T_T
		if($i == 1){
			echo "Anak Ayam Habis Semua T_T";
		}
	}
?>