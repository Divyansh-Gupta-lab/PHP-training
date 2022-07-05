<?php  include("index.php");  ?>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<h2>User</h2>
<form method = "post" action = "table.php">
  <input type="text" name="search">
  <br>
  <input type="submit" name="search_button  " value="Search"> 
  <a href = "table.php">
      <button type="button">Restore</button>
  </a>
</form>
  <br><br>
<table style="width:100%">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Address</th>
    <th>Change info</th>
    <th>Delete</th>
  </tr>
  <?php
  $c = count($results);
  for ( $i=0 ; $i<$c ; $i++)
  {  ?>
    <tr>
      <td><?php echo $results[$i]['id'];?></td>
      <td><?php echo $results[$i]['name'];?></td>
      <td><?php echo $results[$i]['address'];?></td>
      <td>
        <form action = "update.php" method = "GET">
          <input type = "hidden" name = "id" value = "<?php echo $results[$i]['id']; ?>">
          <input type = "hidden" name = "name" value = "<?php echo $results[$i]['name']; ?>">
          <input type = "hidden" name = "address" value = "<?php echo $results[$i]['address']; ?>">
          <input type = "submit" name = "update1" value = "Update"></form>
      </td>
      <td><form action = "" method = "POST"><input type = "hidden" name = "id" value = "<?php echo $results[$i]['id']; ?>"><input type = "submit" name = "delete" value = "Delete"></form></td>
    </tr>
  <?php 
    }
    ?>
</table>
<?php echo "<br>"; ?>
<a href = "buttons.php">
  <button type="button">Add user</button>
</a>
</body>
</html>