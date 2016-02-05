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
    //$nick = $_POST["nick"];
    $parentName = $_POST["parentName"];
    $parentNumber = $_POST["parentNumber"];
    $seats = $_POST["seats"];
    $mail = $_POST["mail"];


    //Print all POST for debug purposes
    echo "Name: $name <br>";
    echo "Email: $mail <br>";
    //echo "$nick <br>";
    echo "Parent name: $parentName <br>";
    echo "Parent number: $parentNumber <br>";
    echo "Seats: $seats";

    mail("jag@alexandermalmstrom.se");
  ?>