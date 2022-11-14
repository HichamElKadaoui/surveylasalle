<?php
namespace App;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto</title>
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

<div class="contact">
    <h3 class="contact">¿Quiénes somos?</h3>

    <div id="legende">
        <span class="photo">
            <img src="../images/logo2.png">
            <p>Carolina González : email@lasallistas.org.mx</p>
        </span>
        <span class="photo">
            <img src="../images/logo2.png">
            <p>Karime Aylen de la Cruz Vargas : ka.dlcv@lasallistas.org.mx</p>
        </span>
        <span class="photo">
            <img src="../images/logo2.png">
            <p>Hicham El Kadaoui : hicham.el@lasallistas.org.mx</p>
        </span>
    </div>
</div>

</body>
</html>