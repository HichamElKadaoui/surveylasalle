<?php


function setComments($conn)
{
    if (isset($_POST['commentSubmit'])) {
        $name = $_POST['name'];
        $time = $_POST['time'];
        $globquestion = $_POST['globquestion'];
        $questionA = $_POST['questionA'];
        $questionB = $_POST['questionB'];
        $questionC = $_POST['questionC'];

        $sql = "INSERT INTO forms (name, time, globquestion, questionA, questionB, questionC)
         VALUES ('$name', '$time', '$globquestion', '$questionA', '$questionB', '$questionC')";

        $result = $conn->query($sql);
    }

}

function updateforms($conn)
{
    if (isset($_POST['updateforms'])){
        $IDForm = $_POST['IDForm'];
        $name = $_POST['name'];
        $time = $_POST['time'];
        $globquestion = $_POST['globquestion'];
        $questionA = $_POST['questionA'];
        $questionB = $_POST['questionB'];
        $questionC = $_POST['questionC'];

        $sql = " UPDATE forms SET name = '".$name."', time = '".$time."', globquestion = '".$globquestion."', questionA = '".$questionA."', questionB = '".$questionB."', questionC = '".$questionC."' where IDForm = '".$IDForm."'";

        $result = mysqli_query($conn, $sql);
    }
}

