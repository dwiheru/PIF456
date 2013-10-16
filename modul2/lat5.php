<html>
<head>
<title>Data Checkbox</title>
</head>
<body>

<form action="
	<?php $_SERVER['PHP_SELF'];?>" method="post">
		Jenis Kelamin
		<input type="checkbox" name="hobby[]" value="membaca"/> membaca
		<input type="checkbox" name="hobby[]" value="olahraga"/>olahraga
		<input type="checkbox" name="hobby[]" value="menyanyi"/>menyanyi
		<br/>
		<input type="submit" value="OK"/>
</form>
	<?php
	if (isset($_POST['hobby'])){
		foreach ($_POST['hobby'] as $key =>$val){
			echo $key. '->' .$val. '<br/>';
		}
	}
	?>
</body>
</html>