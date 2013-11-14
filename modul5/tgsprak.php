<h2>Pengurutan</h2>
    <table border="1" width="500px">      
<?php
require "koneksi.php";
$query1="select * from mahasiswa order by nama ";
$urut='asc';
$urutbaru='asc';

if(isset($_GET['orderby'])){

  $orderby=$_GET['orderby'];
  $urut=$_GET['urut'];
  $query1="SELECT * FROM  mahasiswa order by $orderby $urut ";
  if($urut=='asc'){
    $urutbaru='desc';
  }else{
    $urutbaru='asc';
  }
}
?>

<th>
        <td><a href='tgsprak.php?orderby=nim&urut=<?=$urutbaru;?>'>nim</a></td>
        <td><a href='tgsprak.php?orderby=nama&urut=<?=$urutbaru;?>'>nama</a></td>
        <td>alamat</a></td>
</th>
<?php
$result=mysql_query($query1) or die(mysql_error());
$no=1; 
while($rows=mysql_fetch_object($result)){
      ?>
      <tr>
        <td><?php echo $no
        ?></td>
        <td><?php    echo $rows -> nim;?></td>
        <td><?php    echo $rows -> nama;?></td>
        <td><?php    echo $rows -> alamat;?></td>
      </tr>
      <?php
$no++;
}?>
 </table> 
