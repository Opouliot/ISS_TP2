<html>
	<h1>Site sur server 1</h1>
<?php
$host = 'mariadb1';
$user = 'root';
$pass = 'rootpassword';
$conn = new mysqli ($host, $user, $pass);

if ($conn->connect_error) {
	die("La connexion a échoué: " . $conn->connect_error);
}
echo "Connexion réussie à MariaDB! serveur 1";
?>
</html>
