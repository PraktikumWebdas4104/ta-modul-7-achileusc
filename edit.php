<form method="post">
	<table>
		<h1>Pendafataran</h1>
		<tr>
			<td>Nama </td>
			<td>:</td>
			<td><input type="" name="nama"></td>
		</tr>
		<tr>
			<td>NIM </td>
			<td>:</td>
			<td><input type="" name="nim"></td>
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

	$sql = "UPDATE data_mhs SET nama = '$nama', nim = '$nim', jenis_kelamin = '$jenis', prodi = '$prodi', fakultas = '$fakultas', asal = '$asal', moto = '$moto' WHERE nim = '$nim'";

	$has = mysqli_query($conn, $sql);

	if ($has) {
		echo "Data Telah diperbaharui...";
		header("location:home.php");
		# code...
	}else{
		echo "Data gagal diperbaharui...";
	}
}
?>