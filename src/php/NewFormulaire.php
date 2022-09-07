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
    <form id="CreateForm" method="post">
        <div class="user-box">
            <input type="text" name="nameform" id="nameform">
            <label>¿Cuál es el nombre de su formulario?</label>
            <div class="anonyme">
                <p class="lanonyme">¿Las respuestas son anónimas?</p>
                <p></p>
                <input type="checkbox" class="cboxa" name="cnameform" id="cnameform" >
            </div>
        </div>
        <div class="user-box">
            <input type="text" name="timeform" id="timeform">
            <label>Tiempo estimado de respuesta (en minutos) :</label>
        </div>

        <button id="button" type="submit" onclick="location.href='Createform2.php">Enviar<span></span> <span></span>
            <span></span> <span></span></button>

        <button id="button" onclick="location.href='Createform.php'" type="button">Descontinuar<span></span><span>
        </span><span></span><span></span></button>
        <p id="erreur1"></p>

    </form>
</div>

</body>
</html>




