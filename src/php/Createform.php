<?php
namespace App;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cree su formulario</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>

<section class="navigation">
    <div class="brand">
        <a href="index.php"><img class="logosite" src="../images/logob.png"></a>
    </div>

    <div class="nav-container">
        <nav>
            <div class="nav-mobile"><a class="nav-toggle" href="index.php"><span></span></a></div>
            <ul class="nav-list">

                <li>
                    <a href="#!">Formularios</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="Viewform.php">Ver los formularios</a>
                        </li>
                        <li>
                            <a href="Createform.php">Cree su formulario</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="Contacto.php">Contacte con</a>
                </li>
            </ul>
        </nav>
    </div>
</section>

<br><br><br><br>

<div class="intro">
    <p>En esta página puede crear sus propios formularios.<br><br>
        Recuerde que los formularios tienen forma de botones de respuesta de opción múltiple !
    </p>

    <a href="NewFormulaire.php">
        <button type="button" style="background: white; width: 20%; font-size: 100%">Creas tu formulario !</button><span></span><span>
        </span><span></span><span></span></button>
    </a>
</div>


</body>
</html>