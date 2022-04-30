<!DOCTYPE HTML>
<html>
<html lang="fr">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
	<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
</head>
<body>
<?php

$nom=$_POST['nom']; 
$password=$_POST['password']; 
$email=$_POST['email']; 
$telephone=$_POST['telephone'];
$message=$_POST['message'];  

if(!empty($nom) || !empty($password) || !empty($email) || !empty($telephone) || !empty($message)){
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "registreutilisateurs";

	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if (mysqli_connect_error ()) {


		die('connect error('.mysqli_connect_errno().')' .mysqli_connect_error());
}

else{
	$SELECT = "SELECT telephone from utilisateurs where telephone = ? limit 1 ";
	$INSERT = "INSERT INTO utilisateurs (nom,password,email,telephone,message)values(?,?,?,?,?) ";

	$stmt = $conn->prepare($SELECT);
	$stmt ->bind_param( "i", $telephone);
	$stmt ->execute();
	$stmt ->bind_result($telephone);
	$stmt ->store_result();
	$rnum = $stmt->num_rows;
if ($rnum == 0){
		$stmt ->close();
		$stmt = $conn->prepare($INSERT);
		$stmt ->bind_param( "sssis", $nom,$password,$email,$telephone,$message);
		$stmt ->execute();
		echo "INSCRIPTION TERMINÉE.";
	}
else{
		echo "Ce numéro de téléphone a déjà été enregistré";
	}
	$stmt ->close();
	$conn ->close();
	}
}
else{
	echo "Remplissez tous les champs";
	die();
}
?>
</body>
</html>
