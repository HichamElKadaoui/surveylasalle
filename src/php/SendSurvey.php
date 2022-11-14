<?php

namespace App;

class SendSurvey
{

    public function __construct()
    {
    }

    public function setComments($conn)
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
}