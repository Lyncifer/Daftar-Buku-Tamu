<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
    <body bgcolor="white">
        <center>
            <img src="uptperpus.jpg" >
        </center>
        <br>
</head>
<body>
    <div>
        <form name="myform" action="2_proses.php" method="POST" onsubmit="return validateForm();">
            <h1><b>DAFTAR PENGUNJUNG</b></h1>
            <p><b>Silahkan isi daftar pengunjung di bawah ini</b></p>

            <table cellpadding="10" cellspacing="15">
                <tr>
                    <td><b>Nama Lengkap:</b><br><input type="text" name="Nama" size="50"></td>
                </tr>
                <tr>
                    <td><b>Instansi Asal:</b><br><input type="text" name="Instansi" size="80"></td>
                </tr>
                <tr>
                    <td><b>Kategori:</b><br>
                        <select name="Kategori">
                            <option value="">Pilih Kategori</option>
                            <option value="Siswa">Siswa</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Guru">Guru</option>
                            <option value="Dosen">Dosen</option>
                            <option value="Umum">Umum</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Untuk Mahasiswa UNJ, Silahkan PILIH daftar FAKULTAS di bawah ini</b></p>
                        <b>Fakultas:</b><br>
                        <select name="Fakultas">
                            <option value="">Pilih Fakultas</option>
                            <option value="FIP">FIP</option>
                            <option value="FIS">FIS</option>
                            <option value="FBS">FBS</option>
                            <option value="FT">FT</option>
                            <option value="FMIPA">FMIPA</option>
                            <option value="FE">FE</option>
                            <option value="FIO">FIO</option>
                            <option value="PASCA">PASCA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="go" value="Daftar">
                        <input type="reset" name="del" value="Hapus">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script type="text/javascript">
        function validateForm() {
            var myform = document.forms['myform'];
            if (myform.elements['Nama'].value == '') {
                alert('Nama belum diisi!');
                return false; // Prevent form submission
            } else if (myform.elements['Instansi'].value == '') {
                alert('Instansi belum diisi!');
                return false; // Prevent form submission
            } else if (myform.elements['Kategori'].value == '') {
                alert('Kategori belum dipilih!');
                return false; // Prevent form submission
            } else {
                alert('Sukses'); // Display success message
                return true; // Allow form submission
            }
        }
    </script>
</body>
<p><a href="index.php">[Home]</a></p>
</html>