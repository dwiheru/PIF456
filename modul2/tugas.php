<html>
<head>
	<title>Login Masuk</title>
</head>

<style type="text/css">

*{font-family: Segoe UI, Tahoma;
margin: auto;
padding:0;

}

#container{
	margin:  20px auto;
	width: 20%;
	height: auto;
	padding: 10px;
	border: 5px solid brown
}

.textinput{
width: 100%;
height: 30px;
margin: 5px auto;
}

.btn{
	width: 100%;
	padding:5px;
	background-color: #00ccff;
	border: 2px;
	color:white;
	font-weight: 900;

}

.btn:hover{
	cursor: pointer;

}

a{
	font-size: 12px;
	color: black;
}

.textinput{
	background-color: #fafafa;
	border: inset 1px #efefef;
}
</style>
<script>

function cekhuruf(huruf){
				cek = /^[A-Za-z]{1,}$/;
				return cek.test(huruf);
			}

function validateForm()
{
var username=document.forms["myForm"]["username"].value;
var pass=document.forms["myForm"]["pass"].value;

if ((username==null || username=="")||(pass==null|| pass==""))
  {
  alert("Tidak Boleh Kosong!!");
   document.getElementById("username").focus();
  return false;
  }
  
  if(cekhuruf(username)=== false ||cekhuruf(pass)===false)
  {
  	alert("Username dan password harus berupa huruf");
  	 document.getElementById("username").focus();
  	return false;
  }


 
  return true;
}
</script>
<body>
<div id="container">
<font size=18px>Login</font>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="myForm" onsubmit="return validateForm()">
		nama<input type="text" name="username" class="textinput" id="username" />
		password<input type="password" name="pass" class="textinput" id="pass"/>
		<input type="submit" name="submit" value="Masuk" class="btn"/>
		<input type="checkbox" name="remember" class="checkbox"/>&nbsp;<small>Ingat saya</small>
		<div id="bawah"><center><a href="" class="link">Daftar</a> | <a href="" class="link">Ganti Password</a> | <a href="" class="link">Lupa Password</a></center></div>
	</form>
</div>

<marquee><div align="center">
<?php 
if (isset($_POST['submit'])) {
	if ((isset($_POST['username'])&&$_POST['username']=='dwiheru')&&(isset($_POST['pass'])&&$_POST['pass']=='mariavianne')) {
		echo "<center>Selamat datang, ". $_POST['username']."</center>";
	}
	else{
		echo "<script>alert('Username password salah')</script>";
	}
}
 ?>
</marquee>
</body>
</html>