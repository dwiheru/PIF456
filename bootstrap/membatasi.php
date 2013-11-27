<html> 
<head> 
  <title>Limitasi Data</title> 
</head> 
 <link href ="/bootstrap/dist/css/bootstrap.css" rel="stylesheet" media="screen">
<body> 
 <div class="bs-example">

	<ul class="nav nav-pills">
        <li class="active">
            <a> Penampilan Data</a>
        </li>
        <li>
            <a> Jumlah Tampilan Data per Halaman <b>:</b></a>
        </li>
       <Br>
		<li class="dropdown">
		<form method="post" action="" name="frm_select"> 
			<select name="row_page" onchange="document.forms.frm_select.submit();"> 
			<option>-- pilih --</option> 
			<option value="5">5</option> 
			<option value="10">10</option> 
			<option value="20">20</option> 
			<option value="50">50</option> 
			<option value="100">100</option> 
		</select>
  </form> 
 
</li>
    </ul>

</div>
  
<?php 
if (isset($_POST['row_page']) && $_POST['row_page']) { 
  require_once './koneksi.php'; 
 
  // Batas baris data 
  $row = $_POST['row_page']; 
 // LENGKAPI 
 // Variabel $sql berisi pernyataan SQL retrieve dg limitasi 
 $sql="SELECT *FROM mahasiswa LIMIT $row";
 
  $res = mysql_query($sql); 
 
  if ($res) { 
    if (mysql_num_rows($res)) { ?> 
 
      <table class="table table-condensed" border=1 cellspacing=1 cellpadding=5>
      <tr> 
        <th width=10>#</th> 
        <th width=100>NIM</th> 
        <th width=150>Nama</th> 
        <th width=200>Alamat</th> 
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
} 
?> 
</body> 
</html> 
