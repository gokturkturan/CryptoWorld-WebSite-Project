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
<html>
	<head>
		<?php // Göktürk Turan 290201096 ?>
		<title> Crypto World </title>
	</head>
	<body><center>
		<div>
			<img src="logo5.png" width="300" usemap="#image-map">
			<map id="logomap" name="image-map">
    				<area shabe="rect" coords="20,0,270,130" href="index.php">
			</map>
		</div>
		<hr>
		<div>
		<a href="index.php" style="color:#0462B5"><font size="+3"><b>Anasayfa</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="ÜyeOl.php" style="color:#0462B5"><font size="+3"><b>Kayıt Ol</b></a>
		<div>
		<hr>
		<h3 style="color:0462B5"><u> Giriş Yap </u></h3>
 		<form action="?" method="post">
 		<p style="text-align:center">
			<b><u>Kullanıcı Adı:</u></b><br>
 			<input required="required" type="text" size=30 name="kadi">
 			<br><br>
 			<b><u>Şifre</u></b><br>
 			<input required="required" type="password" size=30 name="sifre">
 			<br><br>
 			<input type=submit class=btn value="Giriş Yap">
 			<input type=reset class=btn value="Temizle">
		</p>
 		</form>
		
		<?php
			if($_POST) {
				$kadi = $_POST['kadi'];
				$sifre = $_POST['sifre'];
			
				if($kadi == "") {
					echo "lütfen doldur";
				} else {
					$baglan = mysqli_connect("localhost","root","");
					mysqli_select_db($baglan,"üyelik");
					
					$kontrol = mysqli_query($baglan,"Select * FROM üye WHERE kadi = '$kadi'");
					
					if(mysqli_num_rows($kontrol) > 0) {
						$partial = mysqli_fetch_array($kontrol);
						$dbsifre = $partial['sifre'];
						
						if($dbsifre == $sifre) {
							$_SESSION["üid"] = $partial['üyeid'];
							$_SESSION["user"] = $partial['kadi'];
							$_SESSION["isim"] = $partial['isim'];
							$_SESSION["soyisim"] = $partial['soyisim'];
							$_SESSION["email"] = $partial['email'];
							$_SESSION["telno"] = $partial['telno'];
							header("Refresh:0; url=Profile.php");
						} else {
							echo "Hatalı giriş yaptınız";
						}	
					} else {
						echo "Böyle bir kullanıcı bulunamadı.";
					}
				}	
			}
		?>	
		<hr>
		</center>
	</body>
</html>
