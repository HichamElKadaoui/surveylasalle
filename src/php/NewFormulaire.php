<?php
namespace App;
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
            <div class='user-box'>
            <label for='name'>¿Cuál es el nombre de su formulario?</label>
            <br><br>
            <input type='text' name='name' id='name'>
            </div>
        
            <div class='user-box'>
            <label for='time'>¿Cuando tiempo toma tu Survey ? (en minutos)</label>
            <br><br>
            <input type='number' name='time' id='time'>             
            </div>
        
            <div class='user-box'>
            <label for='globquestion'>¿Cuál es su pregunta?</label>
            <br><br>
            <input type='text' name='globquestion' id='globquestion'>             
            </div>
            
            <div class='user-box'>
            <label for='votedA'>Respuesta A</label>
            <br><br>
            <input type='text' name='questionA' id='questionA'>
            </div>
            
            <div class='user-box'>
            <label for='votedB'>Respuesta B</label>
            <br><br>
            <input type='text' name='questionB' id='questionB'>
            </div>
            
            <div class='user-box'>
            <label for='votedC'>Respuesta C</label>
            <br><br>
            <input type='text' name='questionC' id='questionC'>
            </div>
        
        <form action='index.php' id='button'>
        <button id='button' type='submit' name='commentSubmit'>Enviar<span></span> <span></span>
            <span></span> <span></span></button>
        </form>
            
            
            
            
        <form action='#' id='button'>
        </form>
            
        
      
        <form action='index.php' id='button'>
        <input id='button' type='submit' value='Discontinuar'>
        </form>     
        
        
        <p id='erreur1'></p>
        </div>

    </form>";

?>
</div>


</body>
</html>




