<?php
include("../connection.php");
if (isset($_GET["id"])) 
 {
 	$id	= $_GET["id"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "bims_db";

	$connection = new mysqli($servername, $username, $password, $database);

	$sql = "DELETE FROM financial WHERE id=$id";
	$connection->query($sql);

	 header("location: ../admin/adminfinancial.php");
 	 exit;
 }

?>