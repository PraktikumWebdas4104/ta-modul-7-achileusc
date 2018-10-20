<form method="post">
	<table>
		<h1>Pendafataran</h1>
		<tr>
			<td>Nama </td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM </td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin </td>
			<td>:</td>
			<td><input type="radio" name="jenis_kelamin" value="Laki - laki">Laki - laki
				<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Program Studi </td>
			<td>:</td>
			<td><select name="prodi">
				<option value="isiprodi">Isi Program Studi</option>
				<option value="Sistem Informasi">Sistem Infromasi</option>
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
				<option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
				<option value="MBTI">MBTI</option>
				<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
			</select></td>
		</tr>
		<tr>
			<td>Fakultas </td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="isifak">Isi Fakultas</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
				<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
				<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option>
			</select></td>
		</tr>
		<tr>
			<td>Asal </td>
			<td>:</td>
			<td><input type="textarea" name="asal"></td>
		</tr>
		<tr>
			<td>Moto Hidup </td>
			<td>:</td>
			<td><input type="textarea" name="moto" cols=10 row=10></td>
		</tr>
		<tr>
			<td><input type="submit" name="kirim" value="Kirim"></td>
		</tr>
	</table>
</form>

<?php

if (isset($_POST['kirim'])) {
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "mahasiswa";

	$conn = new mysqli($host, $username, $password, $db);

	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jenis = $_POST['jenis_kelamin'];
	$prodi = $_POST['prodi'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];

	$sql = "INSERT INTO `data_mhs` (`nama`, `nim`, `jenis_kelamin`, `prodi`, `fakultas`, `asal`, `moto`)VALUES('$nama','$nim','$jenis','$prodi','$fakultas','$asal','$moto')";
	$has = mysqli_query($conn, $sql);
	echo "Pendaftaran Berhasil, Silahkan <a href='home.php'>masuk</a> untuk melanjutkan";
	# code...
}

?>