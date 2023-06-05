<?php
	session_start();
	if(isset($_SESSION['user'])) {
		echo ' <html>
	<head>
		
		<title> Crypto World </title>
	</head>
	<body><center>
		<div>
			<img src="logo5.png" width="300" usemap="#image-map">
			<map id="image-map" name="image-map">
    				<area shape="rect" coords="20,0,270,130" href="index.php">
			</map>
		</div>
		<hr>
		<div>
		<a href="index.php"  style="color:0462B5"><font size="+3"><b>Ana Sayfa</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Coins.php"  style="color:0462B5"><font size="+3"><b>Coins</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Profile.php" style="color:#0462B5"><font size="+3"><b>Profilim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Çıkış.php" style="color:0462B5"><font size="+3"><b>Çıkış Yap</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div>
		<hr>
		<h3><u>İletişim Kanallarımız</u></h3>
	
		<b>Kurucu</b>: Göktürk Turan <br>
		<b>Telefon</b>: 05050603576 <br>
		<b>Mail</b>:<a style="color:0462B5" href="mailto:gktrktrn673@gmail.com">gktrktrn673@gmail.com</a><br><br>
		

		<b>Sosyal Medya Hesaplarımız</b>
		<br>
		<a href="https://www.instagram.com/worldofcryptocoins/"> 
			<img src="Instagram.png" width="50" style="border-radius:50px"></a>
		
		<a href="https://twitter.com/gokturk__turan"> 
			<img src="twitter.png" width="50" style="border-radius:50px"></a>

		<a href="https://github.com/gokturkturan"> 
			<img src="github.png" width="59" style="border-radius:50px"></a>    
            
        <a href="https://www.linkedin.com/in/gokturkturan/"> 
			<img src="linkedinlgo.png" width="50" style="border-radius:50px"></a> 	
		
		<hr>
		</center>
	</body>
</html> '; } else { echo '<html>
	<head>
		<?php // Göktürk Turan 290201096 ?>
		<title> Crypto World </title>
	</head>
	<body><center>
		<div>
			<img src="logo5.png" width="300" usemap="#image-map">
			<map id="image-map" name="image-map">
    				<area shape="rect" coords="20,0,270,130" href="index.php">
			</map>
		</div>
		<hr>
		<div>
		<a href="index.php"  style="color:0462B5"><font size="+3"><b>Ana Sayfa</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Coins.php"  style="color:0462B5"><font size="+3"><b>Coins</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="ÜyeOl.php" style="color:0462B5"><font size="+3"><b>Kayıt Ol</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="GirişYap.php" style="color:0462B5"><font size="+3"><b>Giriş Yap</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div>
		<hr>
		<h3><u>İletişim Kanallarımız</u></h3>
	
		<b>Kurucu</b>: Göktürk Turan <br>
		<b>Telefon</b>: 05050603576 <br>
		<b>Mail</b>:<a style="color:0462B5" href="mailto:gktrktrn673@gmail.com">gktrktrn673@gmail.com</a><br><br>
		

		<b>Sosyal Medya Hesaplarımız</b>
		<br>
		<a href="https://www.instagram.com/worldofcryptocoins/"> 
		<img src="Instagram.png" width="50" style="border-radius:50px"></a>
		
		<a href="https://twitter.com/gokturk__turan"> 
			<img src="twitter.png" width="50" style="border-radius:50px"></a>

		<a href="https://github.com/gokturkturan"> 
			<img src="github.png" width="59" style="border-radius:50px"></a>    
            
        <a href="https://www.linkedin.com/in/gokturkturan/"> 
			<img src="linkedinlgo.png" width="50" style="border-radius:50px"></a> 
		
		<hr>
		</center>
	</body>
</html>';} 
?>
