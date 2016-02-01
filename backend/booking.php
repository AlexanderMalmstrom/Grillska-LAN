<?php
  ini_set('display_errors', "1");

  $name = $_POST["name"];
  $nick = $_POST["nick"];
  $parentName = $_POST["parentName"];
  $parentNumber = $_POST["parentNumber"];
  $seat = $_POST["seat"];
  echo "$name <br>";
  echo "$nick <br>";
  echo "$parentName <br>";
  echo "$parentNumber <br>";
  echo "$seat";
  ?>