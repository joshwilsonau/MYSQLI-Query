<?php
$query = "SELECT * FROM table";
$queryname = mysqli_query($connection, $query); {

  while($row = mysqli_fetch_assoc($queryname)) {
   // $var = $row['collumn name'];
    
  }
}
?>

On the left hand side is the variable and the $row is the column its coming from out of the Database.
$site_theme = $row['site_theme'];
