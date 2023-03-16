<?php

$mysql = new mysqli("localhost","root","","dbuca");

if($mysql->connect_error){
    echo "Error";
    die("Connection error");
} else{ 
    echo "Sucessful connection";
}

?>