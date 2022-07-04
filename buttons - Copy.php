<?php
// define variables and set to empty values
$name = $address = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $address = test_input($_POST['address']);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Add person</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Address: <input type="text" name="address">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if ($name)
{
	include("add_user.php");
}
?>
<?php echo "<br>"; ?>
<a href = "table.php">
  <button type="button">Go back</button>
</a>

</body>
</html>