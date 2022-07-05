<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";

	try
	{
  		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  		// set the PDO error mode to exception
  		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  		$sql = "UPDATE user 
  				SET name = '$name', address = '$address'
  				WHERE id = $id";
  		// use exec() because no results are returned
 		$conn->exec($sql);
		 #echo '<pre>'; 
		 #print_r($results); 
		 #echo '</pre>';
	} 
	catch(PDOException $e) 
	{
  		"<br>" . $e->getMessage();
	}
	$conn = null;
?>