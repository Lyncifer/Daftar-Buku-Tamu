<?php
include("connect.php");
    $Nama = $_POST['Nama'];
    $Instansi = $_POST['Instansi'];
    $Kategori = $_POST['Kategori'];
    $Fakultas = $_POST['Fakultas'];
    $tanggal = date("Y-m-d");
    $sql = "INSERT INTO bukutamu(Nama, Instansi, Kategori, Fakultas, tanggal) VALUES('$Nama', '$Instansi', '$Kategori', '$Fakultas', '$tanggal')";
if
(mysqli_query($connect,$sql)){
 echo "";
 echo 'Data berhasil ditambahkan!';
 echo '<a href="2.php">Kembali</a>';
}
else{
 die(mysqli_error());
}
?>
