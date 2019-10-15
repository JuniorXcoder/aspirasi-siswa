<?php

function subcomment($koneksi) {
	if (isset($_POST['submit'])) {
		$user = $_POST['user'];
		$date = $_POST['date'];
		$komentar = $_POST['komentar'];

		$sql = "INSERT INTO `komentar`(`user`, `date`, `komentar`) VALUES ('$user','$date','$komentar')";
		$result = $koneksi->query($sql);
	}
}

function showcomment($koneksi) {
			$sql = "SELECT * FROM `komentar`";
			$result = $koneksi->query($sql);
			while ($row = $result->fetch_assoc()) {
				echo "<div class='boxcomment'>";
					echo "<h4 class='media-heading'>";
					Echo $row['user']."</h4>";
					echo "<p>";
					Echo nl2br($row['komentar']);
				echo "</p>
				<div class='tanggal'>
				<p>".$row['date']."</p>
				</div>
				";
				echo "</div>";
			}
}