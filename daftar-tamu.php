<!DOCTYPE html>
<html></html>
<head>
 <title>UPT PERPUSTAKAAN UNIVERSITAS NEGERI JAKARTA</title>
</head>
<body>
 <h2>UPT PERPUSTAKAAN UNIVERSITAS NEGERI JAKARTA</h2>
 <td width="68"><a href="index.php">[ Home ]</td>
 <td width="112"><a href="2.php">[Isi Buku tamu] </a></td>
 <h3>DAFTAR PENGUNJUNG</h3>
 <table cellpadding="5" cellspacing="0" border="1">
 <tr bgcolor="#CCCCCC">
 <th>No.</th>
 <th>Tanggal</th>
 <th>Nama</th>
 <th>Instansi</th>
 <th>Kategori</th>
 <th>Fakultas</th>
 </tr>
 <?php
 //iclude file koneksi ke database
 include('connect.php');

//query ke database dg SELECT table bukutamu diurutkan berdasarkanNomor
 $query=mysqli_query(mysql: $connect, query: "SELECT * FROM bukutamu ORDER BY id DESC") or die(mysql_error());

 //cek, apakakah hasil query di atas mendapatkanhasil atau tidak (data kosong atau tidak)
 if(mysqli_num_rows($query) == 0){ //ini artinya jika data hasil query di atas kosong

 //jika data kosong, maka akan menampilkan row kosong
 echo'<tr><td colspan="6">Tidak ada data!</td></tr>';
  }
  else  { //else ini artinya jika data hasil query ada (data di database tidak kosong)
 
  //jika data tidak kosong,  maka akan melakukan perulangan while
  $no = 1;  //membuat variabel $no  untuk membuat nomor urut

 
  while($data = mysqli_fetch_assoc($query)) { //perulangan while dg membuat variabel $data yang akan mengambil data di database
  //menampilkan row dengan data di database
  echo '<tr>';
  echo '<td>'.$no.'</td>';  //menampilkan nomor urut
  echo '<td>'.date('Y-md').'</td>'; //menampilkan data tanggal daftar dari database 
  echo '<td>'.$data['nama'].'</td>';  //menampilkan data  nama dari database
  echo '<td>'.$data['instansi'].'</td>'; //menampilkan data instansi dari database
  echo '<td>'.$data['kategori'].'</td>  '; //menampilkan data  kategori dari database
  echo  '<td>'.$data['fakultas'].'</td>'  ; //menampilkan data  fakultas dari database
  echo '</tr>';
  
   $no++; //menambah jumlah nomor urut setiap  row
   }}
   ?>
   </table>
  </body>
  </html> 