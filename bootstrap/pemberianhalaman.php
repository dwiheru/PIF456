<html>

<head>
<link href ="/bootstrap/dist/css/bootstrap.css" rel="stylesheet" media="screen">
<title>Paging Data</title>

</head>

<body>
<div class="input-group">
<a class="navbar-brand"><h2> Daftar Mahasiswa Universitas Negeri Malang </h2></a>
</div>

 <?php
 require "koneksi.php";

 $sql = 'SELECT * FROM mahasiswa';

 $self = $_SERVER['PHP_SELF'];

 $page = isset($_GET['page']) ? $_GET['page'] : 0;

 $link_num = 5;

 $record_num = 1;

 $offset = $page ? ($page - 1) * $record_num : 0;

 $total_rows = mysql_num_rows(mysql_query($sql));

 $query = 'SELECT nim, nama, alamat FROM mahasiswa LIMIT $link_num, $record_num';

 $result = mysql_query($sql);

 $max_page = ceil($total_rows/$record_num);


 if($page > $max_page || $page <= 0) {

   $page = 1;

 }

 $paging = '';

 if($max_page > 1) {

   if($page > 1) {

     $paging .= '<a href="'.$self.'?page='.($page-1).'"><h4>previous</h4></a>';

    } else {

      $paging .= 'previous';

    }

    for($counter = 1; $counter <= $max_page; $counter += $link_num) {

      if($page >= $counter) {

        $start = $counter;

      }

    }

    if($max_page > $link_num) {

      $end = $start + $link_num;

      if($end > $max_page) {

        $end = $max_page + 1;

      }

    } else {

      $end = $max_page;

    }

    for ($counter = $start; $counter < $end; $counter++) {

      if($counter == $page) {

        $paging.=$counter;

      } else {
        $paging .= '<a href="'.$self.'?page='.$counter.'">'.$counter.'</a>';

      }

    }

    if ($page < $max_page) {

      $paging.='<a href="' .$self.'?page'.($page+1).'"><h4>next</h4></a>';

    } else {

      $paging.='next';

    }

  }

?>

<table border=1 cellspacing=1 callpadding=5 class table-bordered td>

<tr>

  <th>#</th>
  <th width=120>NIM</th>
  <th width=250>Nama</th>
  <th>Alamat</th>

</tr>

<?php

$i=1;

while ($row = mysql_fetch_row($result)) {

  ?>

  <tr>

    <td>

      <?php echo $i; ?>

    </td>

    <td>

      <?php echo $row[0]; ?>

    </td>

    <td>

      <?php echo $row[1]; ?>

    </td>

    <td>

      <?php echo $row[2]; ?>

    </td>

  </tr>

  <?php

  $i++;

}

?>

</table>

<?php

echo $paging;

?>

</body>

</html>