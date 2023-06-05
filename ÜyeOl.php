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
		<a href="index.php" style="color:#0462B5"><font size="+3"><b>Ana Sayfa</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="GirişYap.php" style="color:#0462B5"><font size="+3"><b>Giriş Yap</b></a>
		</div>
		<hr>
		<h3 style="color:0462B5"><u> Kayıt Ol </u></h3>
 		<form action="?" method="POST">
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
 			<input type=submit class=btn value="Kayıt Ol">
 			<input type=reset class=btn value="Temizle">
		</p>
 		</form>
		
		<?php
			if($_POST) {
				$isim = $_POST['isim'];
				$soyisim = $_POST['soyisim'];
				$email = $_POST['email'];
				$telno = $_POST['telno'];
				$kadi = $_POST['kadi'];
				$sifre = $_POST['sifre'];
			
				$baglan = mysqli_connect("localhost","root","");
				mysqli_select_db($baglan,"üyelik");
				$sql45 = "SELECT * FROM üye WHERE kadi ='$kadi'";
				$result45 = mysqli_query($baglan,$sql45);
				if(mysqli_num_rows($result45) > 0){
					echo "Lütfen yeni kullanıcı adı giriniz.";
				} else {
					$baglan = mysqli_connect("localhost","root","");
					mysqli_select_db($baglan,"üyelik");
					
					$kayit = mysqli_query($baglan,"INSERT INTO üye (isim,soyisim,email,telno,kadi,sifre) VALUES('$isim','$soyisim','$email','$telno','$kadi','$sifre')");
					
					$sql2 = "SELECT * FROM üye WHERE kadi ='$kadi' AND isim='$isim'";
					$result = mysqli_query($baglan,$sql2);

					if(mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							$userid = $row['üyeid'];
							$sql3 = "INSERT INTO profileimg (userid, status) VALUES ('$userid',1)";
							mysqli_query($baglan, $sql3);
						}
					}

					if($kayit) {
						echo "Tebrikler, başarıyla kayıt oldunuz.";
					} else {
						echo "Bir şeyler ters gitti";
					}
				}	
			}
		?>	

		</center>
	</body>
</html>

