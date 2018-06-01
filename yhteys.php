<?php
//otetaan yhteys kantaan

$host = "magnesium"; //jos ette tiedä, käytää "localhost"
$user = "16aeetul";
$pass = "salasana";
$skeema = "db16aeetul";

try
{
	$yhteys = new PDO("mysql:host=$host;dbname=$skeema;charset=utf8",$user,$pass);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>

<?php
$connection = mysqli_connect('magnesium', '16aeetul', 'salasana'); // yhteyden kirjautumistiedot
if(!$connection) { // jos yhteyttä ei saada
	die("Tietokantaan ei saatu yhteyttä" . mysqli_error($connection));
}

$select_db = mysqli_select_db($connection, 'db16aeetul'); // valitse tietokanta
if(!$connection) { // jos valitseminen epäonnistuu
	die("Tietokannan valitseminen epäonnistui" . mysqli_error($connection));
}
?>