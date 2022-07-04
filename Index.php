<?php
	#header("Refresh:1");
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";

	try
	{
  		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  		// set the PDO error mode to exception
  		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  		$sql = "SELECT id,name,address FROM user";
  		$sth = $conn->query($sql);
  		$results = array();
  		while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) 
  		{
  			$results[] = $row; // appends each row to the array
		}	
		if(isset($_POST['delete']))
		{
			$sql = "DELETE FROM user WHERE id = :id";
			$result = $conn->prepare($sql);
			$result->bindParam(':id', $id, PDO::PARAM_INT);
			$id = $_REQUEST['id'];
			$result->execute();
			header("Location: table.php");
		}
		if(isset($_POST['search']))
		{
			$name = $_POST["search"];
			$sql = "SELECT id,name,address FROM user WHERE name = '$name'";
  			$sth = $conn->query($sql);
  			$results = array();
  			while( $row = $sth->fetch(PDO::FETCH_ASSOC) )
  			{
  				$results[] = $row; // appends each row to the array
			}
		}
		if(isset($_POST['update1']))
		{
			header("Location: update.php");
		}
		
		 #echo '<pre>'; 
		 #print_r($results); 
		 #echo '</pre>';
	} 
	catch(PDOException $e) 
	{
  		echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;
?>