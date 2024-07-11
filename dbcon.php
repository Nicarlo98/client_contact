<?php


    $con = mysqli_connect("localhost","root","","client");

    if (!$con) {
        die('Connection Failed'. mysqli_connect_error());
    }
    /*
    $server = 'localhost';
    $username = 'root';
    $password = 'Klievizo@98';
    $database = 'client';
    $connection = new mysqli($server, $username, $password, $database) or die("not connected");
    echo "connected"
*/
?>