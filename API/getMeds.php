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
?>