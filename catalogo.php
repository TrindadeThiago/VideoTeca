<?php

    require("src/php/conexao.php");
    $query = "SELECT * FROM filme";
    $exe = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VideoTeca - Cátologo</title>

    <link rel="shortcut icon" href="src/assets/icon/favicon.ico" type="image/x-icon">

    <!--CSS-->
    <link rel="stylesheet" href="public/css/style.css">

    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!--MENU-->
    <?php
        require_once('src/template/menu.html');
    ?>

    <!--CORPO-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="espacamento title-catalogo">Nosso Catálogo</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="espacamento table table-bordered table-hover table-responsive-md">
                    <tr>
                        <th>Título</th>
                        <th>Gênero</th>
                        <th>Duração</th>
                        <th>Ano</th>
                        <th>Estúdio</th>
                        <th>Páis</th>
                        <th>Diretor</th>
                    </tr>
                    <?php
                        while($res = mysqli_fetch_assoc($exe)){
                    ?>
                    <tr>
                        <td><?php echo $res['titulo']; ?></td>
                        <td><?php echo $res['id_genero']; ?></td>
                        <td><?php echo $res['duracao']; ?></td>
                        <td><?php echo $res['ano']; ?></td>
                        <td><?php echo $res['id_estudio']; ?></td>
                        <td><?php echo $res['id_pais']; ?></td>
                        <td><?php echo $res['id_diretor']; ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <!--BOOTSTRAP JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>