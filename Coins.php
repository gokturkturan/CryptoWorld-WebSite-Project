<?php 
	session_start();
	if(isset($_SESSION['user'])) {
		echo'<html>
	<head>
		<?php // Göktürk Turan 290201096 ?>
		<title> Crypto World </title>
		<style>
			table, th, td {
  			border: 1px solid black;
  			border-collapse: collapse;
			}
		</style>
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
		<a href="index.php"  style="color:0462B5"><font size="+3"><b>Ana Sayfa</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="İletişim.php" style="color:0462B5"><font size="+3"><b>İletişim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Profile.php" style="color:#0462B5"><font size="+3"><b>Profilim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Çıkış.php" style="color:0462B5"><font size="+3"><b>Çıkış Yap</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div>
		<hr>
		<h3><u>Piyasa Değeri En Yüksek İlk 20 Coin</u></h3>
		<table>
  			<tr>
    			<td><b><img src="coins/1.png"><a href="bitcoin.php">1. Bitcoin</a></b></td>
				<td><b><img src="coins/1027.png"><a href="ethereum.php">2. Ethereum</a></b></td>
				<td><b><img src="coins/825.png"><a href="tether.php">3. Tether</a></b></td>
				<td><b><img src="coins/1839.png"><a href="bnb.php">4. Binance Coin</a></b></td>
				<td><b><img src="coins/3408.png"><a href="usdc.php">5. USD Coin</a></b></td>
  			</tr>
  			<tr>
  				<td><b><img src="coins/2010.png"><a href="ada.php">6. Cordano</a></b></td>
    				<td><b><img src="coins/5426.png"><a href="sol.php">7. Solana</a></b></td>
    				<td><b><img src="coins/52.png"><a href="xrp.php">8. XRP</a></b></td>
    				<td><b><img src="coins/4172.png"><a href="terra.php">9. Terra</a></b></td>
    				<td><b><img src="coins/74.png"><a href="doge.php">10. Doge Coin</a></b></td>
  			</tr>
  			<tr>
  				<td><b><img src="coins/6636.png"><a href="polkadot.php">11. Polkadot</a></b></td>
    				<td><b><img src="coins/5805.png"><a href="avax.php">12. Avalanche</a></b></td>
    				<td><b><img src="coins/4687.png"><a href="busd.php">13. Binance USD</a></b></td>
    				<td><b><img src="coins/3890.png" width="65"><a href="matic.php">14. Polygon</a></b></td>
    				<td><b><img src="coins/5994.png"><a href="shib.php">15. SHIBA INU</a></b></td>
  			</tr>
			<tr>
				<td><b><img src="coins/3635.png"><a href="crypto.php">16. Crypto.com Coin</a></b></td>
				<td><b><img src="coins/3717.png"><a href="wbtc.php">17. Wrapped Bitcoin</a></b></td>
    				<td><b><img src="coins/2.png"><a href="ltc.php">18. Litecoin</a></b></td>
				<td><b><img src="coins/7083.png"><a href="uni.php">19. Uniswap</a></b></td>
				<td><b><img src="coins/1975.png"><a href="link.php">20. Chainlink</a></b></td>
  			</tr>
		</table>
		
		<hr>
		</center>
	</body>
</html>'; } else { echo '<html>
	<head>
		
		<title> Crypto World </title>
		<style>
			table, th, td {
  			border: 1px solid black;
  			border-collapse: collapse;
			}
		</style>
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
		<a href="index.php"  style="color:0462B5"><font size="+3"><b>Ana Sayfa</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="İletişim.php" style="color:0462B5"><font size="+3"><b>İletişim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="ÜyeOl.php" style="color:0462B5"><font size="+3"><b>Kayıt Ol</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="GirişYap.php" style="color:0462B5"><font size="+3"><b>Giriş Yap</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div>
		<hr>
		<h3><u>Piyasa Değeri En Yüksek İlk 20 Coin</u></h3>
		<table>
  			<tr>
    			<td><b><img src="coins/1.png"><a href="bitcoin.php">1. Bitcoin</a></b></td>
				<td><b><img src="coins/1027.png"><a href="ethereum.php">2. Ethereum</a></b></td>
				<td><b><img src="coins/825.png"><a href="tether.php">3. Tether</a></b></td>
				<td><b><img src="coins/1839.png"><a href="bnb.php">4. Binance Coin</a></b></td>
				<td><b><img src="coins/3408.png"><a href="usdc.php">5. USD Coin</a></b></td>
  			</tr>
  			<tr>
  				<td><b><img src="coins/2010.png"><a href="ada.php">6. Cordano</a></b></td>
    				<td><b><img src="coins/5426.png"><a href="sol.php">7. Solana</a></b></td>
    				<td><b><img src="coins/52.png"><a href="xrp.php">8. XRP</a></b></td>
    				<td><b><img src="coins/4172.png"><a href="terra.php">9. Terra</a></b></td>
    				<td><b><img src="coins/74.png"><a href="doge.php">10. Doge Coin</a></b></td>
  			</tr>
  			<tr>
  				<td><b><img src="coins/6636.png"><a href="polkadot.php">11. Polkadot</a></b></td>
    				<td><b><img src="coins/5805.png"><a href="avax.php">12. Avalanche</a></b></td>
    				<td><b><img src="coins/4687.png"><a href="busd.php">13. Binance USD</a></b></td>
    				<td><b><img src="coins/3890.png" width="65"><a href="matic.php">14. Polygon</a></b></td>
    				<td><b><img src="coins/5994.png"><a href="shib.php">15. SHIBA INU</a></b></td>
  			</tr>
			<tr>
				<td><b><img src="coins/3635.png"><a href="crypto.php">16. Crypto.com Coin</a></b></td>
				<td><b><img src="coins/3717.png"><a href="wbtc.php">17. Wrapped Bitcoin</a></b></td>
    				<td><b><img src="coins/2.png"><a href="ltc.php">18. Litecoin</a></b></td>
				<td><b><img src="coins/7083.png"><a href="uni.php">19. Uniswap</a></b></td>
				<td><b><img src="coins/1975.png"><a href="link.php">20. Chainlink</a></b></td>
  			</tr>
		</table>
		
		<hr>
		</center>
	</body>
</html>'; }
?>


