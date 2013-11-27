<!DOCTYPE html>
<html lang="en">
<head>
<title>Tugas Praktikum</title>
<link href="/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="/bootstrap/dist/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/bootstrap/dist/css/docs.css" rel="stylesheet">
    <link href="/bootstrap/dist/js/google-code-prettify/prettify.css" rel="stylesheet">

   <!-- CSS just for the tests page -->
    <link href="css-tests.css" rel="stylesheet">
</head>
<body>
        <h2>Pengurutan</h2>
        <div class="row">
                <div class="span6">
                <table class="table table-bordered" border="1" width="500px">                        
<?php
require "koneksi.php";
$query1="select * from mahasiswa order by nim ";
$urut='asc';
$urutbaru='asc';
if(isset($_GET['orderby'])){
        $orderby=$_GET['orderby'];
        $urut=$_GET['urut'];
        
        $query1="SELECT * FROM mahasiswa order by $orderby $urut ";
        if($urut=='asc'){
                $urutbaru='desc';
                
        }else{
                $urutbaru='asc';
        }
}
?>
<th>
                                <td><a href='tgsprak.php?orderby=nim&urut=<?=$urutbaru;?>'>Nim</a></td>
                                <td><a href='tgsprak.php?orderby=nama&urut=<?=$urutbaru;?>'>Nama</a></td>
                                <td>Alamat</a></td>
</th>
                                
<?php
$result=mysql_query($query1) or die(mysql_error());
$no=1;
while($rows=mysql_fetch_object($result)){
                        ?>
                        <tr>
                                <td><?php echo $no
                                ?></td>
                                <td><?php                echo $rows -> nim;?></td>
                                <td><?php                echo $rows -> nama;?></td>
                                <td><?php                echo $rows -> alamat;?></td>
                        </tr>
                        <?php
$no++;
}?>
                </table>        
        </div>
</div>