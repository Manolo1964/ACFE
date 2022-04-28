﻿<?php 

//Données du serveur et de la base de données

$server="sql304.260mb.net";
$username="n260m_31608269";
$password= "xxxxxx"; 
$database_name="xxxxxxx";
//La connexion avec le serveur est établie
$conexion=mysql_connect($server, $username, $password) 
or die("Difficultés rencontrées pour établir la connexion");

//Seleccionamos la base de datos 
$bd_sel=mysql_select_db($database_name) or die("Problèmes de sélection de la base de données");
?>


