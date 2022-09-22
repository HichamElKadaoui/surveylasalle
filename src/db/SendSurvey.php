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
        $votedA = $_POST['votedA'];
        $votedB = $_POST['votedB'];
        $votedC = $_POST['votedC'];

        $sql = "INSERT INTO forms (name, time, globquestion, questionA, questionB, questionC, votedA, votedB, votedC)
         VALUES ('$name', '$time', '$globquestion', '$questionA', '$questionB', '$questionC', '$votedA', '$votedB', '$votedC')";

        $result = $conn->query($sql);
    }

}

function getComments($conn)
{
    $sql = "SELECT * FROM forms";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment-box'><p>";
        echo $row['name'] . " ";
        echo $row['questionA'] . "<br>";
        echo $row['questionB'] . "<br>";
        echo $row['questionC'] . "<br>";
        echo $row['votedA'] . "<br>";
        echo $row['votedB'] . "<br>";
        echo $row['votedC'] . "<br>";
        echo "</p></div>";
    }

}