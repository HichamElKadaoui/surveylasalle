<?php

$conn = mysqli_connect('localhost', 'root', '', 'surveylasalle');

if($conn){
    print_r("Connexion succesfull to database");
}
else{
    die("Connection failed : ".mysqli_connect_error());
}