<!DOCTYPE HTML>
<html>
<html lang="fr">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>

</head>

<body>



<?php



//Variables

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
	//je vérifie s’il y a une connexion fidèle entre le formulaire et la base de données
if (mysqli_connect_error ()) {
		//vérifier s’il y a eu une erreur dans la dernière connexion 
		die('connect error('.mysqli_connect_errno().')' .mysqli_connect_error());
}
//requête préparée
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
 <!-- javascript -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>

  </body>
</html>