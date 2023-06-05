<?php
	session_start();
	if(isset($_SESSION['user'])) {
		echo '<html>
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
		<a href="Coins.php" style="color:#0462B5"><font size="+3"><b>Coins</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="İletişim.php" style="color:#0462B5"><font size="+3"><b>İletişim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Profile.php" style="color:#0462B5"><font size="+3"><b>Profilim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Çıkış.php" style="color:0462B5"><font size="+3"><b>Çıkış Yap</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div>
		<hr>
		<p><b><font size="+5">Türkiyenin bir numaralı <br> kripto rehberi sitesine <br> hoşgeldiniz.<br><br>
			Tüm dünyanın ilgi duyduğu kripto para sitesi <br> her zaman hizmetinizde.</p>
		<hr>
		<img src="coins.jpg" width="550">
		</center>
	</body>
</html>';
	} else {
		echo '<html>
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
		<a href="Coins.php" style="color:#0462B5"><font size="+3"><b>Coins</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="İletişim.php" style="color:#0462B5"><font size="+3"><b>İletişim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="ÜyeOl.php" style="color:#0462B5"><font size="+3"><b>Kayıt Ol</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="GirişYap.php" style="color:#0462B5"><font size="+3"><b>Giriş Yap</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div>
		<hr>
		<p><b><font size="+5">Türkiyenin bir numaralı <br> kripto rehberi sitesine <br> hoşgeldiniz.<br><br>
			Hemen <a href="ÜyeOl.php" style="color:#0462B5"> kayıt ol<a>, yatırım stratejine yön ver.</b></p>
		<hr>
		<img src="coins.jpg" width="550">
		</center>
	</body>
</html>';
	}
?>
