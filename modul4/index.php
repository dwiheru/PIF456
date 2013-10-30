<html>
<head><title>Akses dan manipulasi</title>
<style type="text/css">
.even {
        background: #ddd;
}
</style>
</head>
<body>
<?php


ini_set('display_error', 1);
require "koneksi.php";
require "data_handler.php";
define('mhs', 'maha');
data_handler('?m=data');
?>
<br/><br/>
</body>
</html>