<html>
<head><title>Tugas</title>
<style type="text/css">
.inner{
margin: 250px auto;
padding: 50px;
width: 300px;
border: 1px solid #333;
}
</style>
</head>
<body>
<?php
ini_set("display errors", 1);
define('VALID', 1);
require_once('./login.php');
init_login();
validate();
?>
<h3>Simulasi Halaman Login</h3>
<p>
<a href="?m=logout">Kembali</a>
<p>
Menu-menu admin ada disini
</body>
</html>