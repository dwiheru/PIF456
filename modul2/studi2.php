<html>
<head>
<title>Data Checkbox</title>
</head>
<body>

<form action="
	<?php $_SERVER['PHP_SELF'];?>" method="post">
		Club Sepakbola Favorite
		<input type="checkbox" name="hobby[]" value="Manchester United " checked /> Manchester United
		<input type="checkbox" name="hobby[]" value="Real Madrid "/> Real Madrid
		<input type="checkbox" name="hobby[]" value="Paris Saint Germain"/> PSG
		<input type="checkbox" name="hobby[]" disabled />Manchester City
		
		<br/>
		<input type="submit" value="OK"/>
</form>
	<?php
	if (isset($_POST['hobby'])){
		foreach ($_POST['hobby'] as $key =>$val){
			echo ($key+1). '  ==>  ' .$val. '<br/>';
		}
	}
	?>
</body>
</html>