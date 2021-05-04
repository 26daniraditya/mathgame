<!DOCTYPE html>
<html>
<head>
	<title>UTS Pemrograman Web</title>
	<style> 
	input[type=text], input[type=email] {
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  box-sizing: border-box;
	}
	input[type=submit], .lanjut {
	  background-color: #4CAF50;
	  color: white;
	  padding: 12px 20px;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	  float: left;
	}
</style>
</head>
<?php 
if (isset($_POST['submit'])){
// mengeset cookie username dari namanya, lama cookie 3 bulan
setcookie("username", $_POST['uname'], time()+3*30*24*3600,"/");
// mengeset cookie email dari emailnya, Lama cookie 3 bulan
setcookie("email", $_POST['email'], time()+3*30*24*3600,"/");
// mengeset cookie nyawa default menjadi 5, Lama cookie 3 bulan
setcookie("live", 5, time()+3*30*24*3600,"/");
// mengeset cookie nyawa default menjadi 5, Lama cookie 3 bulan
setcookie("score", 0, time()+3*30*24*3600,"/");
header("Location:program.php");
}

if (isset($_COOKIE['username'])){?> 
	  <p>Hallo <?php echo $_COOKIE['username']?>, selamat datang kembali di permainan ini!!!</p>	
	  <a href="program.php" class="lanjut">Start Game</a>
	  <br><br><p>Bukan Kamu? <a href='logout.php'>Klik Disini</a></p>
		<?php
		setcookie("username", $_COOKIE['username'], time()+3*30*24*3600,"/");
		setcookie("email", $_COOKIE['email'], time()+3*30*24*3600,"/");
		setcookie("live", $_COOKIE['live'], time()+3*30*24*3600,"/");
		setcookie("score", $_COOKIE['score'], time()+3*30*24*3600,"/");	  
} else {
?>
<body>
<form method="POST" action="index.php">
  <label for="uname">Masukkan Nama</label>
  <input type="text" id="uname" name="uname" placeholder="Nama">
  <label for="lname">Masukkan Email</label>
  <input type="email" id="email" name="email" placeholder="Email">
  <input type="submit" name="submit" value="Masuk">
</form>
<?php } ?>
</body>
</html>