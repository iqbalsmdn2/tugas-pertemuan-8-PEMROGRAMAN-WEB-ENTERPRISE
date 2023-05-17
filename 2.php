<!DOCTYPE html>
<html>
<head>
	<title>Program Kasir</title>
</head>
<body>
	<h2>Program Kasir</h2>
	<?php
		// Data barang yang dijual
		$daftar_barang = array(
			"1001" => array("nama" => "Sabun Lifebuoy", "harga" => 1500),
			"1002" => array("nama" => "Permen Blaster", "harga" => 5600),
			"1003" => array("nama" => "Pasta Gigi Pepsodent", "harga" => 4560),
			"1004" => array("nama" => "Madu Arbain", "harga" => 30000),
			"1005" => array("nama" => "Kecap ABC", "harga" => 7250),
			"1006" => array("nama" => "Saus Tomat ABC", "harga" => 6700),
			"1007" => array("nama" => "Gula Gulaku", "harga" => 8900),
			"1008" => array("nama" => "Rinso", "harga" => 7100),
			"1009" => array("nama" => "Super Pel", "harga" => 6450),
			"1010" => array("nama" => "Permen Tango", "harga" => 5600)
		);

		if(isset($_POST['submit1'])) {
			$banyak_barang = $_POST['banyak_barang'];
			echo "<form method='post'>";
			for($i=1; $i<=$banyak_barang; $i++) {
				echo "Barang ke-$i <input type='text' name='kode_barang[]' placeholder='Masukkan Kode Barang' required>";
				echo "<input type='number' name='jumlah_barang[]' placeholder='Jumlah Barang' required><br>";
			}
			echo "<input type='submit' name='submit2' value='Submit'>";
			echo "</form>";
		} elseif(isset($_POST['submit2'])) {
			$kode_barang = $_POST['kode_barang'];
			$jumlah_barang = $_POST['jumlah_barang'];
			$total_harga = 0;
			echo "<h3>Daftar Barang Yang Dibeli</h3>";
			echo "<table border='1'>";
			echo "<tr><th>Kode Barang</th><th>Nama Barang</th><th>Jumlah Barang</th><th>Harga Satuan</th></tr>";
			for($i=0; $i<count($kode_barang); $i++) {
				$harga_satuan = $daftar_barang[$kode_barang[$i]]['harga'];
				$nama_barang = $daftar_barang[$kode_barang[$i]]['nama'];
				$jumlah = $jumlah_barang[$i];
				$harga = $harga_satuan * $jumlah;
				$total_harga += $harga;
				echo "<tr><td>$kode_barang[$i]</td><td>$nama_barang</td><td>$jumlah</td><td>Rp. $harga_satuan,-</td></tr>";
			}
			echo "<tr><td colspan='3'>TOTAL HARGA :</td><td>Rp. $total_harga,-</td></tr>";
			echo "</table>";
		} else {
			echo "<form method='post'>";
		echo "<label>Masukkan jumlah barang yang akan dibeli :</label>";
		echo "<input type='number' name='banyak_barang' placeholder='Jumlah Barang' required>";
		echo "<br><br>";
		echo "<input type='submit' name='submit1' value='Submit'>";
		echo "</form>";
	}
?>