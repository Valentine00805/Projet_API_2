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
				getActiviter($id);
			}
			else
			{
				getActiviter();
			}
			break;
		case 'POST':
			// Ajouter une Activiter
			AddActivite();
			break;
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}
    
	//plusieurs activités
    function getActivites()
	{
		global $conn;
		$query = "SELECT * FROM activite";
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

	function AddActivite()
	{
		global $conn;
		$nomA = $_POST["nomA"];
		$descA = $_POST["descA"];
		$nbParticipantA = $_POST["nbParticipantA"];
		$lieuA = $_POST["lieuA"];
		$dateA = $_POST["dateA"];
		$query="INSERT INTO activite(nomA, description_activite, nb_participant, lieu, dateA)
		VALUES('".$nomA."','".$descA."',".$nbParticipantA.",'".$lieuA."','".$dateA."')";
		$conn->query("SET NAMES utf8");
		if($conn->query($query)){
			$response=array(
				'status' => 1;
				'status_message' =>'Activité ajouté avec succès.');
		}
		else
		{
			$response = array(
				'status' => 0,
				'status_message' =>'ERREUR!.');
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
		//un seul activité
	function getActivite($id=0)
		{
			global $conn;
			$query = "SELECT * FROM activite";
			$response = array();
			if($id != 0){
				$query.=" WHERE id=".$id." LIMIT 1";
			}
			$conn->query("SET NAMES utf8"); 
			$result = $conn->query($query); 
			while ( $row = $result->fetch() ){
				$response[] = $row;
			}
			header('Content-Type: application/json');
			echo json_encode($response, JSON_PRETTY_PRINT);
		}
?>