<?php
include '../db/SendSurvey.php';
include '../db/connexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" sizes="16x16" href="../images/logo2.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Form</title>
    <link rel="stylesheet" type="text/css" href="../css/NewFormulaire.css">
</head>
<body>
<div class="brand">
    <a href="index.php"><img id="logosite" src="../images/logob.png" alt="logo site"></a>
</div>




<div class="formulaire">
    <h1>¡Cree su formulario!</h1>
    <?php
    echo "
    <form id='CreateForm' method='POST' action='".setComments($conn)."'>
        <div class='user-box'>
            <label>¿Cuál es el nombre de su formulario?</label>
            <br>
            <input type='text' name='name' id='name'>
            
        <div class='user-box'>
            <label>¿Cuando tiempo toma tu Survey ?</label>
            <br>
            <input type='number' name='time' id='time'>         
            
        </div>
        <div class='user-box'>
            <label>Tiempo estimado de respuesta :</label> 
            <br>
            <input type='text' name='timeform' id='timeform'>
            
        </div>

        <button id='button' type='submit'>Enviar<span></span> <span></span>
            <span></span> <span></span></button>

        <button id='button' onclick='location.href='Createform.php'' type='button'>Descontinuar<span></span><span>
        </span><span></span><span></span></button>
        <p id='erreur1'></p>

    </form>";

?>
</div>


</body>
</html>




