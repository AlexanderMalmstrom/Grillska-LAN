<?php
    //Display errors for debug purposes
    ini_set('display_errors', "1");

    //Checks if there is any POST data
    if(empty($_POST))
    {
        echo "No data";
        die;
    }

    //Turn all POST data to PHP variables for easier use
    $name = $_POST["name"];
    $nick = $_POST["nick"];
    $parentName = $_POST["parentName"];
    $parentNumber = $_POST["parentNumber"];
    $seat = $_POST["seat"];


    //Print all POST for debug purposes
    echo "$name <br>";
    echo "$nick <br>";
    echo "$parentName <br>";
    echo "$parentNumber <br>";
    echo "$seat";
  ?>