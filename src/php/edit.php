<?php

    namespace App;

include '../db/connexion.php';
include 'update.php';
$ID = $_GET['GetID'];
$query = "select * from forms where IDForm='".$ID."'";
$result = mysqli_query($conn, $query);

while($row=mysqli_fetch_assoc($result))
{
    $name = $row['name'];
    $ID = $row['IDForm'];
    $time = $row['time'];
    $globquestion = $row['globquestion'];
    $questionA = $row['questionA'];
    $questionB = $row['questionB'];
    $questionC = $row['questionC'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver los Formularios</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/Viewform.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>

<body>

<div class="formulaire">

<form id='CreateForm' method='POST' action='update.php?ID=<?php echo $ID ?>' name="update">
    <div class='user-box'>
        <div class='user-box'>
            <label for='name'>¿Cuál es el nombre de su formulario?</label>
            <br><br>
            <input type='text' name='name' id='name' value="<?php echo $name ?>">
        </div>

        <div class='user-box'>
            <label for='time'>¿Cuando tiempo toma tu Survey ? (en minutos)</label>
            <br><br>
            <input type='number' name='time' id='time' value="<?php echo $time ?>">
        </div>

        <div class='user-box'>
            <label for='globquestion'>¿Cuál es su pregunta?</label>
            <br><br>
            <input type='text' name='globquestion' id='globquestion' value="<?php echo $globquestion ?>">
        </div>

        <div class='user-box'>
            <label for='votedA'>Respuesta A</label>
            <br><br>
            <input type='text' name='questionA' id='questionA' value="<?php echo $questionA ?>">
        </div>

        <div class='user-box'>
            <label for='votedB'>Respuesta B</label>
            <br><br>
            <input type='text' name='questionB' id='questionB' value="<?php echo $questionB ?>">
        </div>

        <div class='user-box'>
            <label for='votedC'>Respuesta C</label>
            <br><br>
            <input type='text' name='questionC' id='questionC' value="<?php echo $questionC ?>">
        </div>

        <form action='index.php' id='button'>
            <button style="background-color: white; margin-top: 1.5%; margin-bottom: 1.5%" id='button' type='submit' name=update>Enviar<span></span> <span></span>
                <span></span> <span></span></button>
        </form>



        <form action='index.php' id='button'>
            <input id='button' type='submit' value='Discontinuar'>
        </form>


        <p id='erreur1'></p>
    </div>

</form>
</div>
</body>