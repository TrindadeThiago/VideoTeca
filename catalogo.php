<?php

    require("src/php/conexao.php");
    $query = "SELECT filme.id_filme, filme.titulo, genero.genero, filme.duracao, filme.ano, estudio.estudio, diretor.diretor, filme.sinopse
                FROM filme 
                INNER JOIN genero ON filme.id_genero = genero.id_genero
                INNER JOIN estudio ON filme.id_estudio = estudio.id_estudio
                INNER JOIN diretor ON filme.id_diretor = diretor.id_diretor "  ;
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
                <form action="" method="post">
                    <table class="espacamento table table-bordered table-hover table-responsive-md">
                        <tr>
                            <th>Título</th>
                            <th>Gênero</th>
                            <th>Duração</th>
                            <th>Ano</th>
                            <th>Estúdio</th>
                            <th>Diretor</th>
                            <th>Sinopse</th>
                            <th>Ações</th>
                        </tr>
                        <?php
                            while($res = mysqli_fetch_assoc($exe)){
                        ?>
                        <tr>
                            <td><?php echo $res['titulo']; ?></td>
                            <td><?php echo $res['genero']; ?></td>
                            <td><?php echo $res['duracao']; ?></td>
                            <td><?php echo $res['ano']; ?></td>
                            <td><?php echo $res['estudio']; ?></td>
                            <td><?php echo $res['diretor']; ?></td>
                            <td><?php echo $res['sinopse']; ?></td>
                            <td>
                                <button name="apagar" class="btn btn-danger">Apagar</button>
                            </td>
                            <?php echo"<td><input name='id' type='hidden' value='$res[id_filme]'/></td>";?>
                        </tr>
                        <?php } ?>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <!--BOOTSTRAP JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php
    if(isset($_POST['apagar'])) {
        $id = $_POST['id'];
        $delete = "DELETE FROM filme WHERE id_filme=$id";
        $exeDelete= mysqli_query($con, $delete);
    }
?>