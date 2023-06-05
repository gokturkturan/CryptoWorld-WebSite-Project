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
		<a href="Coins.php"  style="color:0462B5"><font size="+3"><b>Coins</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="İletişim.php" style="color:0462B5"><font size="+3"><b>İletişim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Profile.php" style="color:#0462B5"><font size="+3"><b>Profilim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Çıkış.php" style="color:0462B5"><font size="+3"><b>Çıkış Yap</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
		<hr>
			<h2 style="color:0462B5"><u> Ethereum </u></h2>
			<!-- TradingView Widget BEGIN -->
			<div class="tradingview-widget-container">
			  <div id="tradingview_1b26e"></div>
			  <div class="tradingview-widget-copyright">TradingView\'den <a href="https://tr.tradingview.com/symbols/ETHUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">ETHUSDT Grafiği</span></a></div>
			  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
			  <script type="text/javascript">
			  new TradingView.widget(
			  {
			  "width": 980,
			  "height": 610,
			  "symbol": "BINANCE:ETHUSDT",
			  "interval": "D",
			  "timezone": "Etc/UTC",
			  "theme": "dark",
			  "style": "1",
			  "locale": "tr",
			  "toolbar_bg": "#f1f3f6",
			  "enable_publishing": false,
			  "allow_symbol_change": true,
			  "container_id": "tradingview_1b26e"
			  }
			  );
			  </script>
			</div>
			<!-- TradingView Widget END -->
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
		<a href="Coins.php"  style="color:0462B5"><font size="+3"><b>Coins</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="İletişim.php" style="color:0462B5"><font size="+3"><b>İletişim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="ÜyeOl.php" style="color:0462B5"><font size="+3"><b>Kayıt Ol</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="GirişYap.php" style="color:0462B5"><font size="+3"><b>Giriş Yap</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div>
		<hr>
			<h2 style="color:0462B5"><u> Ethereum </u></h2>
			<!-- TradingView Widget BEGIN -->
			<div class="tradingview-widget-container">
			  <div id="tradingview_1b26e"></div>
			  <div class="tradingview-widget-copyright">TradingView\'den <a href="https://tr.tradingview.com/symbols/ETHUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">ETHUSDT Grafiği</span></a></div>
			  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
			  <script type="text/javascript">
			  new TradingView.widget(
			  {
			  "width": 980,
			  "height": 610,
			  "symbol": "BINANCE:ETHUSDT",
			  "interval": "D",
			  "timezone": "Etc/UTC",
			  "theme": "dark",
			  "style": "1",
			  "locale": "tr",
			  "toolbar_bg": "#f1f3f6",
			  "enable_publishing": false,
			  "allow_symbol_change": true,
			  "container_id": "tradingview_1b26e"
			  }
			  );
			  </script>
			</div>
			<!-- TradingView Widget END -->
		<hr>
		</center>
	</body>
</html>'; }
?>
