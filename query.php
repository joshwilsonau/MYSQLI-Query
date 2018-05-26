<?php
$query = "SELECT * FROM table";
$queryname = mysqli_query($connection, $query); {

  while($row = mysqli_fetch_assoc($queryname)) {
    $site_title = $row['site_title'];
    $site_desc = $row['site_description'];
    $site_key = $row['site_keywords'];
    $site_theme = $row['site_theme'];
    $date = $row['site_date'];
  }
}
?>

On the left hand side is the variable and the $row is the column its coming from out of the Database.
$site_theme = $row['site_theme'];
