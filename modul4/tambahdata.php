<html>
<head><title>Tambah data</title></head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <table>
                        <tr>
                                <td>NIM</td>
                                <td><input type="text" name="nim"/></td>
                        </tr>
                        <tr>
                                <td>Nama</td>
                                <td><input type="text" name="nama" size=40/></td>
                        </tr>
                        <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat" size=60/></td>
                        </tr>
                        <tr>
                                <td></td>
                                <td><input type="submit" name="Simpan"/></td>
                        </tr>
        </table>
</form>
<?php
require "koneksi.php";
if(isset($_POST['nim']) && isset($_POST['nama'])) {
        $nim         = $_POST['nim'];
        $nama         = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $res = mysql_query("INSERT INTO mahasiswa VALUES ('".$nim."', '" .$nama."', '" .$alamat."')");
        if ($res) {
                echo '<br/>';
                echo 'Data Berhasil Ditambahkan';
                mysql_close();                
        } else {
                echo '<br/>';
                echo "Gagal Menambah Data <br/>";
                echo mysql_error();
        }
}
echo '<br/>';
require "seleksidata.php";
?>
</body>
</html>