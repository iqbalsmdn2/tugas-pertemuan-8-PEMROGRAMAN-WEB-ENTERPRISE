<!DOCTYPE html>
<html>
<head>
	<title>Pencarian Bilangan</title>
</head>
<body>
	<h2>Pencarian Bilangan</h2>
	<form method="post">
		Masukkan Bilangan yang dicari: <input type="text" name="bilangan">
		<input type="submit" name="submit" value="Cari">
	</form>
	<?php
		$data = array(273, 281, 384, 119, 392, 184, 105, 129, 204, 219, 274, 275, 263);

		// Pengecekan apakah tombol submit ditekan
		if(isset($_POST['submit'])) {
			$bilangan_cari = $_POST['bilangan'];
			$index = array_search($bilangan_cari, $data);
			if($index === false) {
				echo "Bilangan yang Anda cari tidak ditemukan dalam data";
			} else {
				echo "Bilangan yang Anda cari ada dalam data pada urutan ke-" . ($index + 1);
			}
		}
	?>
</body>
</html>