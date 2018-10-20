<form method="post">
	<td><input type="text" name="kotakcari" placeholder="Masukkan NIM"></td>
	<td><input type="submit" name="cari" value="Cari"></td>
</form>
<br>
<br>
<table border="1">
	<tr>
		<th>Nama</th>
		<th>NIM</th>
		<th>Jenis Kelamin</th>
		<th>Program Studi</th>
		<th>Fakultas</th>
		<th>Asal</th>
		<th>Moto Hidup</th>
		<th>Aksi</th>
	</tr>

	<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "mahasiswa";

	$conn = new mysqli($host, $username, $password, $db);

	if (isset($_POST['cari'])) {
		$nim = $_POST['kotakcari'];

		$qry = "SELECT nama, nim FROM data_mhs WHERE nim = $nim";
		$has = mysqli_query($conn, $qry);

		$nomor=1;
		while($row=mysqli_fetch_array($has)){
			echo "<tr>
					<td>".$row['nim']."</td>
					<td>".$row['nama']."</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><a href='delete.php'>Delete</a></td>
					</tr>";

			$nomor++;
		}
		# code...
	}else{
		$host = "localhost";
	$username = "root";
	$password = "";
	$db = "mahasiswa";

	$conn = new mysqli($host, $username, $password, $db);

	$qry = "SELECT * FROM data_mhs";
		$has = mysqli_query($conn, $qry);

		$nomor=1;
		while($row=mysqli_fetch_array($has)){
			echo "<tr>
					<td>$row[0]</td>
					<td>$row[1]</td>
					<td>$row[2]</td>
					<td>$row[3]</td>
					<td>$row[4]</td>
					<td>$row[5]</td>
					<td>$row[6]</td>
					<td><a href = 'edit.php'>Edit</a> | <a href='delete.php'>Delete</a></td>
					</tr>";

			$nomor++;
		}
}
?>
</table>