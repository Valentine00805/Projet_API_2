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
				getActivite($id);
			}
			else
			{
				getActivite();
			}
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
	   while ( $row = $result->fetch(PDO::FETCH_ASSOC) ) 
		{
			$response[] = $row;
		}
		$result->closeCursor(); 
		header('Content-Type: application/json');
		echo json_encode($response, JSON_PRETTY_PRINT);
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
			while ( $row = $result->fetch(PDO::FETCH_ASSOC) ){
				$response[] = $row;
			}
			header('Content-Type: application/json');
			echo json_encode($response, JSON_PRETTY_PRINT);
		}
?>