<?php
$con=mysqli_connect("localhost","smf","cxEM8Tu4QCr6RHsA","gglan");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,"SELECT * FROM Persons");

mysqli_close($con);
?>