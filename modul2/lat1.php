<html>
<head>
<title>Metode Get</title>
</head>
<body>

<form action="
	<?php $_SERVER['PHP_SELF'];?>" method="get">
		Nama
		<input type="text" name="nama"/><br/>
		<input type="submit" value="OK"/>
</form>
	<?php
	
	if (isset($_GET['nama'])){
		echo "Halo, " .$_GET['nama'];
	}
	?>
</body>
</html>