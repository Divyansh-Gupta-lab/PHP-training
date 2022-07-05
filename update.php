<?php
// define variables and set to empty values
$name = ""; 
$address = "";
$id = "";
$temp = "";
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
  }
  if(isset($_GET['name']))
  {
    $name = $_GET['name'];
  }
  if(isset($_GET['address']))
  {
    $address = $_GET['address'];
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['id']))
  {
    $id = test_input($_POST['id']);
  }
  if (isset($_POST['name']))
  {
    $name = test_input($_POST['name']);
  }
  if (isset($_POST['address']))
  {
    $address = test_input($_POST['address']);
    header("Location: table.php");
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Update person info</h2>
<form method="post" action="update.php">  
  Id: <?php echo $id;?>
  <input type="hidden" name = "id" value = "<?php print $id; ?>">
  <br><br>
  New Name: <input type="text" name="name" value = "<?php print $name; ?>">
  <br><br>
  New Address: <input type="text" name="address" value = "<?php print $address; ?>">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
include("update_user.php");

#echo "<h2>Your Input:</h2>";
#echo $id;
#echo "<br>";
#echo $name;
#echo "<br>";
#echo $address;
#echo "<br>";
?>
<?php echo "<br>"; ?>
<a href = "table.php">
  <button type="button">Go back</button>
</a>

</body>
</html>