<?php

$server ="localhost";
$user ="root";
$pass= "";
$dbname="bloodbankbd";
$conn=mysqli_connect($server,$user,$pass,$dbname);
if(!$conn){
    die("Connectin falid".mysqli_connect_error());
}


?>