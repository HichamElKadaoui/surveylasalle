<?php

require_once '../db/connexion.php';


if(isset($_POST['update']))
{
    $UserID = $_GET['ID'];
    $name = $_POST['name'];
    $time = $_POST['time'];
    $globquestion = $_POST['globquestion'];
    $questionA = $_POST['questionA'];
    $questionB = $_POST['questionB'];
    $questionC = $_POST['questionC'];

    $query = " UPDATE forms SET name = '".$name."', time = '".$time."', globquestion = '".$globquestion."', questionA = '".$questionA."', questionB = '".$questionB."', questionC = '".$questionC."' WHERE IDForm = '".$UserID."'";
    $result = mysqli_query($conn,$query);

    if($result){
        header("location:Viewform.php");
    }
    else{
        echo "Please check your query";
    }
}
        else{
            echo "if not executed";
        }


?>