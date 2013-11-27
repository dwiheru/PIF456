<html>
<head>
<link href ="/bootstrap/dist/css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
<div class="input-group">
<a class="navbar-brand"><h1> Pencarian Mahasiswa Universitas Negeri Malang </h1></a>
</div>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
<div class="input-group">
<div class="bs-example">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                Pencarian Nama :
            </a>
        
        <div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse">
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input class="form-control" name="nama" type="text" placeholder="Masukkan Nama"></input>
                </div>
                <button class="btn btn-default" type="submit">
                    <b>Cari!</b>
                </button>
            </form>
        </div>
		</div>
    </nav>
</div>
  
</form>




<?php 
if (isset($_GET['nama'])) { 
  require_once './koneksi.php'; 
 
  // Kata kunci pencarian 
  $key = $_GET['nama']; 
 
  // Variabel $sql berisi pernyataan SQL pencarian 
  $sql = "SELECT * FROM mahasiswa 
          WHERE nama = '$key'"; 
 
  $res = mysql_query($sql); 
 
  if ($res) { 
    $num = mysql_num_rows($res); 
    if ($num) { 
      echo 'Ditemukan ' . $num . ' row(s)'; ?> 

<table class="table table-bordered" border="1" width="500px"> 
      <tr> 
        <th>#</th> 
        <th width=100>NIM</th> 
        <th>Nama</th> 
        <th>Alamat</th> 
      </tr> 
      <?php 
      $i = 1; 
      while ($row = mysql_fetch_row($res)) { ?> 
        <tr> 
          <td> 
            <?php echo $i;?> 
          </td> 
          <td> 
            <?php echo $row[0];?> 
          </td> 
          <td> 
            <?php echo $row[1];?> 
          </td> 
          <td> 
            <?php echo $row[2];?> 
 </td> 
        </tr> 
        <?php 
        $i++; 
      } 
      ?> 
      </table> 
    <?php 
    } else { 
      echo 'Data Tidak Ditemukan'; 
    } 
  } 
 
} else { 
  echo 'Masukkan kata kunci pencarian'; 
} 
 
?> 
 
</body> 
</html> 

      
</body>
</html>