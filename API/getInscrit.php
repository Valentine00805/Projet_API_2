	<?php
	// Connect to database
	include("db_connect.php");
	$request_method = $_SERVER["REQUEST_METHOD"];

	switch($request_method)
	{
		case 'GET':
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				getInscrit($id);
			}
			else
			{
				getInscrit();
			}
			break;
		case 'POST':
			// Ajouter un inscrit
			insertInscrit();
			break;
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}
    
	function insertInscrit()
	{
		global $conn;
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$email = $_POST["email"];
		$date_naissance = $_POST["date_naissance"];
		$adresse = $_POST["adresse"];
		$telephone = $_POST["telephone"];
		$ida = $_POST["ida"];
		$query = "INSERT INTO inscrit (nom, prenom, email, date_naissance, adresse, telephone, ida) VALUES ('".$nom."', '".$prenom."', '".$email."', '".$date_naissance."', '".$adresse."', '".$telephone."', '".$ida."')";
		$conn->query("SET NAMES utf8");
		if($conn->query($query))
		{
			$response = array(
				"status" => 1,
				"status_message" => "Inscrit ajouté avec succès."
			);
		}
		else
		{
			$response = array(
				"status" => 0,
				"status_message" => "EREEUR ! (lors de l'insertion de l'inscrit)" . $conn->error
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
	function getInscrits()
	{
		global $conn;
		$query = "SELECT * FROM inscrit";
		$response = array();
		
		$conn->query("SET NAMES utf8"); 
		$result = $conn->query($query); 
	   while ( $row = $result->fetch(PDO::FETCH_ASSOC) ) 
		{
			$response[] = $row;
		}
		$result->closeCursor(); 
		header('Content-Type: application/json');
		echo json_encode($response, JSON_PRETTY_PRINT);
	}
		//un seul inscrit
	function getInscrit($id=0)
		{
			global $conn;
			$query = "SELECT * FROM inscrit";
			$response = array();
			if($id != 0){
				$query.=" WHERE id=".$id." LIMIT 1";
			}
			$conn->query("SET NAMES utf8"); 
			$result = $conn->query($query); 
			while ( $row = $result->fetch(PDO::FETCH_ASSOC) ){
				$response[] = $row;
			}
			header('Content-Type: application/json');
			echo json_encode($response, JSON_PRETTY_PRINT);
		}
?>