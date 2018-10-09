<?php
include 'conn.php';
if(isset($_POST['submit'])){
 	
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jenis =$_POST['gender'];
	$fakultas=$_POST['Fakultas'];
	$hb =$_POST['hobi'];
	$kls=$_POST['kelas'];
	$alm=$_POST['alamat'];


 	$sql = "INSERT INTO data VALUES('$nim','$nama',$jenis','$fakultas','$hb','$kls','$alm')";
	if (mysqli_query($con, $sql)){
		echo "<center>Database sudah masuk</center>";
	}else{
		echo "ERROR";
	}
	}
?>