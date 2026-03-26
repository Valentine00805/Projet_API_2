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
			// Ajouter une activiter
			AddActiviter();
			break;
		case 'PUT':
			// Modifier une ativiter
			$id = intval($_GET["id"]);
			updateActiviter($id);
			break;
		case 'DELETE':
			// Supprimer une activiter
			$id = intval($_GET["id"]);
			deleteActiviter($id);
			break;
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}
    
    function getActiviter()
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