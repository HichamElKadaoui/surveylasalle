<?php

$conn = mysqli_connect('localhost', 'root', '', 'surveylasalle');

if($conn){
    print_r("");
}
else{
    die("Connection failed : ".mysqli_connect_error());
}