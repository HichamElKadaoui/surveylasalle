<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="../css/createform.css" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/logo2.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>

</head>
<body>
<div class="bloquer">
    <div class="brand">
        <a href="Accueil"><img class="logosite" src="../../images/logob.png"></a>
    </div>
</div>

<div class="formulaire">
    <h1>¿Cuáles son sus preguntas?</h1>
    <br/>
    <h2>¿Cuántas preguntas quieres hacer?</h2>
    <input onkeyup="addFields()" type="text" id="member" name="member" value="">

    <br/><br/><br/>

    <form id="CreateForm" method="post" >
        <div id="GenerateQuestions">

        </div>

        <button type="submit">Enviar<span></span> <span></span>
            <span></span> <span></span></button>

        <button onclick="location.href='connexion'" type="button">Descontinuar<span></span><span>
        </span><span></span><span></span></button>
        <p id="erreur"></p>
    </form>
</div>
<script src="js/Pages.js"></script>
</body>
</html>

