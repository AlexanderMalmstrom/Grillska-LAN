<?php
    //Display errors for debug purposes
    ini_set('display_errors', "1");
    $file = 'booking.txt';

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


    $msg = " Name: $name \n Email: $mail \n Parent name: $parentName \n Parent number: $parentNumber \n Seats: $seats \n \n \n";
    $headers .= 'From: <noreply@grillskagaming.org>' . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $msg = wordwrap($msg,70);
    $msgToMail = "Tack för att du vill komma och LANa! \n du har reserverat $seats platser";
    $msgToMail = wordwrap($msgToMail,70);
    $msg = utf8_encode($msg);

    //mail("jag@alexandermalmstrom.se", "Booking", $msg, $headers);
    file_put_contents($file, $msg, FILE_APPEND | LOCK_EX);

    mail($mail, "Bokning", $msgToMail, $headers);
     echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../index.html">';
  ?>