<?php
include '../db/SendSurvey.php';
include '../db/connexion.php';

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



<section class="navigation">
    <div class="brand">
        <a href="index.php"><img class="logosite" src="../images/logob.png"></a>
    </div>

    <div class="nav-container">
        <nav>
            <div class="nav-mobile"><a class="nav-toggle" href="Accueil"><span></span></a></div>
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

<p>En esta página puede buscar los formularios de todos los usuarios.</p>



<div class="container">
    <div class="row height d-flex justify-content-center align-items-center">

        <div class="col-md-6">

            <div class="form">
                <i class="fa fa-search"></i>
                <input type="text" class="form-control form-input" placeholder="Busca un formulario">
                <span class="left-pan"><i class="fa fa-microphone"></i></span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col m-auto">
            <div class="card mt-5 text-dark">


<table style="background-color: #0c5460" class="table table-bordered">
    <tr>
        <td>Los Formularios</td>
    </tr>
</table>


<?php

        $sql = "select * from forms";
        $result = $conn->query($sql);

        while ($row=mysqli_fetch_assoc($result))
        {
            $name = $row['name'];
            $ID = $row['IDForm'];

?>

    <tr class="ml-0">
        <td><span><?php echo $name?></span>
            <span><a href="edit.php?GetID=<?php echo $ID ?>">Edit</a></span>
            <span><a href="delete.php?Del=<?php echo $ID ?>">Delete</a></span>
            <hr></td>
    </tr>

<?php
        }
?>

            </div>
        </div>
    </div>
</div>



</body>
</html>