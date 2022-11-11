<?php

    require_once ('../db/connexion.php');

    if(isset($_GET['Del']))
    {
        $ID = $_GET['Del'];
        $query = "DELETE from forms WHERE IDForm ='".$ID."'";
        $result = mysqli_query($conn, $query);

        if($result){

            header("location:Viewform.php");
    }
        else{
            echo "Please check your query";
        }
    }


?>