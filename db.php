<?php

$con = new mysqli("localhost","root","","ag_store");

if($con->connect_error){
    echo"Failed to connect " .$con->connect_error;
    exit();
}

?>