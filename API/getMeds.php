	<?php
	// Connect to database
	include("db_connect.php");
	$request_method = $_SERVER["REQUEST_METHOD"];

	switch($request_method)
	{
		
		case 'GET':
			if(!empty($_GET["id"]))
        //affiche 1 médicament spécifique
			{
				$id=intval($_GET["id"]);
				getMed($id);
			}
			else
        //tous les médicaments
			{
				getMeds();
			}
			break;
		case 'POST':
			// Ajouter un médicament
			AddMed();
			break;
		case 'PUT':
			// Modifier un médicament
			$id = intval($_GET["id"]);
			updateMed($id);
			break;
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}
    
    function getMed()
	{
		global $conn;
		$query = "SELECT * FROM medicament";
		$response = array();
		
		$conn->query("SET NAMES utf8"); 
		$result = $conn->query($query); 
	   while ( $row = $result->fetch() ) 
		{
			$response[] = $row;
		}
		$result->closeCursor(); 
		header('Content-Type: application/json');
		echo json_encode($response, JSON_PRETTY_PRINT);
	}

	function AddMed()
	{
		global $conn;
		$comp = $_POST["comp"];
		$nom = $_POST["nom"];
		$eff_therap = $_POST["eff_therap"];
		$eff_sec = $_POST["eff_sec"];
		$autre = $_POST["autre"];
		$interd = $_POST["interd"];
		$recom = $_POST["recom"];
		$query = "INSERT INTO medicament (composition, nom, effets_therapeutiques, effets_secondaires, interaction_avec_autre_medicament, interdiction, recommentation) VALUES ('".$comp."', '".$nom."', '".$eff_therap."', '".$eff_sec."', '".$autre."', '".$interd."', '".$recom."')";
		$conn->query("SET NAMES utf8");
		if($conn->query($query))
		{
			$response = array(
				"status" => 1,
				"status_message" => "Médicament ajouté avec succès."
			);
		}
		else
		{
			$response = array(
				"status" => 0,
				"status_message" => "EREEUR ! (lors de l'insertion du médicament)" . $conn->error
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
	function updateMed($id)
	{
		global $conn;
		$_PUT =array();
		parse_str(file_get_contents('php://input'), $_PUT);
		$comp = $_PUT["comp"];
		$nom = $_PUT["nom"];
		$eff_therap = $_PUT["eff_therap"];
		$eff_sec = $_PUT["eff_sec"];
		$autre = $_PUT["autre"];
		$interd = $_PUT["interd"];
		$recom = $_PUT["recom"];
		$query = "UPDATE medicament SET composition='$comp', nom='$nom', effets_therapeutiques='$eff_therap', effets_secondaires='$eff_sec', interaction_avec_autre_medicament='$autre', interdiction='$interd', recommentation='$recom' WHERE id=$id";
		$conn->query("SET NAMES utf8");
		if($conn->query($query))
		{
			$response = array(
				"status" => 1,
				"status_message" => "Médicament mis à jour avec succès."
			);
		}
		else
		{
			$response = array(
				"status" => 0,
				"status_message" => "EREEUR ! (lors de la mise à jour du médicament)" . $conn->error
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
