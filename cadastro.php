<?php
  require("src/php/conexao.php");
  $query = "SELECT * FROM genero";
  $exe = mysqli_query($con, $query);

  $query_pais = "SELECT * FROM pais";
  $exe_pais = mysqli_query($con, $query_pais);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VideoTeca - Cadastro</title>

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

    <!--CONTEUDO-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="src/php/valida.php" method="post" id="cadastro">
                    <div class="title">
                        <h3 class="espacamento title-form">Cadastre um filme</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="titulo" class="espacamento">Título:</label>
                                <input type="text" name="titulo" id="titulo" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="espacamento" for="duracao">Duração:</label>
                                <input type="time" name="duracao" id="duracao" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="espacamento" for="genero">Gênero:</label>
                                <select name="genero" id="genero" class="form-control">
                                    <option value="">Selecione um gênero</option>
                                    <?php while($res = mysqli_fetch_assoc($exe)){ ?>
                                      <option value="<?php echo $res['id_genero']; ?>"><?php echo $res['genero']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="espacamento" for="ano">Ano:</label>
                                <input type="number" name="ano" id="ano" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="espacamento" for="estudio">Estúdio:</label>
                                <input type="text" name="estudio" id="estudio" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="espacamento" for="pais">País:</label>
                                <select name="pais" id="pais" class="form-control">
                                    <option value="">Selecione um país</option>
                                    <?php while($res_pais = mysqli_fetch_assoc($exe_pais)){ ?>
                                      <option value="<?php echo $res_pais['id_pais']; ?>"><?php echo $res_pais['pais']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="espacamento" for="diretor">Diretor:</label>
                                <input type="text" name="diretor" id="diretor" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="espacamento" for="sinopse">Sinopse:</label>
                                <textarea name="sinopse" id="sinopse" row="3" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="btn" value="inserir" class="btn btn-custom">Cadastrar</button>
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
