<!DOCTYPE html>
<html lang="fi">
<?php
require "./yhteys.php";

if(!empty($_POST["nimi"]) && !empty($_POST["email"]) && !empty($_POST["paikka"]))
{
	$nimi=$_POST["nimi"];
	$email=$_POST["email"];
	$paikka=$_POST["paikka"];
	
	
	
	$sql="INSERT INTO lan(nimi,email,PaikkaID) VALUES('$nimi','$email','$paikka')";
	
	$lause=$yhteys->prepare($sql);
	$lause->execute();
	
	header("Location:./onnittelut.php");
}
?>
<head>
	<meta charset="utf-8">
	<title>Lan-ilmoitautuminen</title>
	<link rel="stylesheet" type="text/css" href="./css.css">
	<link rel="icon" href="./Kuvat/logo.jpg">
</head>

<header class="header">
		<a class="brand" href="./index.php"  style="color: rgb(41, 163, 41); text-decoration: none"><img class="image" src="./kuvat/logo.jpg"></a>
</header>

<body>

	
<div class="container">
  <form action="./index.php" method="post">
	<h2>Anna tietosi</h2>
	<p><label for="nimi">nimi *</label><br />
	<input type="text" name="nimi" required><br /></p>
	<p><label for="email">Sähköposti *</label><br />
	<input type="email" name="email" required><br /></p>
	<p><label for="paikka">paikka *</label><br />
		<?php
					require_once("./yhteys.php");
					
					$sql = "SELECT PaikkaID FROM paikka";
					$result = mysqli_query($connection, $sql);
					
					echo "<select name='paikka' required>";
					while ($row = mysqli_fetch_array($result)) {
						echo "<option value='" . $row['PaikkaID'] . "'>" . $row['PaikkaID'] . "</option>";
					}
					echo "</select>";
					?>
	<p><input class="button" type="submit" value="Varaa paikka"></p>
	</form>
</div>
</body>

	<footer class="footer">
        <p>LAN</p>
    </footer>