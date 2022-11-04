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

        echo "</p></div>";
    }

}