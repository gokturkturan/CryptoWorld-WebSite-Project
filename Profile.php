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
    color:red;
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
    		echo'<area shabe="rect" coords="20,0,270,130" href="index.php">';
		echo"</map>";
		echo"</div>";
		echo"<hr>";
		echo"<div>";
		echo'<a href="index.php" style="color:#0462B5"><font size="+3"><b>Anasayfa</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo'<a href="Coins.php" style="color:#0462B5"><font size="+3"><b>Coins</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo'<a href="İletişim.php" style="color:#0462B5"><font size="+3"><b>İletişim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo'<a href="Çıkış.php" style="color:0462B5"><font size="+3"><b>Çıkış Yap</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo"</div>";
		echo"<hr>";
		echo"<b>İsim</b>: $_SESSION[isim]";
		echo"<br>";
		echo"<b>Soyisim</b>: $_SESSION[soyisim]";
		echo"<br>";
		echo"<b>E-mail</b>: $_SESSION[email]";
		echo"<br>";
		echo"<b>Telefon Numarası</b>: $_SESSION[telno]";
		echo"<br>";
		echo"<b>Kullanıcı Adı</b>: $_SESSION[user]";
		echo"<br>";

		echo"<form action='changeinfo.php' method='POST'>
			<input type='submit' value='Bilgileri Güncelle'>
			</form>";

		echo"<form action='' method='POST' enctype='multipart/form-data'>
			<input type='file' name='file'>
			<button type='submit' name='submit'>Yeni Fotoğraf Yükle</button>
			</form>";
			
		$conn = mysqli_connect("localhost","root","","üyelik");
		$sql = "SELECT * FROM üye WHERE üyeid = '$_SESSION[üid]' ";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) == 1) {
			while ($row = mysqli_fetch_assoc($result)) {
				$id = $_SESSION['üid'];
				$sqlImg = "SELECT * FROM profileimg WHERE userid = '$_SESSION[üid]'";
				$resultImg = mysqli_query($conn, $sqlImg);
				while($rowImg = mysqli_fetch_assoc($resultImg)){
					echo "<div>";
						if($rowImg['status'] == 0) {
							echo "<img src='images/profile".$_SESSION['üid'].".jpg?".mt_rand()." 'width='200' >";
						} else {
							echo "<img src='images/profiledefault.jpg'>";
						}
					echo "</div>";
					break;
				}
			}
		} else {
			echo "Henüz kayıtlı üye yok";
		}

		if(isset($_POST['submit'])) {
			$file = $_FILES['file'];
			$fileName = $_FILES['file']['name'];
			$fileTmpName = $_FILES['file']['tmp_name'];
			$fileSize = $_FILES['file']['size'];
			$fileError = $_FILES['file']['error'];
	
			$fileExt = explode('.',$fileName);
			$fileActualExt = strtolower(end($fileExt));

			$allowed = array('jpg','jpeg','png');

			if(in_array($fileActualExt, $allowed)) {
				if($fileError === 0) {
					if($fileSize < 100000) {
						$fileNameNew = "profile".$_SESSION['üid'].".jpg";
						$fileDestination = 'images/'.$fileNameNew;
						move_uploaded_file($fileTmpName, $fileDestination);
						$sql10 = "UPDATE profileimg SET status=0 WHERE userid='$_SESSION[üid]';";
						$result10 = mysqli_query($conn,$sql10);
						header("Location: Profile.php");
					} else {
						echo "File size is too high!";
					}
				} else {
					echo "There is an Error!";
				}		
			} else {
				echo "You did not choose profile photo!";
			}
		}	
		echo "</center></body>";
		echo "</html>";
	} else {
		echo "";
	}	
?>
