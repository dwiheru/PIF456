<html>

<head>
<title>Menciptakan Database</title>
</head>
<body>
<?php
require "koneksi.php";
echo '<br/>';
$res = mysql_query("CREATE DATABASE mydatabase");
if($res) {
echo '<br/>';
echo 'Database mydatabase Created!';
} else {
echo mysql_error();
}
?>
</body>
</html>