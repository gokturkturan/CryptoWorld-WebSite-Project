<?php
	session_start();
?>
<style> .btn {
    color:black;
    width:200px;
    height:40px;
    font-weight:bold;
    font-size:15px;
    border:none;
    border-radius:10px;
}
.btn:hover{
    background:#0462B5;
    cursor:pointer;
    color:green;
}
input[type=text]{
    width:200px;
    height:35px;
    border:none;
    border-bottom:1px solid grey;
}
input[type=password]{
    width:200px;
    height:35px;
    border:none;
    border-bottom:1px solid grey;
}
</style>
<?php
	if(isset($_SESSION['üid']) && isset($_SESSION['user']) && isset($_SESSION['isim']) && isset($_SESSION['soyisim']) && isset($_SESSION['email']) && isset($_SESSION['telno'])) {
		echo"<html>";
		echo"<head>";		
		echo"<title> Crypto World </title>";
		echo"</head>";
		echo"<body><center>";
		echo"<div>";
		echo'<img src="logo5.png" width="300" usemap="#image-map">';
		echo'<map id="logomap" name="image-map">';
    		echo'<area shabe="rect" coords="20,0,270,130" href="MainPage.php">';
		echo"</map>";
		echo"</div>";
		echo"<hr>";
		echo"<div>";
		echo'<a href="index.php" style="color:#0462B5"><font size="+3"><b>Anasayfa</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo'<a href="Coins.php" style="color:#0462B5"><font size="+3"><b>Coins</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo'<a href="İletişim.php" style="color:#0462B5"><font size="+3"><b>İletişim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo'<a href="Profile.php" style="color:#0462B5"><font size="+3"><b>Profilim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo'<a href="Çıkış.php" style="color:0462B5"><font size="+3"><b>Çıkış Yap</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo"</div>";
		echo"<hr>";
		
		echo'<form action="?" method="POST">
 		<p style="text-align:center">
			<b><u>İsim</u></b><br>
 			<input required="required" type="text" size=30 name="isim">
 			<br><br>
 			<b><u>Soyisim</u></b><br>
 			<input required="required" type="text" size=30 name="soyisim">
 			<br><br>
 			<b><u>E-Mail</u></b><br>
 			<input required="required" type="text" size=30 name="email">
			<br><br>
 			<b><u>Telefon Numarası</u></b><br>
 			<input required="required" type="text" size=30 name="telno">
 			<br><br>
			<b><u>Kullanıcı Adı</u></b><br>
 			<input required="required" type="text" size=30 name="kadi">
 			<br><br>
			<b><u>Şifre</u></b><br>
 			<input required="required" type="password" size=30 name="sifre">
 			<br><br>
 			<input type=submit class=btn value="Güncelle">
 			<input type=reset class=btn value="Temizle">
		</p>
 		</form>';
		
 		$isim = $_SESSION['isim'];
 		$soyisim = $_SESSION['soyisim'];
 		$email = $_SESSION['email'];
 		$telno = $_SESSION['telno'];
 		$kadi = $_SESSION['user'];

		$conn = mysqli_connect("localhost","root","","üyelik");
		$sql = "SELECT * FROM üye WHERE üyeid = '$_SESSION[üid]'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) == 1) {
			while ($row = mysqli_fetch_assoc($result)) {
				if(isset($_POST['isim'])) {
					$sqlisim = "UPDATE üye SET isim = '$_POST[isim]' WHERE üyeid = '$_SESSION[üid]'";
					$resultisim = mysqli_query($conn, $sqlisim);
					$_SESSION['isim'] = $_POST['isim'];
				}
				if(isset($_POST['soyisim'])) {
					$sqlsoyisim = "UPDATE üye SET soyisim = '$_POST[soyisim]' WHERE üyeid = '$_SESSION[üid]'";
					$resultsoyisim = mysqli_query($conn, $sqlsoyisim);
					$_SESSION['soyisim'] = $_POST['soyisim'];
				}
				if(isset($_POST['email'])) {
					$sqlemail = "UPDATE üye SET email = '$_POST[email]' WHERE üyeid = '$_SESSION[üid]'";
					$resultemail = mysqli_query($conn, $sqlemail);
					$_SESSION['email'] = $_POST['email'];
				}
				if(isset($_POST['telno'])) {
					$sqltelno = "UPDATE üye SET telno = '$_POST[telno]' WHERE üyeid = '$_SESSION[üid]'";
					$resulttelno = mysqli_query($conn, $sqltelno);
					$_SESSION['telno'] = $_POST['telno']; 
				}
				if(isset($_POST['kadi'])) {
					$sqlkadi = "UPDATE üye SET kadi = '$_POST[kadi]' WHERE üyeid = '$_SESSION[üid]'";
					$resultkadi = mysqli_query($conn, $sqlkadi);
					$_SESSION['user'] = $_POST['kadi'];
				}
				if(isset($_POST['sifre'])) {
					$sqlsifre = "UPDATE üye SET sifre = '$_POST[sifre]' WHERE üyeid = '$_SESSION[üid]'";
					$resultsifre = mysqli_query($conn, $sqlsifre);
				}
			}
		}
		else {
			echo "Böyle bir kayıtlı üye yok";
		}

		if (isset($_POST['sifre'])) {
			header('Location:Profile.php');
		}

		echo "</center></body>";
		echo "</html>";
	} else {
		echo "";
	}	
?>
