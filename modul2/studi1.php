<html>
<head>
<title>Tugas Seleksi dengan Preselecting </title>
</head>
<body>

<form action="
	<?php $_SERVER['PHP_SELF'];?>" method="post">
		Nama Pahlawan
		<select name ="nama_pahlawan">
			<option value="ranger merah">ranger1
			<option value="ranger biru" selected>ranger2
			<option value="ranger pink">ranger3
			<option value="ranger kuning" >ranger4
			<option value="ranger hijau">ranger5
		</select> <br/>
		<input type="submit" value="OK"/>
</form>
	<?php
	
	if (isset($_POST['nama_pahlawan'])){
		echo $_POST['nama_pahlawan'];
	}
	?>
</body>
</html>